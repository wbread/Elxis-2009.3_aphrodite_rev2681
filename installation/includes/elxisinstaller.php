<?php 
/**
* @version: $Id$
* @copyright: Copyright (C) 2006-2009 Elxis.org. All rights reserved.
* @package: Elxis
* @subpackage: Elxis CMS Installer
* @author: Elxis Team (Ioannis Sannos & Ivan Trebjesanin)
* @email: info@elxis.org
* @link: http://www.elxis.org
* @description: Elxis CMS Installer
* @license: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
*/

if (!defined('_ELXIS_INSTALLER')) { die('You are not allowed to access this resource'); }


class elxisInstaller {

    public $maxsteps = 7;
    public $customHeaders = array();
    public $lang = 'english';
    public $step = 0;
    public $iswin = false;
    public $ismac = false;
    public $isuni = true;
    public $abspath;
    public $db;
    public $_config = array();
    public $errors = array();
	public $confsaved = false;
	public $default_tpl = 'okto';


    /***************/
    /* CONSTRUCTOR */
    /***************/
    public function __construct($abspath) {
        $this->abspath = $abspath;
        $this->setOS();
        $this->setStep();
        $this->loadLanguage();
        $this->importConfig();
    }


    /***************************/
    /* LOAD INSTALLER LANGUAGE */
    /***************************/
    private function loadLanguage() {
        $mylang = 'english';
        if (isset($_REQUEST['mylang'])) {
            $mylang = htmlspecialchars($_REQUEST['mylang']);
        } else if (isset($_SESSION['mylang'])) {
            $mylang = htmlspecialchars($_SESSION['mylang']);
        } else {
            $mylang = $this->detectUserLang();
        }
        if (!file_exists($this->abspath.'/language/'.$mylang.'.install.php')) { $mylang = 'english'; }
        $_SESSION['mylang'] = $mylang;
        $this->lang = $mylang;
    }


	/**********************************/
	/* IMPORT TEMPORARY CONFIGURATION */
	/**********************************/
	private function importConfig() {
		if (!file_exists($this->abspath.'/tmpconfig.php')) {
			$this->errors[] = 'Temporary configuration file tmpconfig.php does not exist!';
			return;
		}
		include($this->abspath.'/tmpconfig.php');
		if (isset($tmpConfig) && is_array($tmpConfig) && (count($tmpConfig) > 0)) {
			foreach($tmpConfig as $tk => $tv) {
				$this->_config[$tk] = $tv;
			}
			unset($tmpConfig);
		}
	}


	/*************************************/
	/* GET CONFIGURATION PARAMETER VALUE */
	/*************************************/
	public function getCfg($var='', $default='') {
		if ($var == '') { return false; }
		return (isset($this->_config[$var])) ? $this->_config[$var] : $default;
	}


    /*************************/
    /* SET INSTALLATION STEP */
    /*************************/
    private function setStep() {
        $step = 0;
        if (isset($_GET['step'])) {
            $step = intval($_GET['step']);
        } else if (isset($_POST['step'])) {
            $step = intval($_POST['step']);
        }
        if (($step < 0) || ($step > $this->maxsteps)) { $step = 0; }
        $this->step = $step;
    }


    /****************/
    /* PROCESS STEP */
    /****************/
    public function processStep() {
        if (file_exists($this->abspath.'/includes/step'.$this->step.'.php')) {
            require_once($this->abspath.'/includes/step'.$this->step.'.php');
        } else {
        	mosRedirect($this->elxisSiteURL().'/installation/error.php', 'Invalid installation step!' );
        }
    }


	/***************************************/
	/* UPDATE TEMPORARY CONFIGURATION FILE */
	/***************************************/
	private function writeTempConfig() {
		global $iLang;

		if (!$this->_config || (count($this->_config) == 0)) {
			$this->errors[] = 'Seems that there are no configuration variables!';
			return false;
		}

		$data = '<?php '._LEND;
		$data .= '$tmpConfig = array('._LEND;
		foreach($this->_config as $k => $v) {
			$data .= "\t"."'".$k."' => '".$v."',"._LEND;
		}
		$data .= ');'._LEND;
		$data .= '?>';

		$okw = $this->writetofile($data, $this->abspath.'/tmpconfig.php');
		if (!$okw) { $this->errors[] = $iLang->CNOTWRTMPCFG; }
		return $okw;
	}


	/************************/
	/* WRITE DATA TO A FILE */
	/************************/
	private function writetofile($data='', $file='') {
		if (($file == '') || !file_exists($file) || !is_file($file)) { return false; }
		if ($handle = @fopen($file, 'w')) {
            @fwrite($handle, $data);
            @fclose($handle);
            @chmod($file, 0666);
            return true;
		}
		$ok = false;
		if ($this->_config['ftp'] && ($this->_config['ftp_root'] != '')) {
			$elxis_root = $this->elxisRootDir();
			$relfile = substr($file, strlen($elxis_root));
			$relfile = preg_replace('/^(\/)/', '', $relfile);
        	$fpath = $this->FTPpath($relfile);

			$ftpcon = @ftp_connect($this->_config['ftp_host']);
			$login = @ftp_login($ftpcon, $this->_config['ftp_user'], $this->_config['ftp_pass']);
			if ($login) {
				$temp = tmpfile();
				@ftp_fput($ftpcon, $fpath, $temp, FTP_ASCII);
				@ftp_site($ftpcon,'CHMOD 0666 '.$fpath);
				if ($fp = @fopen($file, 'w')) {
            		@fwrite($fp, $data);
            		@fclose($fp);
            		$ok = true;
            	}
				@ftp_site($ftpcon,'CHMOD 0644 '.$fpath);
			}
			@ftp_close($ftpcon);
		}
		return $ok;
	}


    /**********************************/
    /* PERFORM TASKS BEFORE ECHO HTML */
    /**********************************/
    public function beforeHTML() {
        global $iLang;

        if ($this->step == 1) { //license
            $out = '<script type="text/javascript">'._LEND;
            $out .= 'var checkobj;'._LEND;
            $out .= 'function agreesubmit(el){'._LEND;
            $out .= 'checkobj=el;'._LEND;
            $out .= 'if (document.all||document.getElementById){'._LEND;
            $out .= 'for (i=0; i<checkobj.form.length; i++){'._LEND;
			$out .= 'var tempobj=checkobj.form.elements[i];'._LEND;
			$out .= 'if(tempobj.type.toLowerCase()=="submit") {'._LEND;
			$out .= 'tempobj.disabled=!checkobj.checked;'._LEND;
            $out .= '}}'._LEND;
			$out .= 'switchbutton();'._LEND;
			$out .= '}}'._LEND;
            $out .= 'function defaultagree(el){'._LEND;
            $out .= 'if (!document.all && !document.getElementById){'._LEND;
            $out .= 'if (window.checkobj && checkobj.checked) {'._LEND;
            $out .= 'return true;'._LEND;
            $out .= '} else {'._LEND;
            $out .= 'alert("'.$iLang->DEFAULT_AGREE.'");'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '}}}'._LEND;
            $out .= '</script>'._LEND;
            $this->setCustomHeader($out);

        } else if ($this->step == 2) { //FTP settings
            $out = '<script type="text/javascript">'._LEND;
            $out .= 'function checkftpform() {'._LEND;
            $out .= 'var f = document.frmftpinfo;'._LEND;
            $out .= 'var useftp = \'0\';'._LEND;
            $out .= 'for (var i=0; i < f.ftp.length; i++) { if (f.ftp[i].checked) { useftp = f.ftp[i].value; }}'._LEND;
			$out .= 'if ((useftp == 1) && (f.ftp_host.value == \'\')) {'._LEND;
            $out .= 'alert(\''.$iLang->FTPHOST_EMPTY.'\');'._LEND;
    		$out .= 'f.ftp_host.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if ((useftp == 1) && (f.ftp_user.value == \'\')) {'._LEND;
            $out .= 'alert(\''.$iLang->FTPUSER_EMPTY.'\');'._LEND;
    		$out .= 'f.ftp_user.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if ((useftp == 1) && (f.ftp_pass.value == \'\')) {'._LEND;
            $out .= 'alert(\''.$iLang->FTPPASS_EMPTY.'\');'._LEND;
    		$out .= 'f.ftp_pass.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if ((useftp == 1) && (f.ftp_root.value == \'\')) {'._LEND;
            $out .= 'alert(\''.$iLang->FTPPATH_EMPTY.'\');'._LEND;
    		$out .= 'f.ftp_root.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if ((useftp == 1) && (f.ftp_port.value == \'\')) {'._LEND;
            $out .= 'alert(\''.$iLang->FTPPORT_EMPTY.'\');'._LEND;
    		$out .= 'f.ftp_port.focus();'._LEND;
    		$out .= 'return false;'._LEND;
            $out .= '}'._LEND;
            $out .= 'return true;'._LEND;
            $out .= '}'._LEND;
            $out .= '</script>'._LEND;
			$this->setCustomHeader($out);

        } else if ($this->step == 3) { //database
        	$this->exstep2();

            $out = '<script type="text/javascript">'._LEND;
            $out .= 'function checkdbform() {'._LEND;
            $out .= 'var f = document.frmdbinfo;'._LEND;
            $out .= 'if (f.host.value == \'\') {'._LEND;
            $out .= 'alert("'.$iLang->MSG_HOSTNAME.'");'._LEND;
            $out .= 'f.host.focus();'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '} else if (f.db.value == \'\') {'._LEND;
            $out .= 'alert("'.$iLang->MSG_DBNAMEPATH.'");'._LEND;
            $out .= 'f.db.focus();'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '} else if (f.user.value == \'\') {'._LEND;
            $out .= 'alert("'.$iLang->MSG_DBUSERNAME.'");'._LEND;
            $out .= 'f.user.focus();'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '} else if (f.password.value == \'\') {'._LEND;
            $out .= 'alert("'.$iLang->DBPASS.'");'._LEND;
            $out .= 'f.password.focus();'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '} else if (f.password.value != f.verifypassword.value ) {'._LEND;
            $out .= 'alert("'.$iLang->PASS_NOTMATCH.'");'._LEND;
            $out .= 'f.verifypassword.focus();'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '} else if (confirm(\''.$iLang->MSG_SURE.'\')) {'._LEND;
            $out .= 'return true;'._LEND;
            $out .= '}'._LEND;
            $out .= 'return false;'._LEND;
            $out .= '}'._LEND;
            $out .= '</script>'._LEND;
            $this->setCustomHeader($out);
        } else if ($this->step == 4) { //Site settings
			$this->exstep3();

            $out = '<script type="text/javascript">'._LEND;
            $out .= 'function checkssform() {'._LEND;
            $out .= 'var f = document.frmssinfo;'._LEND;
			$out .= 'if ( f.sitename.value == \'\' ) {'._LEND;
            $out .= 'alert(\''.$iLang->ENTERSITENAME.'\');'._LEND;
    		$out .= 'f.sitename.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if ( f.live_site.value == \'\' ) {'._LEND;
            $out .= 'alert(\''.$iLang->SITEURL_EMPTY.'\');'._LEND;
    		$out .= 'f.live_site.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if ( f.absolute_path.value == \'\' ) {'._LEND;
            $out .= 'alert(\''.$iLang->ABSPATH_EMPTY.'\');'._LEND;
    		$out .= 'f.absolute_path.focus();'._LEND;
    		$out .= 'return false;'._LEND;
            $out .= '}'._LEND;
            $out .= 'return true;'._LEND;
            $out .= '}'._LEND;
            $out .= '</script>'._LEND;

            $this->setCustomHeader($out);

        } else if ($this->step == 5) { //Content and layout
        	$this->exstep4();

        } else if ($this->step == 6) {
        	$this->exstep5();

            $out = '<script type="text/javascript">'._LEND;
            $out .= 'function checkpersform() {'._LEND;
            $out .= 'var f = document.frmpersoninfo;'._LEND;
			$out .= 'if (f.adminUName.value == \'\') {'._LEND;
            $out .= 'alert(\'Administrator username is empty!\');'._LEND;
    		$out .= 'f.adminUName.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if (f.adminName.value == \'\') {'._LEND;
            $out .= 'alert(\''.$iLang->EMPTYNAME.'\');'._LEND;
    		$out .= 'f.adminName.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if (f.adminEmail.value == \'\') {'._LEND;
            $out .= 'alert(\''.$iLang->VALIDEMAIL.'\');'._LEND;
    		$out .= 'f.adminEmail.focus();'._LEND;
    		$out .= 'return false;'._LEND;
			$out .= '} else if (f.adminPassword.value == \'\') {'._LEND;
            $out .= 'alert(\''.$iLang->EMPTYPASS.'\');'._LEND;
    		$out .= 'f.adminPassword.focus();'._LEND;
    		$out .= 'return false;'._LEND;
            $out .= '}'._LEND;
            $out .= 'return true;'._LEND;
            $out .= '}'._LEND;
            $out .= '</script>'._LEND;
            $this->setCustomHeader($out);

        } else if ($this->step == 7) {
        	$this->exstep6();
        }

    }


	/***************************************************/
	/* EXECUTE STEP 2 (BEFORE STEP 3 - FTP SETTTINGS ) */
	/***************************************************/
	private function exstep2() {
		global $iLang;

		if (!isset($_POST['next'])) {
			if (isset($_POST['back'])) { //back button
				return true;
			} else { //direct request
				$this->errors[] = 'Please follow Elxis installation procedure step-by-step.';
				return false;
			}
		}
		$this->_config['ftp'] = intval(mosGetParam($_POST, 'ftp', 0));
		$this->_config['ftp_host'] = trim(mosGetParam($_POST, 'ftp_host', 'localhost'));
		$this->_config['ftp_user'] = trim(mosGetParam($_POST, 'ftp_user', ''));
		$this->_config['ftp_pass'] = trim(mosGetParam($_POST, 'ftp_pass', ''));
		$this->_config['ftp_root'] = trim(mosGetParam($_POST, 'ftp_root', ''));
		$this->_config['ftp_port'] = intval(mosGetParam($_POST, 'ftp_port', 21));

		$ok = 1;
		if ($this->_config['ftp']) {
			if ($this->_config['ftp_host'] == '') {
				$ok = 0;
				$this->errors[] = $iLang->FTPHOST_EMPTY;
			} elseif ($this->_config['ftp_user'] == '') {
				$ok = 0;
				$this->errors[] = $iLang->FTPUSER_EMPTY;
			} elseif ($this->_config['ftp_pass'] == '') {
				$ok = 0;
				$this->errors[] = $iLang->FTPPASS_EMPTY;
			} elseif ($this->_config['ftp_root'] == '') {
				$ok = 0;
				$this->errors[] = $iLang->FTPPATH_EMPTY;
			} elseif ($this->_config['ftp_port'] < 1) {
				$ok = 0;
				$this->errors[] = $iLang->FTPPORT_EMPTY;
			}
		}

		if (!$ok) { return false; }
		return $this->writeTempConfig();
	}


	/****************************************************************/
	/* EXECUTE STEP 3 (BEFORE STEP 4 - DB SETTTINGS AND BASIC DATA) */
	/****************************************************************/
	private function exstep3() {
		global $iLang;

		if (!isset($_POST['next'])) {
			if (isset($_POST['back'])) { //back button
				return true;
			} else { //direct request
				$this->errors[] = 'Please follow Elxis installation procedure step-by-step.';
				return false;
			}
		}
		$this->_config['host'] = trim(mosGetParam($_POST, 'host', 'localhost'));
		$this->_config['dbtype'] = trim(mosGetParam($_POST, 'dbtype', 'mysql'));
		$this->_config['db'] = trim(mosGetParam($_POST, 'db', ''));
		$this->_config['dbprefix'] = trim(mosGetParam( $_POST, 'dbprefix', 'elx_'));
		$this->_config['user'] = trim(mosGetParam($_POST, 'user', ''));
		$this->_config['password'] = trim(mosGetParam($_POST, 'password', ''));
		$verifypassword = trim(mosGetParam($_POST, 'verifypassword', ''));

		$this->writeTempConfig();

		$DBDel = intval(mosGetParam($_POST, 'DBDel', 0));
		$DBBackup = intval(mosGetParam($_POST, 'DBBackup', 0));

        if ($this->_config['host'] == '') { $this->errors[] = $iLang->MSG_HOSTNAME; }
        if ($this->_config['user'] == '') { $this->errors[] = $iLang->MSG_DBUSERNAME; }
        if ($this->_config['password'] == '') { $this->errors[] = $iLang->DBPASS_COMMENT; }
        if ($this->_config['password'] != $verifypassword) { $this->errors[] = $iLang->PASS_NOTMATCH; }

        if ($this->_config['db'] == '') { $this->errors[] = $iLang->MSG_DBNAMEPATH; }
        $dbp = str_replace('\\', '/', $this->_config['db']);
        if (preg_match('/\//', $dbp)) {
            if (!is_file($this->_config['db']) || !file_exists($this->_config['db'])) {
                $this->errors[] = $iLang->DBFILE_NOEXIST;
            }
        }

		if (count($this->errors) > 0) { return false; }

        if (!$this->connectCreatedb()) { return false; }

        $oradrivers = array('oci8', 'oci805', 'oci8po', 'oracle');
		if (in_array($this->_config['dbtype'], $oradrivers) && function_exists('set_time_limit') && is_callable('set_time_limit')) {
			set_time_limit(120); //Oracle installation is too CPU consuming
		}

		if ($DBDel) { $this->dropdbTables($DBBackup); }

        //Create a new adoSchema object
        if (file_exists($this->abspath.'/schema/elxis_'.$this->_config['dbtype'].'.xml' )) {
            $schemaf = 'elxis_'.$this->_config['dbtype'].'.xml';	
        } else {
            $schemaf = 'elxis.xml';	
        }

		$schema = new adoSchema($this->db);
        $schema->ContinueOnError(true);
        $schema->SetPrefix($this->_config['dbprefix']);
        $schema->ParseSchema($this->abspath.'/schema/'.$schemaf);
        $schema->ExecuteSchema();
        
        $this->fixamenuLinks();

        $this->loadSoftDisk();

		//Fix PostgreSQL sequences
		if (preg_match('/postgre/i', $this->_config['dbtype'])) { $this->fixpgSequences(); }

        $this->db->Close();
        return true;
	}


	/********************************************/
	/* FIX ADMIN MENU LINKS (LIBXML 2.7.2- BUG) */
	/********************************************/
	private function fixamenuLinks() {
		$fixes = array(
			array('option=com_bannerstask=listclients', 'option=com_banners&amp;task=listclients'),
			array('option=categoriessection=com_weblinks', 'option=categories&amp;section=com_weblinks'),
			array('option=categoriessection=com_contact_details', 'option=categories&amp;section=com_contact_details'),
			array('option=com_categoriessection=com_newsfeeds', 'option=com_categories&amp;section=com_newsfeeds'),
			array('option=com_massmailhidemainmenu=1', 'option=com_massmail&amp;hidemainmenu=1'),
			array('option=com_databasetask=backup', 'option=com_database&amp;task=backup'),
			array('option=com_databasetask=monitordo=stats', 'option=com_database&amp;task=monitor&amp;do=stats'),
			array('option=com_databasetask=monitordo=tables', 'option=com_database&amp;task=monitor&amp;do=tables')
		);

		foreach ($fixes as $fix) {
			$query = "UPDATE ".$this->_config['dbprefix']."components SET admin_menu_link='".$fix[1]."' WHERE admin_menu_link='".$fix[0]."'";
			$this->db->Execute($query);
		}
	}


	/**************************************************/
	/* EXECUTE STEP 4 (BEFORE STEP 5 - SITE SETTINGS) */
	/**************************************************/
	private function exstep4() {
		global $iLang;

		if (!isset($_POST['next'])) {
			if (isset($_POST['back'])) { //back button
				return true;
			} else { //direct request
				$this->errors[] = 'Please follow Elxis installation procedure step-by-step.';
				return false;
			}
		}
		
		$this->_config['sitename'] = trim(mosGetParam($_POST, 'sitename', ''));
		$this->_config['live_site'] = trim(mosGetParam($_POST, 'live_site', ''));
		$this->_config['absolute_path'] = trim(mosGetParam($_POST, 'absolute_path', ''));
		$this->_config['offset'] = trim(mosGetParam( $_POST, 'offset', '0'));
		$this->_config['lang'] = trim(mosGetParam($_POST, 'lang', 'english'));
		if ($this->_config['lang'] == '') { $this->_config['lang'] = 'english'; }
		$this->_config['alang'] = trim(mosGetParam($_POST, 'alang', 'english'));
		if ($this->_config['alang'] == '') { $this->_config['alang'] = 'english'; }

		$planguages = mosGetParam($_POST, 'planguage', array());
		if (count($planguages) == 0) { $planguages[] = $this->_config['lang']; }
		if (!in_array($this->_config['lang'], $planguages)) {
			array_push($planguages, $this->_config['lang']);
		}
		$this->_config['pub_langs'] = implode(',',$planguages);

		$elxis_root = $this->_config['absolute_path'];
		if (($elxis_root == '') || !file_exists($elxis_root) || !is_dir($elxis_root)) {
			$elxis_root = $this->elxisRootDir();
		}

		$this->_config['static_cache'] = intval(mosGetParam($_POST, 'static_cache', 0));
		if (!is_writable($elxis_root.'/cache/')) {
			$this->_config['static_cache'] = 0;
		}
		$this->_config['cachepath'] = $elxis_root.'/cache';

		$this->_config['sef'] = intval(mosGetParam($_POST, 'sef', 0));
		if (!file_exists($elxis_root.'/.htaccess')) { $this->_config['sef'] = 0; }

		$this->_config['offline_message'] = $iLang->CONFSITEDOWN;
		$this->_config['error_message'] = $iLang->CONFSITEDOWNERR;

		$this->writeTempConfig();

		$this->_config['sitename'] = trim(mosGetParam($_POST, 'sitename', ''));
		$this->_config['live_site'] = trim(mosGetParam($_POST, 'live_site', ''));
		$this->_config['absolute_path'] = trim(mosGetParam($_POST, 'absolute_path', ''));
        if ($this->_config['sitename'] == '') { $this->errors[] = $iLang->SITENAME_EMPTY; }
        if ($this->_config['live_site'] == '') { $this->errors[] = $iLang->SITEURL_EMPTY; }
        if ($this->_config['absolute_path'] == '') { $this->errors[] = $iLang->ABSPATH_EMPTY; }

		return (count($this->errors) > 0) ? false : true;
	}


	/*************************************************************/
	/* EXECUTE STEP 5 (BEFORE STEP 6 - TEMPLATE AND SAMPLE DATA) */
	/*************************************************************/
	private function exstep5() {
		global $iLang;

		if (!isset($_POST['next'])) {
			if (isset($_POST['back'])) { //back button
				return true;
			} else { //direct request
				$this->errors[] = 'Please follow Elxis installation procedure step-by-step.';
				return false;
			}
		}

		$template = trim(mosGetParam($_POST, 'template', $this->default_tpl));
		if ($template == '') { $template = $this->default_tpl; }

		$data_pack = trim(mosGetParam($_POST, 'data_pack', 'default'));

		$ok = $this->connectdb();
		if (!$ok) { return false; }

		$query = "UPDATE ".$this->_config['dbprefix']."templates_menu SET template='".$template."' WHERE client_id = '0'";
		$this->db->Execute($query);

		if ($data_pack != '') {
			$pack_dir = $this->abspath.'/schema/packages/'.$data_pack.'/';
			if (!file_exists($pack_dir) || !is_dir($pack_dir)) {
				$data_pack = 'default';
				$pack_dir = $this->abspath.'/schema/packages/default/';
			}

			$data_sql = $pack_dir.'data_'.$this->_config['lang'].'.sql';
			if (!file_exists($data_sql)) { $data_sql = $pack_dir.'data_english.sql'; }

			$this->populate_db($data_sql);

			//build menus
			$plangs = explode(',', $this->_config['pub_langs']);
			$menu = array();

			foreach ($plangs as $plang) {
				$sql_lang = $plang;
				if (!file_exists($pack_dir.'menus_'.$plang.'.sql')) { $sql_lang = 'english'; }
				if (!isset($menu[$sql_lang])) {
					$menu[$sql_lang] = array($plang);
				} else {
					array_push($menu[$sql_lang],$plang);
				}
			}

			foreach ($menu as $sqllang => $elxislangs) {
				$this->makeMenus($sqllang, $elxislangs, $pack_dir);
			}

			if (file_exists($pack_dir.'globalmenus.sql')) {
				$this->populate_db($pack_dir.'globalmenus.sql');
			}

			//switch to horizontal (460X60) banners if needed.
			if ($template == 'ekebic') {
				$this->db->Execute("UPDATE ".$this->_config['dbprefix']."banner SET showbanner='0'");
				$this->db->Execute("UPDATE ".$this->_config['dbprefix']."banner SET showbanner='1' WHERE bid IN (7,8)");
			}

			//Fix PostgreSQL sequences
			if (preg_match('/postgre/i', $this->_config['dbtype'])) { $this->fixpgSequences(); }			
		} else {
			$query = "INSERT INTO ".$this->_config['dbprefix']."menu VALUES (NULL, 'mainmenu', 'Home', 'index.php?option=com_frontpage', 'components', 1, 0, 10, 0, 1, 0, '1979-12-19 00:00:00', 0, 0, 29, 3, 'menu_image=-1\nmenu_image_only=0\npageclass_sfx=\ntextclass_sfx=\nheader=\npage_title=0\nback_button=0\nleading=1\nintro=4\ncolumns=2\nlink=2\norderby_pri=\norderby_sec=front\npagination=2\npagination_results=0\nimage=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nitem_title=1\nlink_titles=\nreadmore=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=0\nrtf=0\nprint=0\nemail=0', NULL, NULL)";
			$this->db->Execute($query);
		}
		$this->disconnectdb();
	}


	/**************************************************/
	/* EXECUTE STEP 6 (BEFORE STEP 7 - PERSONAL INFO) */
	/**************************************************/
	private function exstep6() {
		global $iLang;

		if (!isset($_POST['next'])) {
			if (isset($_POST['back'])) { //back button
				return true;
			} else { //direct request
				$this->errors[] = 'Please follow Elxis installation procedure step-by-step.';
				return false;
			}
		}

        $adminName = mosGetParam($_POST, 'adminName', '');
        $adminUName = trim(mosGetParam($_POST, 'adminUName', 'admin'));
        $adminPassword = trim(mosGetParam($_POST, 'adminPassword', ''));
		$adminEmail = trim(mosGetParam($_POST, 'adminEmail', ''));

        if (trim($adminName) == '') { $this->errors[] = $iLang->EMPTYNAME; }
        if ($adminUName == '') { $this->errors[] = 'Administrator username is empty!'; }
        if ($adminPassword == '') { $this->errors[] = $iLang->EMPTYPASS; }
		if (($adminEmail == '') || (preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $adminEmail)==false)) {
			$this->errors[] = $iLang->VALIDEMAIL;
		}

		if (count($this->errors) > 0) { return false; }

		$ok = $this->connectdb();
		if (!$ok) { return false; }

		$this->_config['mailfrom'] = $adminEmail;
		$this->makeAdmin($adminName, $adminUName, $adminPassword, $adminEmail);

		$this->saveconfig();

		$this->disconnectdb();
	}


	/****************************/
	/* MAKE MULTI-LINGUAL MENUS */
	/****************************/
	private function makeMenus($sqllang, $elangs, $pack_dir) {
		//import sql
		$this->populate_db($pack_dir.'menus_'.$sqllang.'.sql');

		//Assign Frontpage module to the proper menu items
		$query = "SELECT id FROM ".$this->_config['dbprefix']."menu WHERE link LIKE '%frontpage%' AND language='".$sqllang."'";
		$ids = $this->db->GetCol($query);
		if ($ids && (count($ids) > 0)) {
			foreach ($ids as $id) {
				$kid = intval($id);
				if ($kid) {
        			$query = "INSERT INTO ".$this->_config['dbprefix']."modules_menu VALUES (37, ".$kid.")";
        			$this->db->Execute($query);
				}
			}
		}

		//Fix parent menu items
		$query = "SELECT id FROM ".$this->_config['dbprefix']."menu WHERE type='content_section' AND language='".$sqllang."'";
		$sectionid = intval($this->db->GetOne($query));
		if ($sectionid) {
			$query = "UPDATE ".$this->_config['dbprefix']."menu SET parent='".$sectionid."' WHERE type='content_category' AND language = '".$sqllang."'";
			$this->db->Execute($query);
		}

		//Fix language
		$elangs_str = implode(',',$elangs);
		$query = "UPDATE ".$this->_config['dbprefix']."menu SET language='".$elangs_str."' WHERE language = '".$sqllang."'";
		$this->db->Execute($query);
	}


	/***************************/
	/* CONNECT TO THE DATABASE */
	/***************************/
	private function connectdb() {
		require_once($this->_config['absolute_path'].'/includes/adodb/adodb.inc.php');
		$this->db = ADONewConnection($this->_config['dbtype']);

		$csdrivers = array('postgres', 'postgres64', 'postgres7', 'postgres8', 'oci8', 'oci805', 'oci8po', 'oracle', 'ibase');
		if (in_array($this->_config['dbtype'], $csdrivers)) { $this->db->charSet = 'utf8'; }
		$oradrivers = array('oci8', 'oci805', 'oci8po', 'oracle');
		//connect to the database
		if (in_array($this->_config['dbtype'], $oradrivers)) {
			$this->db->NLS_DATE_FORMAT = 'RRRR-MM-DD HH24:MI:SS';
			$con = $this->db->Connect($this->_config['host'], $this->_config['user'], $this->_config['password']);
		} else {
        	$con = $this->db->Connect($this->_config['host'], $this->_config['user'], $this->_config['password'], $this->_config['db']);
		}

		if (preg_match('/mysql/', $this->_config['dbtype'])) { $this->db->Execute('SET NAMES utf8'); }

        if (!$con || !$this->db->IsConnected()) {
            $this->errors[] = $iLang->CNOT_CONDB;
            return false;
        }
        return true;
	}


	/********************************/
	/* DISCONNECT FROM THE DATABASE */
	/********************************/
	private function disconnectdb() {
		if ($this->db && $this->db->IsConnected()) {
			$this->db->Close();
		}
	}


	/*********************************/
	/* CREATE THE ADMINISTRATOR USER */
	/*********************************/
	private function makeAdmin($name, $usr, $pw, $email) {
		$cryptpass = md5($pw);

		$installdate = date('Y-m-d H:i:s');
		$query = "INSERT INTO ".$this->_config['dbprefix']."users VALUES"
		." ('62', '".$name."', '".$usr."', '".$email."', '".$cryptpass."',"
		." 'Super Administrator', '0', '1', '25', '".$installdate."', '1979-12-19 00:00:00', NULL, NULL, NULL,"
		." '".$this->_config['lang']."', 'noavatar.png', '".$this->_config['live_site']."', NULL, NULL, NULL,"
		." NULL, NULL, NULL, NULL, 'MALE', NULL, NULL, 'Site administrator', '2060-01-01 00:00:00')";
		$this->db->Execute( $query );

		$query = "INSERT INTO ".$this->_config['dbprefix']."core_acl_aro VALUES (10,'users','62',0,'".$name."',0)";
		$this->db->Execute( $query );

		$query = "INSERT INTO ".$this->_config['dbprefix']."core_acl_groups_aro_map VALUES (25,NULL,10)";
		$this->db->Execute( $query );
	}


	/**********************/
	/* SAVE CONFIGURATION */
	/**********************/
	public function saveconfig($ret=0) {
		global $iLang;

		$config = "<?php \n";
		$config .= "\$mosConfig_offline = '0';\n";
		$config .= "\$mosConfig_host = '".$this->_config['host']."';\n";
		$config .= "\$mosConfig_user = '".$this->_config['user']."';\n";
		$config .= "\$mosConfig_password = '".$this->_config['password']."';\n";
		$config .= "\$mosConfig_db = '".$this->_config['db']."';\n";
		$config .= "\$mosConfig_dbtype = '".$this->_config['dbtype']."';\n";
		$config .= "\$mosConfig_dbprefix = '".$this->_config['dbprefix']."';\n";
		$config .= "\$mosConfig_lang = '".$this->_config['lang']."';\n";
		$config .= "\$mosConfig_pub_langs = '".$this->_config['pub_langs']."';\n";
		$config .= "\$mosConfig_alang = '".$this->_config['alang']."';\n";
		$config .= "\$mosConfig_absolute_path = '".$this->_config['absolute_path']."';\n";
		$config .= "\$mosConfig_live_site = '".$this->_config['live_site']."';\n";
		$config .= "\$mosConfig_sitename = '".$this->_config['sitename']."';\n";
		$config .= "\$mosConfig_shownoauth = '0';\n";
		$config .= "\$mosConfig_useractivation = '1';\n";
		$config .= "\$mosConfig_uniquemail = '1';\n";
		$config .= "\$mosConfig_offline_message = '".$iLang->CONFSITEDOWN."';\n";
		$config .= "\$mosConfig_error_message = '".$iLang->CONFSITEDOWNERR."';\n";
		$config .= "\$mosConfig_debug = '0';\n";
		$config .= "\$mosConfig_lifetime = '900';\n";
		$config .= "\$mosConfig_MetaDesc = '".$this->_config['sitename']." - Powered by Elxis CMS (www.elxis.org)';\n";
		$config .= "\$mosConfig_MetaKeys = 'open source, multilingual, free cms, table-less, xhtml valid, css, content managment, rtl compatible, elxis.org, adodb, elxis';\n";
		$config .= "\$mosConfig_locale = '';\n";
		$config .= "\$mosConfig_offset = '".$this->_config['offset']."';\n";
		$config .= "\$mosConfig_hideAuthor = '0';\n";
		$config .= "\$mosConfig_hideCreateDate = '0';\n";
		$config .= "\$mosConfig_hideModifyDate = '0';\n";
    	$config .= "\$mosConfig_hideRtf = '0';\n";
		$config .= "\$mosConfig_hidePdf = '".intval(!is_writable($this->_config['absolute_path'].'/tmpr/'))."';\n";
		$config .= "\$mosConfig_hidePrint = '0';\n";
		$config .= "\$mosConfig_hideEmail = '0';\n";
		$config .= "\$mosConfig_enable_log_items = '0';\n";
		$config .= "\$mosConfig_enable_log_searches = '0';\n";
		$config .= "\$mosConfig_enable_stats = '0';\n";
		if ((intval($this->_config['sef']) == 2) && file_exists($this->_config['absolute_path'].'/.htaccess')) {
			$config .= "\$mosConfig_sef = '2';\n";
		} else {
			$config .= "\$mosConfig_sef = '0';\n";
		}
		$config .= "\$mosConfig_vote = '0';\n";
		$config .= "\$mosConfig_gzip = '0';\n";
		$config .= "\$mosConfig_multipage_toc = '1';\n";
		$config .= "\$mosConfig_allowUserRegistration = '1';\n";
		$config .= "\$mosConfig_link_titles = '0';\n";
		$config .= "\$mosConfig_error_reporting = -1;\n";
		$config .= "\$mosConfig_list_limit = '20';\n";
		$config .= "\$mosConfig_caching = '0';\n";
		if ((intval($this->_config['static_cache']) == 1) && is_writable($this->_config['absolute_path'].'/cache/')) {
			$config .= "\$mosConfig_static_cache = '1';\n";
		} else {
			$config .= "\$mosConfig_static_cache = '0';\n";
		}
		$config .= "\$mosConfig_cachepath = '".$this->_config['absolute_path']."/cache';\n";
		$config .= "\$mosConfig_cachetime = '1800';\n";
		$config .= "\$mosConfig_mailer = 'mail';\n";
		$config .= "\$mosConfig_mailfrom = '".$this->_config['mailfrom']."';\n";
		$config .= "\$mosConfig_fromname = '".$this->_config['sitename']."';\n";
		$config .= "\$mosConfig_sendmail = '/usr/sbin/sendmail';\n";
		$config .= "\$mosConfig_smtpauth = '0';\n";
		$config .= "\$mosConfig_smtpuser = '';\n";
		$config .= "\$mosConfig_smtppass = '';\n";
		$config .= "\$mosConfig_smtphost = 'localhost';\n";
		$config .= "\$mosConfig_back_button = '0';\n";
		$config .= "\$mosConfig_item_navigation = '1';\n";
		$config .= "\$mosConfig_secret = '".mosMakePassword(16)."';\n";
		$config .= "\$mosConfig_readmore = '1';\n";
		$config .= "\$mosConfig_hits = '1';\n";
		$config .= "\$mosConfig_comments = '1';\n";
		$config .= "\$mosConfig_icons = '1';\n";
		$config .= "\$mosConfig_favicon = 'favicon.ico';\n";
		$config .= "\$mosConfig_fileperms = '';\n";
		$config .= "\$mosConfig_dirperms = '';\n";
		$config .= "\$mosConfig_helpurl = '';\n";
		$config .= "\$mosConfig_ftp = '".$this->_config['ftp']."';\n";
		$config .= "\$mosConfig_ftp_host = '".$this->_config['ftp_host']."';\n";
		$config .= "\$mosConfig_ftp_user = '".$this->_config['ftp_user']."';\n";
		$config .= "\$mosConfig_ftp_pass = '".$this->_config['ftp_pass']."';\n";
    	$config .= "\$mosConfig_ftp_port = '".$this->_config['ftp_port']."';\n";
		$config .= "\$mosConfig_ftp_root = '".$this->_config['ftp_root']."';\n";
		$config .= "\$mosConfig_access = '1';\n";
    	$config .= "\$mosConfig_captcha = '1';\n";
		$config .= '?>';

		if ($ret) { return $config; }

		if (!file_exists($this->_config['absolute_path'].'/configuration.php')) {
			@touch($this->_config['absolute_path'].'/configuration.php');
		}
		$this->confsaved = $this->writetofile($config, $this->_config['absolute_path'].'/configuration.php');
	}


    /************************************/
    /* LOAD ADODB AND CONNECT/CREATE DB */
    /************************************/
    protected function connectCreatedb() {
        global $iLang;

        $elxis_root = $this->elxisRootDir();

        if (!file_exists($elxis_root.'/includes/adodb/adodb.inc.php') || !file_exists($elxis_root.'/includes/adodb/adodb-xmlschema03.inc.php')) {
            $this->errors[] = $iLang->ADODB_MISSES;
            return false;
        }
        require_once($elxis_root.'/includes/adodb/adodb.inc.php');
        require_once($elxis_root.'/includes/adodb/adodb-xmlschema03.inc.php');

        $this->db = ADONewConnection($this->_config['dbtype']);
        $this->db->createdatabase = true;
        $this->db->debug = false;
		$csdrivers = array('postgres', 'postgres64', 'postgres7', 'postgres8', 'oci8', 'oci805', 'oci8po', 'oracle', 'ibase');
		if (in_array($this->_config['dbtype'], $csdrivers)) { $this->db->charSet = 'utf8'; }
		$oradrivers = array('oci8', 'oci805', 'oci8po', 'oracle');
		//connect to the database
		if (in_array($this->_config['dbtype'], $oradrivers)) {
			$this->db->NLS_DATE_FORMAT = 'RRRR-MM-DD HH24:MI:SS';
			$con = $this->db->Connect($this->_config['host'], $this->_config['user'], $this->_config['password']);
		} else {
        	$con = $this->db->Connect($this->_config['host'], $this->_config['user'], $this->_config['password'], $this->_config['db']);
		}

        if (!$con) { //If connection failed, try to create database
            $this->db = ADONewConnection($this->_config['dbtype']);
            $this->db->createdatabase = true;
            $this->db->debug = false;
            if (in_array($this->_config['dbtype'], $csdrivers)) { $this->db->charSet = 'utf8'; }

            $con = $this->db->Connect($this->_config['host'], $this->_config['user'], $this->_config['password']);
            if ($con) {
                $dict = NewDataDictionary($this->db);
                $sql = $dict->CreateDatabase($this->_config['db']);

                $con = $dict->ExecuteSQLArray($sql);
                if ($con) {
                    $con = $this->db->Connect($this->_config['host'], $this->_config['user'], $this->_config['password'], $this->_config['db']);
                } else {
                    $this->errors[] = sprintf($iLang->FAIL_CREATEDB, $this->_config['db']);
                    return false;
                }
            }
        }

        if (!$con || !$this->db->IsConnected()) {
            $this->errors[] = $iLang->CNOT_CONDB;
            return false;
        }

        //check database version, character set and collation
        if (preg_match('/mysql/i', $this->_config['dbtype'])) {
            $rs = $this->db->Execute("SHOW CREATE DATABASE `".$this->_config['db']."`");
            $dbInfo = $rs->FetchRow();

            $defcharset = '';
            $pattern = '/40100 DEFAULT CHARACTER SET (\w+) /';
            if (preg_match($pattern, $dbInfo[1], $match) > 0) {
                $defcharset = $match[1];
            }
            if (!preg_match('/utf8/i', $defcharset)) {
                $this->db->Execute("ALTER DATABASE `".$this->_config['db']."` DEFAULT CHARACTER SET 'utf8' DEFAULT COLLATE 'utf8_general_ci'");
            }
            $this->db->Execute('SET NAMES utf8');

            $datadict = NewDataDictionary($this->db);
            $myversion = $datadict->serverInfo['version'];
            if ($myversion < 4.1) {
                $this->errors[] = 'Only MySQL 4.1 and later are supported!';
                return false;
            }
        }
        return true;
    }


    /************************/
    /* DROP DATABASE TABLES */
    /************************/
    private function dropdbTables($dbbackup=0) {
        $datadict = NewDataDictionary($this->db);
		$tables = $datadict->MetaTables();
		if (count($tables) >0) {
			$oradrivers = array('oci8', 'oci805', 'oci8po', 'oracle');
			if (in_array($this->_config['dbtype'], $oradrivers)) {
            	foreach($tables as $table) {
					$il = (strpos($table, $this->_config['dbprefix']) === 0) ? 1 : 0;
					$iu = (strpos($table, strtoupper($this->_config['dbprefix'])) === 0) ? 1 : 0;
					if ($il || $iu) {
                    	if ($dbbackup) {
							$butable = ($il) ? str_replace($this->_config['dbprefix'], 'old_', $table) : str_replace(strtoupper($this->_config['dbprefix']), 'OLD_', $table);
                        	$sql = $datadict->DropTableSQL($butable);
                        	$this->db->Execute($sql[0]);
                        	$sql = $datadict->RenameTableSQL($table,$butable);
                        	$this->db->Execute($sql[0]);
                    	}
                    	$sql = $datadict->DropTableSQL($table);
                    	$this->db->Execute($sql[0]);
                	}
            	}
				$qsl = "SELECT * FROM USER_SEQUENCES WHERE SEQUENCE_NAME LIKE 'SEQ_".strtoupper($this->_config['dbprefix'])."%'";
				$rs = $this->db->Execute($qsl);
				while ($arr = $rs->FetchRow()) { $this->db->DropSequence($arr['SEQUENCE_NAME']); }
			} else {
            	foreach($tables as $table) {
                	if (strpos($table, $this->_config['dbprefix']) === 0) {
                    	if ($dbbackup) {
                        	$butable = str_replace( $this->_config['dbprefix'], 'old_', $table );
                        	$sql = $datadict->DropTableSQL($butable);
                        	$this->db->Execute( $sql[0] );
                        	$sql = $datadict->RenameTableSQL($table,$butable);
                        	$this->db->Execute( $sql[0] );
                    	}
                    	$sql = $datadict->DropTableSQL($table);
                    	$this->db->Execute($sql[0]);
                	}
            	}
			}
        }
    }


    /**********************/
    /* IMPORT SAMPLE DATA */
    /**********************/
    private function populate_db($sqlfile='') {
    	if (($sqlfile != '') && file_exists($sqlfile)) {
        	$mqr = @get_magic_quotes_runtime();
        	@set_magic_quotes_runtime(0);

        	$query = @fread(fopen($sqlfile, "r"), filesize($sqlfile));
        	@set_magic_quotes_runtime($mqr);
        	$pieces = $this->split_sql($query);

        	for ($i=0; $i<count($pieces); $i++) {
            	$pieces[$i] = trim($pieces[$i]);
            	if (!empty($pieces[$i]) && $pieces[$i] != "#") {
                	$pieces[$i] = str_replace( "#__", $this->_config['dbprefix'], $pieces[$i]);
                	$this->db->Execute($pieces[$i]);
            	}
        	}
        }
    }


    /*******************/
    /* SPLIT SQL QUERY */
    /*******************/
    private function split_sql($sql) {
        $sql = trim($sql);
        $sql = preg_replace("/\n\#[^\n]*\n/", "\n", $sql);
        $buffer = array();
        $ret = array();
        $in_string = false;

        for($i=0; $i<strlen($sql)-1; $i++) {
            if($sql[$i] == ";" && !$in_string) {
                $ret[] = substr($sql, 0, $i);
                $sql = substr($sql, $i + 1);
                $i = 0;
            }
            if ($in_string && ($sql[$i] == $in_string) && $buffer[1] != "\\") {
                $in_string = false;
            } elseif (!$in_string && ($sql[$i] == '"' || $sql[$i] == "'") && (!isset($buffer[0]) || $buffer[0] != "\\")) {
                $in_string = $sql[$i];
            }
            if (isset($buffer[1])) { $buffer[0] = $buffer[1]; }
            $buffer[1] = $sql[$i];
        }
        if (!empty($sql)) { $ret[] = $sql; }
        return($ret);
    }


    /****************************/
    /* FIX POSTGRESQL SEQUENCES */
    /****************************/
    private function fixpgSequences() {
		//get sequences
        $query = "SELECT relname FROM pg_class WHERE relkind='S' AND relname LIKE '".$this->_config['dbprefix']."%';";
        $rs = $this->db->Execute( $query );

        if (is_object($rs) && $rs->RecordCount() > 0) {
            $pg_seqs = array();
            while ($row = $rs->FetchRow()) {
                array_push($pg_seqs, $row[0]);
            }
        } else {
            $pg_seqs = array(
                $this->_config['dbprefix'].'banner_bid_seq',
                $this->_config['dbprefix'].'bannerclient_cid_seq', 
                $this->_config['dbprefix'].'bannerfinish_bid_seq', 
                $this->_config['dbprefix'].'categories_id_seq', 
                $this->_config['dbprefix'].'components_id_seq', 
                $this->_config['dbprefix'].'contact_details_id_seq', 
                $this->_config['dbprefix'].'content_id_seq', 
                $this->_config['dbprefix'].'core_acl_access_lists_list_id_seq', 
                $this->_config['dbprefix'].'core_acl_aro_aro_id_seq', 
                $this->_config['dbprefix'].'core_acl_aro_groups_group_id_seq', 
                $this->_config['dbprefix'].'core_acl_aro_sections_section_id_seq', 
                $this->_config['dbprefix'].'mambots_id_seq', 
                $this->_config['dbprefix'].'menu_id_seq', 
                $this->_config['dbprefix'].'messages_message_id_seq', 
                $this->_config['dbprefix'].'modules_id_seq', 
                $this->_config['dbprefix'].'newsfeeds_id_seq', 
                $this->_config['dbprefix'].'poll_data_id_seq', 
                $this->_config['dbprefix'].'poll_date_id_seq', 
                $this->_config['dbprefix'].'polls_id_seq', 
                $this->_config['dbprefix'].'sections_id_seq', 
                $this->_config['dbprefix'].'template_positions_id_seq', 
                $this->_config['dbprefix'].'users_extra_extraid_seq', 
                $this->_config['dbprefix'].'users_id_seq', 
                $this->_config['dbprefix'].'weblinks_id_seq'
            );
        }

        //get tables
        $pg_tables = $this->db->MetaTables();
        if ($pg_tables) {
            foreach ($pg_tables as $pg_table) {
                if (!preg_match('#^'.$this->_config['dbprefix'].'#', $pg_table)) { continue; }
                $pg_keys = $this->db->MetaPrimaryKeys($pg_table);
                if ($pg_keys) {
                    foreach ($pg_keys as $pg_key) {
                        //build possible sequence
                        $pg_pseq = $pg_table.'_'.$pg_key.'_seq';
                        //if is a real requence
                        if (in_array($pg_pseq, $pg_seqs)) {
                            //select column max value
                            $query = 'SELECT MAX("'.$pg_key.'") FROM '.$pg_table.';';
                            $next_val = intval($this->db->GetOne($query));
                            if ($next_val == 0) { $next_val = 1; }
                            $sql = "SELECT setval('".$pg_pseq."', ".$next_val.");";
                            @pg_exec($this->db->_connectionID, "$sql");
                        }
                    }
                }
				$this->db->Execute("VACUUM $pg_table"); //Vacuum table
            }
        }
    }


    /***********************/
    /* LOAD SOFTDISK BASIC */
    /***********************/
    private function loadSoftDisk() {
        $now = time();
        $OS = strtoupper(substr(PHP_OS, 0, 3));
        $srvinfo = $this->db->ServerInfo();
        $pref = $this->_config['dbprefix'];

        require_once($this->elxisRootDir().'/includes/version.php');
        global $_VERSION;
        if ($_VERSION->PRODUCT != 'E'.'l'.'x'.'i'.'s') { die('E'.'l'.'x'.'i'.'s '.'c'.'o'.'p'.'y'.'r'.'i'.'g'.'h'.'t '.'v'.'i'.'o'.'l'.'a'.'t'.'i'.'o'.'n'.'!'); }
        if (!preg_match('/eLXiS/i', $_VERSION->COPYRIGHT)) { die('E'.'l'.'x'.'i'.'s '.'c'.'o'.'p'.'y'.'r'.'i'.'g'.'h'.'t '.'v'.'i'.'o'.'l'.'a'.'t'.'i'.'o'.'n'.'!'); }
        $commands = array(
            "INSERT INTO ".$pref."softdisk VALUES (1,'CORE','DECIMAL','ELXIS_VERSION','".$_VERSION->RELEASE.".".$_VERSION->DEV_LEVEL."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (2,'CORE','STRING','ELXIS_COPYRIGHT','(C) 2006-".date('Y')." Elxis.org. All rights reserved',1,'".$now."',1,0)",
			"INSERT INTO ".$pref."softdisk VALUES (3,'CORE','STRING','ELXIS_LICENSE','GNU/GPL',1,'".$now."',1,0)",
			"INSERT INTO ".$pref."softdisk VALUES (4,'CORE','STRING','OS','".$OS."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (5,'CORE','STRING','OS_EXTENDED','".php_uname()."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (6,'CORE','STRING','DB_TYPE','".$this->_config['dbtype']."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (7,'CORE','STRING','DB_VERSION','".$srvinfo['version']."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (8,'CORE','STRING','PHP_VERSION','".phpversion()."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (9,'CORE','DECIMAL','ELXIS_DBVERSION','".$_VERSION->RELEASE.".".$_VERSION->DEV_LEVEL."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (10,'CORE','TIME','ELXIS_INSTALL','".$now."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (11,'CORE','TIME','ELXIS_LASTUP','".$now."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (12,'CORE','TIME','SOFTDISK_LASTUP','".$now."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (13,'CORE','STRING','SITE_ABSPATH','".$this->elxisRootDir()."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (14,'CORE','URL','SITE_URL','".$this->elxisSiteURL()."',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (15,'CORE','URL','ELXISORG_SITE','http://www.elxis.org',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (16,'CORE','URL','ELXISORG_FORUM','http://forum.elxis.org',1,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (17,'CORE','STRING','SUBMIT_SECTIONS',NULL,0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (18,'CORE','STRING','SUBMIT_CATEGORIES',NULL,0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (19,'USERPROFILE','YESNO','UPROF_MSN','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (20,'USERPROFILE','YESNO','UPROF_ICQ','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (21,'USERPROFILE','YESNO','UPROF_EMAIL','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (22,'USERPROFILE','YESNO','UPROF_PHONE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (23,'USERPROFILE','YESNO','UPROF_MOBILE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (24,'USERPROFILE','YESNO','UPROF_BIRTHDATE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (25,'USERPROFILE','YESNO','UPROF_GENDER','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (26,'USERPROFILE','YESNO','UPROF_LOCATION','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (27,'USERPROFILE','YESNO','UPROF_OCCUPATION','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (28,'USERPROFILE','YESNO','UPROF_SIGNATURE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (29,'USERPROFILE','YESNO','UPROF_ARTICLES','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (30,'USERPROFILE','YESNO','UPROF_USERGROUP','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (31,'USERPROFILE','YESNO','UPROF_WEBSITE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (32,'USERPROFILE','YESNO','UPROF_RANDUSERS','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (33,'USERS','YESNO','USERS_RPASSMAIL','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (34,'USERPROFILE','YESNO','UPROF_AIM','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (35,'USERPROFILE','YESNO','UPROF_YIM','1',0,'".$now."',1,0)",            
            "INSERT INTO ".$pref."softdisk VALUES (36,'USERS','INTEGER','REG_AGREE','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (37,'SHORTCUTS','STRING','SC_NAME_62_".$now."','elxis.org',0,'".$now."',0,1)",
            "INSERT INTO ".$pref."softdisk VALUES (38,'SHORTCUTS','STRING','SC_LINK_62_".$now."','http://www.elxis.org',0,'".$now."',0,1)",
            "INSERT INTO ".$pref."softdisk VALUES (39,'SHORTCUTS','STRING','SC_IMAGE_62_".$now."','elxis.png',0,'".$now."',0,1)",
            "INSERT INTO ".$pref."softdisk VALUES (40,'SHORTCUTS','YESNO','SC_PUBLIC_62_".$now."','1',0,'".$now."',0,1)",
            "INSERT INTO ".$pref."softdisk VALUES (41,'WEBLINKS','YESNO','TOP_WEBLINK','1','0','".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (42,'USERSLIST','YESNO','ULIST_AIM','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (43,'USERSLIST','YESNO','ULIST_YIM','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (44,'USERSLIST','YESNO','ULIST_MSN','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (45,'USERSLIST','YESNO','ULIST_ICQ','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (46,'USERSLIST','YESNO','ULIST_EMAIL','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (47,'USERSLIST','YESNO','ULIST_PHONE','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (48,'USERSLIST','YESNO','ULIST_MOBILE','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (49,'USERSLIST','YESNO','ULIST_BIRTHDATE','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (50,'USERSLIST','YESNO','ULIST_GENDER','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (51,'USERSLIST','YESNO','ULIST_LOCATION','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (52,'USERSLIST','YESNO','ULIST_OCCUPATION','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (53,'USERSLIST','YESNO','ULIST_USERGROUP','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (54,'USERSLIST','YESNO','ULIST_WEBSITE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (55,'USERSLIST','YESNO','ULIST_ONLINE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (56,'USERSLIST','YESNO','ULIST_USERNAME','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (57,'USERSLIST','YESNO','ULIST_NAME','0',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (58,'USERSLIST','YESNO','ULIST_REGDATE','1',0,'".$now."',1,0)",
            "INSERT INTO ".$pref."softdisk VALUES (59,'USERSLIST','YESNO','ULIST_PREFLANG','1',0,'".$now."',1,0)"
        );

        foreach ($commands as $command) {
            $this->db->Execute($command);
        }
    }


    /**********************/
    /* GET ELXIS ROOT DIR */
    /**********************/
    public function elxisRootDir() {
        return preg_replace('#(\/installation)$#', '', $this->abspath);
    }


    /**********************/
    /* GET ELXIS SITE URL */
    /**********************/
    public function elxisSiteURL() {
        $url = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
        $url .= ($_SERVER['SERVER_PORT'] != '80') ? $_SERVER['HTTP_HOST'].':'.$_SERVER['SERVER_PORT'] : $_SERVER['HTTP_HOST'];
        $url .= $_SERVER['SCRIPT_NAME'];
        $out = preg_split('#\/installation#', $url);
        return $out[0];
    }


    /***********************/
    /* GET DOCUMENT HEADER */
    /***********************/
    public function documentHeader() {
        global $iLang;

        $rtl = ($iLang->RTL == 1) ? ' dir="rtl"' : '';
        $out = '<?xml version="1.0" encoding="'.$iLang->ISO.'"?>'._LEND;
        $out .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'._LEND;
        $out .= '<html xmlns="http://www.w3.org/1999/xhtml" lang="'.$iLang->XMLLANG.'" xml:lang="'.$iLang->XMLLANG.'"'.$rtl.'>'._LEND;
        $out .= '<head>'._LEND;
        $out .= '<meta http-equiv="Content-Type" content="text/html; charset='.$iLang->ISO.'" />'._LEND;
        $out .= '<meta http-equiv="Pragma" content="no-cache" />'._LEND;
        $out .= '<meta http-equiv="Expires" content="-1" />'._LEND;
        $out .= '<title>'.$iLang->ELXIS_WEB_INSTALLER.'</title>'._LEND;
        $out .= '<meta name="description" content="Elxis CMS v2009.x installer created by Ioannis Sannos and Ivan Trebjesanin (Elxis Team)" />'._LEND;
        $out .= '<meta name="keywords" content="elxis cms, open source" />'._LEND;
        $out .= '<meta name="Generator" content="Elxis CMS - Copyright (C) 2006-'.date('Y').' Elxis Team. All rights reserved." />'._LEND;
        $out .= '<meta name="robots" content="noindex, nofollow" />'._LEND;
        $out .= '<link rel="shortcut icon" href="images/favicon.ico" />'._LEND;
        $out .= '<link rel="stylesheet" href="includes/install.css" type="text/css" />'._LEND;
        $out .= '<script type="text/javascript" src="includes/prototype.js"></script>'._LEND;
        $out .= '<script ltype="text/javascript" src="includes/elxisinstaller.js"></script>'._LEND;
		if ($iLang->RTL == 1) {
			$out .= '<script type="text/javascript" src="includes/highslide-rtl.js"></script>'._LEND;
		} else {
			$out .= '<script type="text/javascript" src="includes/highslide.js"></script>'._LEND;
		}
        $out .= '<script type="text/javascript" src="includes/highslide-html.js"></script>'._LEND;
        $out .= '<script type="text/javascript" src="includes/jsProgressBarHandler.js"></script>'._LEND;
        //$out .= '<!--[if lt IE 7]>'._LEND;
		//$out .= '<script defer type="text/javascript" src="includes/pngfix_inline.js"></script>'._LEND;
		//$out .= '<script type="text/javascript" src="includes/pngfix_bg.js"></script>'._LEND;
		//$out .= '<![endif]-->'._LEND;
		$out .= '<script type="text/javascript">
		function askrestart() {
			if (confirm(\''.$iLang->RESTARTINST.'\n'.$iLang->RESTARTCONF.'\')) { document.location.href = \'index.php\'; }
		}</script>'._LEND;
        $out .= $this->getCustomHeaders();
        $out .= '</head>'._LEND;
        return $out;
    }


    /****************/
    /* ON BODY LOAD */
    /****************/
    public function onBodyLoad() {
        if ($this->step == 4) { return ' onload="calculateoffset();"'; }
        return '';
    }


	/**************************/
	/* GENERATE PAGE-TOP HTML */
	/**************************/
    public function topHTML() {
        global $iLang;
?>

		<div id="headerMain">
			<div id="header<?php if ($iLang->RTL == 1) { echo '-rtl'; } ?>">
                <div id="progress<?php if ($iLang->RTL == 1) { echo '-rtl'; } ?>">
                    <span><?php echo $iLang->COMPLETED; ?>:</span><br />
                    <span class="progressBar percentImage1" id="element1"><?php echo $this->getPercentage(); ?>%</span>
                </div>
				<a href="http://www.elxis.org" title="Elxis CMS" target="_blank">
					<img src="images/logo.jpg" alt="Elxis CMS" width="258" height="110" border="0" class="elxislogo" />
				</a>
				<div class="slcontainer<?php if ($iLang->RTL == 1) { echo '-rtl'; } ?>">
	            	<a href="javascript:void(0);" onclick="return hs.htmlExpand(this, { contentId: 'highslide-elxissite' } )" class="highslide" title="Elxis.org">
					<img src="images/elxissite_tn.jpg" alt="Elxis CMS" border="0" class="slthumb"/>
					</a> 
					<div class="highslide-html-content" id="highslide-elxissite" style="width: 400px;">
                    	<div style="height:20px; padding: 2px;">
                        	<a href="javascript:void(0);" onclick="return hs.close(this)" class="control"><?php echo $iLang->CLOSE; ?></a>
                        	<a href="javascript:void(0);" onclick="return false" class="highslide-move control"><?php echo $iLang->MOVE; ?></a>
                    	</div>
                    	<div class="highslide-body" style="padding: 0;">
                        	<table width="100%" border="0" cellspacing="0" cellpadding="5">
                           	 	<tr>
                                <td><img src="images/elxissite.jpg" border="0" alt="Elxis.org website" /></td>
                                <td><strong>Elxis.org</strong><br /><br />
                                Elxis.org is the home of Elxis CMS and the central website of the Elxis network. 
								Visit Elxis.org regularly to stay informed about new releases and updates.<br /><br />
                                Visit <a href="http://www.elxis.org" target="_blank" title="Visit elxis.org">elxis.org</a> now.
                                </td>
                            	</tr>
                        	</table>
                    	</div>
                	</div> 
					<a href="javascript:void(0);" onclick="return hs.htmlExpand(this, { contentId: 'highslide-forum' } )" class="highslide" title="Elxis Forum">
					<img src="images/elxisforum_tn.jpg" alt="Elxis forum" border="0" class="slthumb"/>
					</a> 
                	<div class="highslide-html-content" id="highslide-forum" style="width: 400px;">
                    	<div style="height:20px; padding: 2px;">
                        	<a href="javascript:void(0);" onclick="return hs.close(this)" class="control"><?php echo $iLang->CLOSE; ?></a>
                        	<a href="javascript:void(0);" onclick="return false" class="highslide-move control"><?php echo $iLang->MOVE; ?></a>
                    	</div>
                    	<div class="highslide-body" style="padding: 0;">
                        	<table width="100%" border="0" cellspacing="5" cellpadding="5">
                            	<tr>
                                <td><img src="images/elxisforum.jpg" border="0" alt="Elxis Forum" /></td>
                                <td><strong>Elxis CMS official forum</strong><br /><br />
                                Elxis forum is the heart of the Elxis community and offers volunteer based support. 
                                Visit Elxis CMS forum at <a href="http://forum.elxis.org" target="_blank" title="Elxis forum">forum.elxis.org</a>.<br/><br />
								For professional support and services search elxis.org web site for 
								official authorized Elxis CMS solution providers.
                                </td>
                            	</tr>
                        	</table>
                    	</div>
                	</div> 
					<a href="javascript:void(0);" onclick="return hs.htmlExpand(this, { contentId: 'highslide-downloadsite' } )" class="highslide" title="<?php echo $iLang->DOWNLOADSTITLE; ?>">
						<img src="images/downloadsite_tn.jpg" alt="<?php echo $iLang->DOWNLOADS; ?>" border="0" class="slthumb"/>
					</a> 
                	<div class="highslide-html-content" id="highslide-downloadsite" style="width: 400px;">
                    	<div style="height:20px; padding: 2px;">
                        	<a href="javascript:void(0);" onclick="return hs.close(this);" class="control"><?php echo $iLang->CLOSE; ?></a>
							<a href="javascript:void(0);" onclick="return false;" class="highslide-move control"><?php echo $iLang->MOVE; ?></a>
                    	</div>
                    	<div class="highslide-body" style="padding: 0;">
                        	<table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td><img src="images/downloadsite.jpg" border="0" alt="<?php echo $iLang->DOWNLOADSTITLE; ?>" /></td>
                                <td><strong><?php echo $iLang->DOWNLOADSTITLE; ?></strong><br /><br />
                                You can find free and commercial extensions and templates for Elxis CMS to extend Elxis functionalities 
								at <a href="http://www.elxis-downloads.com" target="_blank" title="Download Elxis extensions">www.elxis-downloads.com</a>. 
								If you are a third party developer you can publish your own extensions and templates to the official Elxis downloads site.
								</td>
                            </tr>
                        	</table>
                    	</div>
                	</div> 
					<a href="javascript:void(0);" onclick="return hs.htmlExpand(this, { contentId: 'highslide-wikisite' } )" class="highslide" title="Elxis wiki">
						<img src="images/wikisite_tn.jpg" alt="Elxis wiki" border="0" class="slthumb"/>
					</a> 
                	<div class="highslide-html-content" id="highslide-wikisite" style="width: 400px;">
                    	<div style="height:20px; padding: 2px;">
                        	<a href="javascript:void(0);" onclick="return hs.close(this);" class="control"><?php echo $iLang->CLOSE; ?></a>
                        	<a href="javascript:void(0);" onclick="return false;" class="highslide-move control"><?php echo $iLang->MOVE; ?></a>
                    	</div>
                    	<div class="highslide-body" style="padding: 0;">
                        	<table width="100%" border="0" cellspacing="0" cellpadding="5">
                            <tr>
                                <td><img src="images/wikisite.jpg" border="0" alt="Elxis Wiki" /></td>
                                <td><strong>Elxis wiki</strong><br /><br />
                                <a href="http://wiki.elxis.org" target="_blank" title="Elxis wiki">wiki.elxis.org</a> is an 
								online help site maintained by the <strong>Elxis Documentation Team</strong> with lots of 
								usefull information for beginners, advanced users and developers. Visit Elxis Wiki to 
								read Elxis online documentation.</td>
                            </tr>
                        	</table>
                    	</div>
                	</div> 
					<a href="includes/suggestions.html" target="_blank" title="<?php echo $iLang->SUGGESTIONS; ?>">
						<img src="images/suggestions_tn.jpg" alt="<?php echo $iLang->SUGGESTIONS; ?>" border="0" class="slthumb"/>
					</a>
				</div>
				<?php $this->progressMenu(); ?>
				<?php $this->languageBar(); ?>
			</div>
			<br class="spacer" />
		</div>

<?php 
    }


    /**************************************************/
    /* GET INSTALLATION PRENCENTAGE COMPLETION STATUS */
    /**************************************************/
    protected function getPercentage() {
        if ($this->step == 0) {
            return 0;
        } else if ($this->step == $this->maxsteps) {
            return 100;
        } else {
            return intval(($this->step * 100)/$this->maxsteps);
        }
    }


    /*********************/
    /* HTML LANGUAGE BAR */
    /*********************/
    private function languageBar() {
        global $iLang;

        $langText = $iLang->LANGNAME;
        if (file_exists($this->abspath.'/language/'.$this->lang.'.gif')) {
            $langText .= ' &nbsp; <img src="language/'.$this->lang.'.gif" border="0" align="bottom" alt="'.$this->lang.'" />';
        }

        $rtl = ($iLang->RTL == 1) ? '-rtl' : '';
        echo '<div class="language'.$rtl.'">'._LEND;

        if ($this->step < 3) {
            $iLangs = $this->getiLangs();
?>
            <a href="javascript:void(null);" onclick="return hs.htmlExpand(this, { contentId: 'highslide-html' } )" class="highslide" title="<?php echo $iLang->INSTALL_LANG; ?>">
                <?php echo $langText; ?>
            </a>
            <div class="highslide-html-content" id="highslide-html" style="width: 400px;">
                <div style="height:20px; padding: 2px;">
                    <a href="javascript:void(null);" onclick="return hs.close(this)" class="control"><?php echo $iLang->CLOSE; ?></a>
                    <a href="javascript:void(null);" onclick="return false" class="highslide-move control"><?php echo $iLang->MOVE; ?></a>
                </div>
                <div class="highslide-body" style="padding: 0 10px 10px 10px;">
                    <form method="post" name="frmLanguage" action="index.php">
                        <?php echo $iLang->INSTALL_LANG; ?><br /> 
                        <select name="mylang" dir="ltr" size="1" onchange="frmLanguage.submit();" class="selectbox">
                            <option value="">- <?php echo $iLang->SELECT; ?> -</option>
                            <?php 
                            foreach ($iLangs as $langx) {
                                echo "<option value=\"".$langx."\"";
                                if ($langx == $this->lang) { echo ' selected="selected"'; }
                                echo ">".$langx."</option>"._LEND;
                            }
                            ?>
                        </select>
                        <input type="hidden" name="step" id="nowstep" value="<?php echo $this->step; ?>" />
                    </form>
                </div>
            </div>
<?php 
        } else {
            echo $langText;
        }
        echo '</div>'._LEND;
    }


    /***************************/
    /* BUILD TOP PROGRESS MENU */
    /***************************/
    private function progressMenu() {
		global $iLang;

        $steps = $this->getStepsTitles();
        $rtlsfx =($iLang->RTL == 1) ? '-rtl' : '';

		echo '<ul class="steps'.$rtlsfx.'">'._LEND;
        for ($i=0; $i<count($steps); $i++) {
			$act = ($i == $this->step) ? ' id="activestep"': '';
			$name = ($i == $this->step) ? $steps[$i]: $iLang->STEP.' '.($i+1);

			echo '<li'.$act.'>'.$name.'</li>'._LEND;
        }
        echo "</ul>\n";
    }


	/**********************/
	/* SHOW BODY TOP HTML */
	/**********************/
	public function bodyTop() {
		global $iLang;

		$steps = $this->getStepsTitles();
		$i = $this->step;
		$name = isset($steps[$i]) ? $steps[$i] : 'Unknown';
?>

		<h2 class="bodytitle" id="titlestep<?php echo $i; ?>"><span><?php echo $iLang->STEP.' '.($this->step + 1); ?></span><?php echo $name; ?></h2>
		<span class="restart">
			<a href="javascript:void(null);" onclick="askrestart()" title="<?php echo $iLang->RESTARTINST; ?>">
			<img src="images/restart.png" alt="<?php echo $iLang->RESTARTINST; ?>" border="0" /></a>
		</span>
<?php  
	}


    /********************/
    /* GET STEPS TITLES */
    /********************/
    private function getStepsTitles() {
        global $iLang;

        $steps = array (
            $iLang->PRE_INSTALLATION_CHECK,
            $iLang->LICENSE,
            $iLang->FTPACCESS,
            $iLang->DATABASE,
            $iLang->SITE_SETTINGS,
            $iLang->CONTLAYOUT,
            $iLang->PERSONAL_INFO,
            $iLang->FINISH
        );
        return $steps;
    }


    /***************************/
    /* GET AVAILABLE LANGUAGES */
    /***************************/
    private function getiLangs() {
        $iLangs = array();
        if ($handle = @opendir( $this->abspath.'/language/' )) {
            while (false !== ($file = @readdir($handle))) {
                if (!strcasecmp(substr($file,-12),".install.php") && $file != "." && $file != ".."){
                    array_push($iLangs, substr($file,0,-12));
                }
            }
            closedir($handle);
        }
        return $iLangs;
    }


	/***************************/
	/* GET AVAILABLE LANGUAGES */
	/***************************/
	public function getElxisLangs($frontend=1) {
		$elxis_root = $this->elxisRootDir();
		$langdir = ($frontend) ? $elxis_root.'/language/' : $elxis_root.'/administrator/language/';
    	if (!is_dir($langdir)) { return 'english'; }
    	$elangs = array();
		if ($handle = @opendir($langdir)) {
			while (($node = @readdir($handle)) !== false) {
        		if ($node!="." && $node!="..") {
            		if ((is_dir($langdir.$node)) && (file_exists($langdir.$node.'/'.$node.'.php'))) {
	         			array_push($elangs, $node);
                	}
            	}
        	}
        	closedir($handle);
    	}
    	return $elangs;
	}


    /*************************/
    /* GET SAMPLE DATA FILES */
    /*************************/
    public function getSampleData() {
        $sdata = array();
        if ($handle = @opendir($this->abspath.'/schema/packages/')) {
            while (false !== ($file = @readdir($handle))) {
            	if (($file != '.') && ($file != '..') && is_dir($this->abspath.'/schema/packages/'.$file)) {
                    array_push($sdata, $file);
                }
            }
            closedir($handle);
        }
        return $sdata;
    }


    /***************************/
    /* GET AVAILABLE TEMPLATES */
    /***************************/
    public function getTemplates() {
		$elxis_root = $this->getCfg('absolute_path');
		if ($elxis_root == '') { $elxis_root = $this->elxisRootDir(); } //just in case...

		$templates = array();
		$handle = @opendir($elxis_root.'/templates/');
		if (!$handle) { return array(); }
		while($file = readdir($handle)) {
			if (($file != '.') && ($file != '..') && is_dir($elxis_root.'/templates/'.$file)) {
				$templates[] = $file;
			}
		}
		closedir($handle);
		if (!$templates) { return array(); }
		asort($templates);

		$rows = array();
		require_once($elxis_root.'/includes/domit/xml_domit_lite_include.php');
		foreach($templates as $templ) {
			if (!file_exists($elxis_root.'/templates/'.$templ.'/templateDetails.xml')) { continue; }
	
			$xmlDoc = new DOMIT_Lite_Document();
			$xmlDoc->resolveErrors(true);
			if (!$xmlDoc->loadXML($elxis_root.'/templates/'.$templ.'/templateDetails.xml', false, true)) {
				continue;
			}

			$row = new stdClass();
			$row->directory = $templ;
			$element = $xmlDoc->getElementsByPath('name', 1);
			$row->name = $element->getText();

			$element = $xmlDoc->getElementsByPath('author', 1);
			$row->author = $element ? $element->getText() : 'Unknown';

			$element = $xmlDoc->getElementsByPath('authorUrl', 1);
			$row->authorUrl = $element ? $element->getText() : '';

			$element = $xmlDoc->getElementsByPath('version', 1);
			$row->version = $element ? $element->getText() : '';

			$element = $xmlDoc->getElementsByPath('description', 1);
			$row->description = $element ? $element->getText() : '';

			if (file_exists($elxis_root.'/templates/'.$templ.'/template_thumbnail.png')) {
				$row->thumbnail =  '../templates/'.$templ.'/template_thumbnail.png';
			} else {
				$row->thumbnail = 'images/site64.png';
			}
	
			$rows[] = $row;
			unset($xmlDoc);
		}

        return $rows;
    }


    /*********************/
    /* SET CUSTOM HEADER */
    /*********************/
    protected function setCustomHeader($header='') {
        if ($header != '') {
            $this->customHeaders[] = $header;
        }
    }


    /*********************/
    /* GET PHP INI VALUE */
    /*********************/
    public function inivalue($val) {
        global $iLang;
        $r = (@ini_get($val) == '1') ? $iLang->ON : $iLang->OFF;
        return $r;
    }


    /*******************************/
    /* CHECK IF FOLDER IS WRITABLE */
    /*******************************/
    public function writableCell($folder, $important=0) {
        global $iLang;

        $out = is_writable('../'.$folder) ? $this->colorString($iLang->WRITABLE, 'green', $important) : $this->colorString($iLang->UNWRITABLE, 'red', $important);
        $folder = $important ? '<strong>'.$folder.'</strong>' : $folder;
        echo '<tr>'._LEND;
        echo '<td nowrap="nowrap">'.$folder.'/</td>'._LEND;
        echo '<td>'.$out.'</td>'._LEND;
        echo '</tr>'._LEND;
    }


    /*******************/
    /* COLORIZE STRING */
    /*******************/
    public function colorString($string, $color='green', $bold=1) {
        $out = '<span style="color: '.$color.';';
        $out .= ($bold) ? ' font-weight: bold;' : '';
        $out .= '">'.$string.'</span>';
        return $out;
    }


    /**********************/
    /* GET CUSTOM HEADERS */
    /**********************/
    private function getCustomHeaders() {
        $output = '';
        if (count($this->customHeaders) > 0) {
            foreach ($this->customHeaders as $header) {
                $output .= $header._LEND;
            }
        }
        return $output;
    }


    /********************/
    /* OPERATING SYSTEM */
    /********************/
	private function setOS() {
		$OS = strtoupper(substr(PHP_OS, 0, 3));
	  	switch ( $OS ) {
	  		case 'WIN':
			$this->iswin = true;
			DEFINE("_LEND", "\r\n");
	  		break;
	  		case 'MAC':
			$this->ismac = true;
			DEFINE("_LEND", "\r");
	  		break;
	  		default:
			$this->isuni = true;
			DEFINE("_LEND", "\n");
	  		break;
	  	}
	}


    /************************/
    /* DETECT USER LANGUAGE */
    /************************/
    private function detectUserLang() {
        $lcodes = $this->getLangCodes();
        $flang = 'english';
        $found = 0;

        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $_AL = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
            //Try to detect Primary language if several languages are accepted
            foreach($lcodes as $key => $val) {
                if (strpos($_AL, $key)===0) { $flang = $val; $found = 1; break; }
            }
            if (!$found) {
				//Try to detect any language if not yet detected.
            	foreach($lcodes as $key => $val) {
                	if (strpos($_AL, $key)!==false) { $flang = $val; $found = 1; break; }
            	}
            }
        }

        if (!$found && isset($_SERVER['HTTP_USER_AGENT'])) {
            $_UA = strtolower($_SERVER['HTTP_USER_AGENT']);
            foreach($lcodes as $key => $val) {
                //if (preg_match("/[[( ]{$key}[;,_-)]/",$_UA)) {
                if (preg_match("/(".$key."\;)/",$_UA)) {
                	$flang = $val;
                	$found = 1;
                	break;
				}
            }
        }

		//If language does not exist, check if is a part of a language family 
		//and if yes, return mother language if exist. Else return english.
		if (!file_exists($this->abspath.'/language/'.$flang.'.install.php')) {
			$k = preg_split('/\_/', $flang);
			if (file_exists($this->abspath.'/language/'.$k[0].'.install.php')) {
				$flang = $k[0];
			} else {
				$flang = 'english';
			}
		}
        return $flang;
    }


	/************/
	/* FTP PATH */
	/************/
    private function FTPpath($path) {
		$rdir = str_replace('\\', '/', $this->_config['ftp_root']);
		$rdir = preg_replace('/^(\/)/', '', $rdir);
		$rdir = preg_replace('/(\/)$/', '', $rdir);
		$path = preg_replace('/^(\/)/', '', $path);
		return ($rdir == '') ? $path : $rdir.'/'.$path;
    }


    /****************************/
    /* GET LANGUAGES CODE ARRAY */
    /****************************/
    private function getLangCodes() {
        $a_languages = array(
        'ab' => 'abkhazian',
        'aa' => 'afar',
    	'af-z' => 'afrikaans',
    	'af' => 'afrikaans',
    	'sq-al' => 'albanian',
		'sq' => 'albanian',
		'am' => 'amharic',
		'ar-dz' => 'arabic_algeria',
		'ar-bh' => 'arabic_bahrain',
    	'ar-eg' => 'arabic_egypt',
    	'ar-iq' => 'arabic_iraq',
    	'ar-jo' => 'arabic_jordan',
    	'ar-kw' => 'arabic_kuwait',
    	'ar-lb' => 'arabic_lebanon',
    	'ar-ly' => 'arabic_libya',
    	'ar-MA' => 'arabic_morocco',
    	'ar-om' => 'arabic_oman',
    	'ar-qa' => 'arabic_qatar',
    	'ar-sa' => 'arabic_saudiarabia',
    	'ar-sy' => 'arabic_syria',
    	'ar-tn' => 'arabic_tunisia',
    	'ar-ae' => 'arabic_uae',
    	'ar-ye' => 'arabic_YE',
    	'ar' => 'arabic',
    	'hy-am' => 'armenian',
    	'hy' => 'armenian',
    	'az-cyrl-az' => 'azeri',
    	'az-latn-az' => 'azeri_latin',
    	'az-az' => 'azeri',
    	'az' => 'azeri',
    	'eu-es' => 'basque',
    	'eu' => 'basque',
    	'be-by' => 'belarusian',
    	'be' => 'belarusian',
    	'bn-in' => 'bengali',
        'bn' => 'bengali',
        'bs-latn-ba' => 'bosnian',
        'bs-ba' => 'bosnian',
        'bs' => 'bosnian',
        'bg-bg' => 'bulgarian',
        'bg' => 'bulgarian',
        'ca-es' => 'catalan',
        'ca' => 'catalan',
        'zh-hk' => 'chinese_hongkong',
        'zh-mo' => 'chinese_macau',
        'zh-cn' => 'chinese',
        'zh-sg' => 'chinese_singapore',
        'zh-tw' => 'chinese_taiwan',
        'zh' => 'chinese',
        'hr-ba' => 'croatian',
        'hr' => 'croatian',
        'cs-cz' => 'czech',
        'cs' => 'czech',
        'da-dk' => 'danish',
        'da' => 'danish',
        'dv-mv' => 'divehi',
        'dv' => 'divehi',
        'nl-be' => 'dutch_belgium',
        'nl-nl' => 'dutch',
        'nl' => 'dutch',
		'en-au' => 'english_australia',
		'en-bz' => 'english_belize',
		'en-ca' => 'english_canada',
		'en-ie' => 'english_ireland',
		'en-jm' => 'english_jamaica',
		'en-nz' => 'english_newzealang',
		'en-ph' => 'english_philippines',
		'en-za' => 'english_southafrica',
		'en-tt' => 'english_trinidad',
		'en-us' => 'english_usa',
		'en-gb' => 'english',
		'en' => 'english',
		'et-ee' => 'estonian',
		'et' => 'estonian',
		'eo' => 'esperanto',
        'fo-fo' => 'faeroese',
        'fo' => 'faeroese',
        'fa-ir' => 'persian',
        'fa' => 'persian',
		'fi-fi' => 'finnish',
		'fi' => 'finnish',
		'fj' => 'fijian',
		'fr-be' => 'french_belgium',
		'fr-ca' => 'french_canada',
		'fr-fr' => 'french',
		'fr-lu' => 'french_luxemburg',
		'fr-mc' => 'french_monaco',
		'fr-ch' => 'french_switzerland',
		'fr' => 'french',
		'mk-mk' => 'fyrom',
		'mk' => 'fyrom',
		'gl-es' => 'galician',
		'gl' => 'galician',
		'ka' => 'georgian',
		'de-at' => 'german_austria',
		'de-de' => 'german',
		'de-li' => 'german_liechtenstein',
		'de-lu' => 'german_luxembourg',
		'de-ch' => 'german_switzerland',
		'de' => 'german',
		'el-gr' => 'greek',
		'el-cy' => 'greek',
		'el' => 'greek',
		'kl' => 'greenlandic',
    	'gu-in' => 'gujarati',
    	'gu' => 'gujarati',
    	'he-il' => 'hebrew',
    	'he' => 'hebrew',
    	'hi-in' => 'hindi',
    	'hi' => 'hindi',
    	'hu-hu' => 'hungarian',
    	'hu' => 'hungarian',
    	'is-is' => 'icelandic',
    	'is' => 'icelandic',
    	'id-id' => 'indonesian',
    	'id' => 'indonesian',
    	'ga' => 'irish',
    	'it-it' => 'italian',
    	'it-ch' => 'italian_switzerland',
    	'it' => 'italian',
    	'ja-jp' => 'japanese',
    	'ja' => 'japanese',
    	'kn-in' => 'kannada',
    	'kn' => 'kannada',
    	'kk-kz' => 'kazakh',
    	'kk' => 'kazakh',
    	'kok-in' => 'konkani',
    	'kok' => 'konkani',
    	'ko-kr' => 'korean',
    	'ko' => 'korean',
    	'ku' => 'kurdish',
    	'ky-kg' => 'kyrgyz',
    	'ky' => 'kyrgyz',
    	'lv-lv' => 'latvian',
    	'lv' => 'latvian',
    	'lt-LT' => 'lithuanian',
    	'lt' => 'lithuanian',
    	'lb' => 'luxembourgish',
    	'ms-bn' => 'malay_brunei',
    	'ms-my' => 'malay_malaysia',
    	'ms' => 'malay',
    	'ml-in' => 'malayalam',
    	'ml' => 'malayalam',
    	'mt-mt' => 'maltese',
    	'mt' => 'maltese',
    	'mi-NZ' => 'maori',
    	'mi' => 'maori',
    	'mr-in' => 'marathi',
    	'mr' => 'marathi',
    	'mn-mn' => 'mongolian',
    	'mn' => 'mongolian',
    	'ne' => 'nepali',
    	'nso' => 'nothern_sotho',
    	'nb-no' => 'norwegian',
    	'nn-no' => 'norwegian_nynorsk',
    	'nb' => 'norwegian',
    	'pl-pl' => 'polish',
    	'pl' => 'polish',
    	'pt-br' => 'portuguese_brazil',
    	'pt-pt' => 'portuguese',
    	'pt' => 'portuguese',
    	'pa-in' => 'punjabi',
    	'pa' => 'punjabi',
    	'quz-bo' => 'quechua_bolivia',
    	'quz-ec' => 'quechua_equador',
    	'quz-pe' => 'quechua_peru',
		'ro-ro' => 'romanian',
		'ro' => 'romanian',
		'ru-ru' => 'russian',
		'ru' => 'russian',
		'smn-fi' => 'sami_inari',
		'smj-no' => 'sami_lule',
		'smj-se' => 'sami_lule',
		'se-fi' => 'sami_northern',
		'se-no' => 'sami_northern',
		'se-se' => 'sami_northern',
		'sms-fi' => 'sami_skolt',
		'sma-no' => 'sami_southern',
		'sma-se' => 'sami_southern',
		'sa-in' => 'sanskrit',
		'sa' => 'sanskrit',
		'sr-cyrl-cs' => 'srpski',
		'sr-cyrl-ba' => 'srpski',
		'sr-latn-cs' => 'serbian',
		'sr-latn-ba' => 'serbian',
		'rs' => 'srpski',
		'sr' => 'serbian',
		'rs' => 'serbian',
		'sk-sk' => 'slovak',
		'sk' => 'slovak',
		'sl-si' => 'slovenian',
		'sl' => 'slovenian',
		'es-ar' => 'spanish_argentina',
		'es-bo' => 'spanish_bolivia',
		'es-cl' => 'spanish_chile',
		'es-cr' => 'spanish_costarica',
		'es-do' => 'spanish_dominican',
		'es-ec' => 'spanish_equador',
		'es-sv' => 'spanish_elsalvador',
		'es-gt' => 'spanish_guatemala',
		'es-hn' => 'spanish_honduras',
		'es-es' => 'spanish',
		'es-mx' => 'spanish_mexico',
		'es-ni' => 'spanish_nicaragua',
		'es-pa' => 'spanish_panama',
		'es-py' => 'spanish_paraguay',
		'es-pe' => 'spanish_peru',
		'es-pr' => 'spanish_puertorico',
		'es-uy' => 'spanish_uruguay',
		'es-ve' => 'spanish_venezuela',
		'es' => 'spanish',
		'sw-ke' => 'swahili',
		'sw' => 'swahili',
		'sv-se' => 'swedish',
		'sv-fi' => 'swedish_finland',
		'sv' => 'swedish',
		'syr-sy' => 'syriac',
		'ta-in' => 'tamil',
		'ta' => 'tamil',
		'tt-ru' => 'tatar',
		'tt' => 'tatar',
		'te-in' => 'telegu',
		'te' => 'telegu',
		'tr-tr' => 'turkish',
		'tr' => 'turkish',
		'uk-ua' => 'ukrainian',
		'uk' => 'ukrainian',
		'ur-pk' => 'urdu',
		'ur' => 'urdu',
		'uz-cyrl-uz' => 'uzbek',
		'uz-latn-uz' => 'uzbek_latin',
		'uz-uz' => 'uzbek',
		'uz' => 'uzbek',
		'vi-vn' => 'vietnamese',
		'vi' => 'vietnamese',
		'cy-gb' => 'welsh',
		'cy' => 'welsh',
		'xh-za' => 'xhosa',
		'xh' => 'xhosa',
		'zu-za' => 'zulu',
		'zu' => 'zulu'
        );
        return $a_languages;
    }

}

?>
