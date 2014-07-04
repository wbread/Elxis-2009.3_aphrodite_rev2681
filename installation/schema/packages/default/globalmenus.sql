
INSERT INTO #__menu VALUES (NULL, 'mainmenu', 'Elxis.org', 'index.php?option=com_wrapper', 'wrapper', 1, 0, 0, 0, 9, 0, '1979-12-19 00:00:00', 0, 0, 29, 0, 'menu_image=-1\nmenu_image_only=0\npageclass_sfx=\nback_button=0\npage_title=0\nheader=\nscrolling=auto\nwidth=100%\nheight=600\nheight_auto=1\nadd=1\nurl=http://www.elxis.org/enter.php', NULL, 'elxisorg');

INSERT INTO #__menu VALUES (NULL, 'othermenu', 'Elxis CMS', 'http://www.elxis.org', 'url', 1, 0, 0, 0, 1, 0, '1979-12-19 00:00:00', 0, 1, 29, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);
INSERT INTO #__menu VALUES (NULL, 'othermenu', 'Elxis Forum', 'http://forum.elxis.org', 'url', 1, 0, 0, 0, 2, 0, '1979-12-19 00:00:00', 0, 0, 29, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);

INSERT INTO #__menu VALUES (NULL, 'usermenu', 'Edit profile', 'index.php?option=com_user&task=UserDetails', 'url', 1, 0, 0, 0, 1, 0, '1979-12-19 00:00:00', 0, 0, 18, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);
INSERT INTO #__menu VALUES (NULL, 'usermenu', 'Member list', 'index.php?option=com_user&task=list', 'url', 1, 0, 0, 0, 2, 0, '1979-12-19 00:00:00', 0, 0, 18, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);
INSERT INTO #__menu VALUES (NULL, 'usermenu', 'Submit content', 'index.php?option=com_content&task=subcontent', 'url', 1, 0, 0, 0, 3, 0, '1979-12-19 00:00:00', 0, 0, 19, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);
INSERT INTO #__menu VALUES (NULL, 'usermenu', 'Submit Weblink', 'index.php?option=com_weblinks&task=new', 'url', 1, 0, 0, 0, 4, 0, '1979-12-19 00:00:00', 0, 0, 18, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);
INSERT INTO #__menu VALUES (NULL, 'usermenu', 'Check-in my items', 'index.php?option=com_user&task=CheckIn', 'url', 1, 0, 0, 0, 5, 0, '1979-12-19 00:00:00', 0, 0, 18, 0, 'menu_image=-1\nmenu_image_only=0', NULL, NULL);
INSERT INTO #__menu VALUES (NULL, 'usermenu', 'Logout', 'index.php?option=com_login', 'components', 1, 0, 15, 0, 6, 0, '1979-12-19 00:00:00', 0, 0, 18, 0, 'menu_image=-1\nmenu_image_only=0\npageclass_sfx=\nback_button=\npage_title=1\nheader_login=\nlogin=\nlogin_message=0\ndescription_login=0\ndescription_login_text=\nimage_login=\nimage_login_align=right\nheader_logout=\nlogout=\nlogout_message=1\ndescription_logout=1\ndescription_logout_text=\nimage_logout=', NULL, NULL);
