<?php
$lang->admin='Admin';
$lang->subtitle_primary='Primary';
$lang->subtitle_advanced='Advanced';
$lang->subtitle_etc='Others';
$lang->current_state='Current state';
$lang->latest_documents='Latest Documents';
$lang->latest_comments='Latest Comments';
$lang->latest_trackbacks='Latest Trackbacks';
$lang->notices='Notices';
$lang->favorites='Favorites';
$lang->admin_info='Administrator Info';
$lang->admin_index='Index Admin Page';
$lang->control_panel='Dashboard';
$lang->site_title='Site title';
$lang->start_module='Homepage';
$lang->about_site_title='This is the title which is exposed when the site title is not set at detail setting.';
$lang->about_start_module='You can specify the default page for the site.';
$lang->select_site='Site';
$lang->select_module_type='Module Type';
$lang->select_module_instance='Select Page';
if(!is_array($lang->module_category_title)){
	$lang->module_category_title = array();
}
$lang->module_category_title['service']='Services';
$lang->module_category_title['member']='Members';
$lang->module_category_title['content']='Contents';
$lang->module_category_title['statistics']='Statistics';
$lang->module_category_title['construction']='Construction';
$lang->module_category_title['utility']='Utilities';
$lang->module_category_title['interlock']='Embedded';
$lang->module_category_title['accessory']='Accessories';
$lang->module_category_title['migration']='Data Migration';
$lang->module_category_title['system']='System Setting';
if(!is_array($lang->menu_gnb)){
	$lang->menu_gnb = array();
}
$lang->menu_gnb['dashboard']='Dashboard';
$lang->menu_gnb['menu']='Menu';
$lang->menu_gnb['user']='Member';
$lang->menu_gnb['content']='Content';
$lang->menu_gnb['configuration']='Settings';
$lang->menu_gnb['advanced']='Advanced';
$lang->advanced_settings='Advanced Settings';
$lang->newest_news='Latest News';
$lang->env_setup='Settings';
$lang->default_url='Default URL';
$lang->about_default_url='Enter a default URL to be used to control multiple websites, including XE installation path. E.g.) http://domain//installation path';
$lang->env_information='Environment Information';
$lang->current_version='Current Version';
$lang->current_path='Installed Path';
$lang->released_version='Latest Version';
$lang->about_download_link='New version of XE is now available! Please click the download link to get the latest version.';
$lang->item_addon='Addon List';
$lang->item_widget='Widget List';
$lang->item_layout='Layout List';
$lang->module_name='Module Name';
$lang->addon_name='Addon Name';
$lang->version='Version';
$lang->table_count='The Number of Tables';
$lang->installed_path='Installed Path';
$lang->cmd_shortcut_management='Edit Menu';
$lang->msg_is_not_administrator='Only administrator can access this page.';
$lang->msg_manage_module_cannot_delete='Shortcuts of module, addon, layout, widget cannot be removed.';
$lang->msg_default_act_is_null='Shortcut cannot be registered because the default admin Action is not set.';
$lang->welcome_to_xe='Welcome to the XE admin page.';
$lang->about_lang_env='If you want to make the language setting same for first-time visitors, change the language setting to what you want and click [Save] button below.';
$lang->xe_license='XE complies with the LGPL.';
$lang->yesterday='Yesterday';
$lang->today='Today';
$lang->default_lang='Select default language.';
$lang->lang_select='Select the supporting language(s).';
$lang->about_recompile_cache='Delete useless or invalid cache files?';
$lang->confirm_run='It may take a long time. Do you want to run?';
$lang->use_ssl='Use <abbr title="Secure Sockets Layer">SSL</abbr>';
if(!is_array($lang->ssl_options)){
	$lang->ssl_options = array();
}
$lang->ssl_options['none']='Never';
$lang->ssl_options['optional']='Optional';
$lang->ssl_options['always']='Always';
$lang->about_use_ssl='Selecting \'Optional\' is to use SSL for the specified actions such as signing up and changing information.  Selecting \'Always\' is to use SSL for all services. Please be careful because you may not be avaliable to access to the site if you use SSL where its environment is not set.';
$lang->server_ports='Server Port';
$lang->about_server_ports='If your web server does not use 80 for HTTP or 443 for HTTPS port, you should specify server ports.';
$lang->use_db_session='Use Session DB';
$lang->about_db_session='This setting will use PHP session as DB during authentication. For the Websites which do not use web server frequently, you can uncheck this setting to improve response time. However, session DB will make it impossible to get current users, so you cannot use related functions.';
$lang->qmail_compatibility='Enable Qmail';
$lang->sftp='Use SFTP';
$lang->ftp_get_list='Get List';
$lang->ftp_remove_info='Remove FTP Info.';
$lang->msg_find_xe_path_fail='Failed to search XE installed path automatically. Please set manually.';
$lang->msg_ftp_invalid_path='Failed to read the specified FTP Path.';
$lang->use_ftp_passive_mode='Use FTP Passive Mode';
$lang->use_sftp_support='Use SFTP';
$lang->disable_sftp_support='You should install ssh2 PHP module to use SFTP.';
$lang->msg_self_restart_cache_engine='Please restart Memcached or cache daemon.';
$lang->autoinstall='EasyInstall';
$lang->last_week='Last week';
$lang->this_week='This week';
$lang->trash='Recycle Bin';
$lang->accusation='Report';
$lang->status='Status';
$lang->action='Execute';
$lang->use_rewrite='Use Rewrite Mode';
$lang->timezone='The local standard time.';
$lang->use_mobile_view='Enable Mobile Page';
$lang->about_use_mobile_view='Show mobile page when visitors access with mobile devices.';
$lang->thumbnail_type='Select thumbnail type.';
$lang->input_footer_script='Footer script';
$lang->detail_input_footer_script='The script is inserted into the bottom of body. It does not work at admin page.';
$lang->corp='Crop(Cut)';
$lang->ratio='Ratio(Keep Aspect)';
$lang->admin_ip_limit='Sepcify IP address band that can access the admin page.';
$lang->local_ip_address='Local IP address';
$lang->about_admin_ip_limit='Specify IP address which can access to admin page. Please note that only the specified IP addresses can access the admin page. The information on IP address band is stored in  /files/config/db.config.php. Change the line to multiple IP.';
$lang->detail_about_ftp_info='Enable easy installation if you enter FTP information. The information of FTP is stored in files/config/ftp.config.php. If you are unable to easy install, PHP\'s \'safe_mode\' must be changed \'On\'';
$lang->allow_use_favicon='Do you want to use favicon?';
$lang->about_use_favicon='You can upload 16x16 size<em>*.ico</em> file only.';
$lang->allow_use_mobile_icon='Do you want to use the mobile home screen icon?';
$lang->detail_use_mobile_icon='You can upload 57x57 or 114x114 size<em>*.png</em> file only.';
$lang->use_sso='Use <abbr title="Single Sign On">SSO</abbr>?';
$lang->about_use_sso='SSO will enable users to sign in just once for both default and virtual site. You will need this only if you are using virtual sites.';
$lang->about_arrange_session='Do you want to clean up session?';
$lang->cmd_clear_session='Clean up session';
$lang->save='Save';
$lang->view='View';
$lang->select='Select';
$lang->move='Move';
$lang->modify='Update';
$lang->restore='Restore';
$lang->delete='Delete';
$lang->add='Add';
$lang->selected_layout='Selected Layout';
$lang->selected_skin='Selected %s Skin';
$lang->no_selected_skin='No Selected %s Skin';
$lang->no_selected_skin_desc='The selected theme has no skin information for this item. Please select a skin by yourself.';
$lang->no_select='No Select';
$lang->admin_logo='Admin Page Logo';
$lang->admin_title='Admin Page Title';
$lang->admin_menu_add='Add Admin Menu';
$lang->bug_report='Bug Report';
$lang->theme_setting='Theme Setting';
$lang->skin_setting='Skin Setting';
$lang->msg_thumbnail_not_exist='Thumbnail does not exist';
$lang->user_theme='User Theme';
$lang->user_define='User Defined';
$lang->by_you='User setting';
$lang->update_available='Update Available';
$lang->need_update_and_table='Need to Create DB Table and Update Module';
$lang->need_update='Need to Update Module';
$lang->need_table='Need to Create DB Table';
$lang->admin_menu_setup='Admin Menu Setup';
$lang->no_data='There is no data submitted.';
$lang->cmd_admin_menu_reset='Initialize admin menu';
$lang->confirm_reset_admin_menu='Are you sure initialize the admin menu?';
$lang->cmd_view_server_env='View Server Env.';
$lang->server_env='Server Environment';
$lang->ftp_form_title='FTP Account Information';
$lang->ftp='FTP';
$lang->ftp_host='FTP hostname';
$lang->ftp_port='FTP port';
$lang->about_ftp_password='Password is required during access to FTP for checking FTP directories. FTP password will not be stored after this.';
$lang->cmd_check_ftp_connect='Check FTP Connection';
$lang->msg_safe_mode_ftp_needed='If safe_mode setting of PHP is On, it hepls normal functioning of XE.';
$lang->msg_safe_mode_ftp_needed2='Easy installation or update of module is enabled.';
$lang->msg_safe_mode_ftp_config='This information is stored in<strong>files/config/ftp.config.php</strong>. You can add, change or delete this on the Settings page after the installation.';
$lang->msg_ftp_no_directory='Succeed to connect to the host via FTP, but cannot read any directory list informaiton. Please check the server configurations.';
$lang->msg_ftp_mkdir_fail='Failed to create a directory using FTP. Please check the permission of FTP account.';
$lang->msg_ftp_chmod_fail='Chmod failed. Please check the permission and configuration of the FTP server.';
$lang->msg_ftp_connect_success='Successfully connected to FTP server and authenticated.';
$lang->ftp_path_title='FTP Path Information';
$lang->ftp_installed_realpath='Absolute Path of XE';
$lang->msg_ftp_installed_ftp_realpath='Absolute FTP Path of XE installed';
$lang->msg_php_warning_title='Warning unsafe PHP version';
$lang->msg_php_warning_notice='The server is using a unsafe version of PHP, it is recommended to upgrade to the latest stable version.';
$lang->msg_php_warning_notice_explain='<li>PHP version of this server can be exposed to serious security problems and attacks.</li><li>Latest version of XE is not available.</li><li>You can not use extensions that are supported by the latest version of XE.</li><li>Some extensions may not work properly. It can cause problems.</li>';
$lang->msg_php_warning_now_version='PHP version of this server';
$lang->msg_php_warning_latest_version_check='Check the latest stable version of PHP';
$lang->admin_setup='Admin Setup';
$lang->open_all='Open All';
$lang->close_all='Collapse All';
$lang->desktop_settings='PC Settings';
$lang->mobile_settings='Mobile Settings';
$lang->details='Details';
$lang->available_new_version='Available new versions';
$lang->uv='Unique Visitors';
$lang->pv='Page Views';
$lang->this_week='This Week';
$lang->next_week='Next Week';
$lang->last_week='Last Week';
$lang->mon='Mon';
$lang->tue='Tue';
$lang->wed='Wed';
$lang->thu='Thu';
$lang->fri='Fri';
$lang->sat='Sat';
$lang->sun='Sun';
$lang->checkBrowserIE8='If you use a browser under IE8, admin page will not function normally.';
$lang->subtitle_sitelock='Site Lock';
$lang->use_sitelock='Use Site Lock';
$lang->sitelock_whitelist='IPs allowed to access';
$lang->sitelock_title='Sign Title';
$lang->sitelock_message='Sign Contents';
$lang->sitelock_message_help='You can use HTML tags.';
$lang->sitelock_warning_whitelist='You should include the IP of the administrator here.<br />If the access is blocked, you can unbrick this by changing `\'use_sitelock\' => \'<strong>Y</strong>\'` to `\'use_sitelock\' => \'<strong>N</strong>\'` in \'./files/config/db.config.php.\'<br />The file of site lock design is at \'./common/tpl/sitelock.html.\'';
$lang->your_ip='Your IP';
$lang->sitelock_in_use='Site lock in use';
$lang->about_sitelock_in_use='관리자 페이지에서 허용한 IP를 제외한 사용자는 접속할 수 없습니다.';
$lang->admin_check_env='Server Environment Check';
$lang->admin_use_condition_enable='You can use.';
$lang->admin_use_condition_disable='You cannot use.';
