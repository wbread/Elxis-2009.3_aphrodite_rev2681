/* ELXIS INSTALLER JAVASCRIPT */
/* AUTHOR: Ioannis Sannos */
/* COPYRIGHT (C) 2006-2009 Elxis.org. All rights reserved */
/* E-mail: info@elxis.org */
/* URL: www.elxis.org */
/* Elxis CMS is a Free Software released under the GNU/GPL license */

/*
function getsecTimeZone() {
	var rightNow = new Date();
	var jan1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
	var temp = jan1.toGMTString();
	var jan2 = new Date(temp.substring(0, temp.lastIndexOf(" ")-1));
	var std_time_offset = (jan1 - jan2) / 1000;
	var june1 = new Date(rightNow.getFullYear(), 6, 1, 0, 0, 0, 0);
	temp = june1.toGMTString();
	var june2 = new Date(temp.substring(0, temp.lastIndexOf(" ")-1));
	var daylight_time_offset = (june1 - june2)/ 1000;
	var dst;
	if (std_time_offset == daylight_time_offset) { dst = 0; } else { dst = 3600; }
	return (std_time_offset + dst);
}

function setsecTimeZone() {
    var tzone = getsecTimeZone();
    var el = document.getElementById('timezone');
    el.value = tzone;

	var rightNow = new Date();
    var lt = document.getElementById('localtime');

    var oy = rightNow.getFullYear();
    var om = (rightNow.getMonth() + 1);
    var od = rightNow.getDate();
    var oh = rightNow.getHours();
    var oi = rightNow.getMinutes();
    var os = rightNow.getSeconds();
    if (om < 10) { om = '0'+om; }
    if (od < 10) { od = '0'+od; }
    if (oh < 10) { oh = '0'+oh; }
    if (oi < 10) { oi = '0'+oi; }
    if (os < 10) { os = '0'+os; }
    var out = oy+'-'+om+'-'+od+' '+oh+':'+oi+':'+os;
    lt.value = out;
}
*/

function getcurrentdate() {
	var rightNow = new Date();
    var oy = rightNow.getFullYear();
    var om = (rightNow.getMonth() + 1);
    var od = rightNow.getDate();
    var oh = rightNow.getHours();
    var oi = rightNow.getMinutes();
    var os = rightNow.getSeconds();
    if (om < 10) { om = '0'+om; }
    if (od < 10) { od = '0'+od; }
    if (oh < 10) { oh = '0'+oh; }
    if (oi < 10) { oi = '0'+oi; }
    if (os < 10) { os = '0'+os; }
    var out = oy+'-'+om+'-'+od+' '+oh+':'+oi+':'+os;
    return out;
}

function calculateoffset() {
    var st = parseInt(Number(document.getElementById('servertime').value));
    var lt = parseInt(Number(new Date()/1000));
	var sdiff = (lt - st);
	var hdiff = Math.round(sdiff/1800);
	var offset = Math.round((hdiff/2)*Math.pow(10,1))/Math.pow(10,1);
	if (offset > 24) { offset = 0; }
	if (offset < -24) { offset = 0; }
	document.getElementById('suggestedoffset').innerHTML = offset;
}

function switchbutton() {
	var cobj = document.getElementById('agreecheck');
	var bobj = document.getElementById('nextbtn');
	if (cobj.checked == true) {
		bobj.style.backgroundColor = "#CC0000";
		bobj.style.cursor = 'pointer';
	} else {
		bobj.style.backgroundColor = "#DDD";
		bobj.style.cursor = 'default';
	}
}

function checkftp() {
	$('ftpresults').style.display = "";
	$("ftpresults").innerHTML = "<img src='images/loading_bar.gif'/>";
	new Ajax.Updater({ success: 'ftpresults', failure: 'ftpresults' }, 'includes/ftpcheck.php', {
		parameters: {
			ftp_host: $F('ftp_host'), 
			ftp_user: $F('ftp_user'), 
			ftp_pass: $F('ftp_pass'),
			ftp_port: $F('ftp_port'), 
			ftp_root: $F('ftp_root'),
			mylang: $F('ajaxlang')
		}
	});
}


function checkdbcompat() {
	$('dbcompatresults').style.display = "";
	$("dbcompatresults").innerHTML = "<img src='images/loading_bar.gif'/>";
	new Ajax.Updater({ success: 'dbcompatresults', failure: 'dbcompatresults' }, 'includes/dbcompatcheck.php', {
		parameters: {
			dbtype: $F('dbtype'), 
			mylang: $F('ajaxlang')
		}
	});
}


function dbpathdisplay() {
	var dbtype = $F('dbtype');
	var elem1 = document.getElementById('dbfile1');
	var elem2 = document.getElementById('dbfile2');
	var elem3 = document.getElementById('dbfile3');
	var elem4 = document.getElementById('dbfile4');
	
	if ((dbtype == 'borland_ibase') | (dbtype == 'firebird') | (dbtype == 'ibase') | (dbtype == 'access')) {
		elem1.style.display = 'none';
		elem2.style.display = '';
		elem3.style.display = 'none';
		elem4.style.display = '';
	} else {
		elem1.style.display = '';
		elem2.style.display = 'none';
		elem3.style.display = '';
		elem4.style.display = 'none';
	}
}

function switchbgcolor(boxlang) {
	var el = document.getElementById(boxlang+'box');
	var cel = document.getElementById(boxlang+'cbox');
	if (cel.checked) {
		el.style.backgroundColor = '#def5b9';
	} else {
		el.style.backgroundColor = '#fee9ec';
	}
}

function checklangpublish() {
	var laObj = document.getElementById('lang');
	var sellang = laObj.options[laObj.selectedIndex].value;
	document.getElementById(sellang+'cbox').checked = true;
	document.getElementById(sellang+'box').style.backgroundColor = '#def5b9';
}

function renamehtacc() {
	$('htaccresults').style.display = "";
	$("htaccresults").innerHTML = "<img src='images/loading_bar.gif'/>";
	new Ajax.Updater({ success: 'htaccresults', failure: 'htaccresults' }, 'includes/renhtacc.php', {
		parameters: {
			mylang: $F('ajaxlang')
		}
	});
}



function setActiveTemplate() {
	for (var i=0; i < document.frmclinfo.template.length; i++) {
		var tpl = document.frmclinfo.template[i].value;
		var tpltbox = document.getElementById('tpl_title_'+tpl);
   		if (document.frmclinfo.template[i].checked) {
			tpltbox.setAttribute("class", "tpl_title_sel");
			tpltbox.setAttribute("className", "tpl_title_sel");
		} else {
			tpltbox.setAttribute("class", "tpl_title");
			tpltbox.setAttribute("className", "tpl_title");
		}
	}
}
