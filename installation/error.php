<?php 
/**
* @ Version: $Id: error.php 1878 2008-01-25 21:26:29Z datahell $
* @ Copyright: Copyright (C) 2006-2008 Elxis.org. All rights reserved.
* @ Package: Elxis
* @ Subpackage: Elxis CMS Installer
* @ Author: Elxis Team
* @ E-mail: info@elxis.org
* @ URL: http://www.elxis.org
* @ License: http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Elxis CMS is a Free Software
* @ Description: Elxis CMS Installer
*/

if (isset($_GET['errmsg'])) {
	$errmsg = '<span class="rederror">Installation Error!</span><br /><br />'.htmlspecialchars(urldecode($_GET['errmsg']));
} else {
	$errmsg = '<span class="rederror">Installation error!</span><br /><br />Unknown error';
}

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Elxis Installation Error</title>
<meta http-equiv="Content-Type" content="text/html; UTF-8" />
<meta name="generator" content="Elxis CMS - Copyright (C) 2006-2008 Elxis.org" />
<meta name="robots" content="noindex,nofollow" />
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="includes/install.css" type="text/css" />
</head>
<body>
<div align="center" style="margin-top: 100px;">
	<table class="error" align="center" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" colspan="2" class="errorhead">Elxis CMS</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<img src="images/error48.png" border="0" alt="error" /><br /><br />
			<?php echo $errmsg; ?>
			<br /><br /><br />
		</td>
	</tr>
	<tr>
		<td align="center">
			<div class="errorbutton">
				<a href="javascript:history.go(-1);" title="try again"><img src="images/reload.png" border="0" align="middle" alt="reload" /></a> 
				Reload
			</div>
    	</td>
    	<td align="center">
			<div class="errorbutton">
				<a href="index.php" target="_self" title="start over"><img src="images/restart.png" border="0" align="middle" alt="restart" /></a> 
				Restart
			</div>
    	</td>
	</tr>
	</table>
	<div class="errorsmall">
		Powered by <a href="http://www.elxis.org" target="_blank" title="Visit Elxis.org">Elxis CMS</a>. 
		Copyright (C) 2006-<?php echo date('Y'); ?> Elxis Team. All rights reserved.
	</div>
</div>
</body>
</html>
