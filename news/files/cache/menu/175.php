<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[176] = array("en"=>'Welcome Page',"ko"=>'Welcome Page',"jp"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"fr"=>'Welcome Page',"de"=>'Welcome Page',"ru"=>'Welcome Page',"es"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"mn"=>'Welcome Page',); $_menu_names[177] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); $_menu_names[178] = array("en"=>'SAMPLE 2',"ko"=>'SAMPLE 2',"jp"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"de"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"es"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"mn"=>'SAMPLE 2',); $_menu_names[179] = array("en"=>'SAMPLE 3',"ko"=>'SAMPLE 3',"jp"=>'SAMPLE 3',"zh-CN"=>'SAMPLE 3',"zh-TW"=>'SAMPLE 3',"fr"=>'SAMPLE 3',"de"=>'SAMPLE 3',"ru"=>'SAMPLE 3',"es"=>'SAMPLE 3',"tr"=>'SAMPLE 3',"vi"=>'SAMPLE 3',"mn"=>'SAMPLE 3',); $_menu_names[180] = array("en"=>'Board',"ko"=>'Board',"jp"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"fr"=>'Board',"de"=>'Board',"ru"=>'Board',"es"=>'Board',"tr"=>'Board',"vi"=>'Board',"mn"=>'Board',); $_menu_names[181] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); $_menu_names[182] = array("en"=>'SAMPLE 2',"ko"=>'SAMPLE 2',"jp"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"de"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"es"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"mn"=>'SAMPLE 2',); $_menu_names[183] = array("en"=>'XEIcon',"ko"=>'XEIcon',"jp"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"fr"=>'XEIcon',"de"=>'XEIcon',"ru"=>'XEIcon',"es"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"mn"=>'XEIcon',); $_menu_names[184] = array("en"=>'SAMPLE 1',"ko"=>'SAMPLE 1',"jp"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"de"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"es"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"mn"=>'SAMPLE 1',); ; $menu->list = array(176=>array("node_srl" => 176, "parent_srl" => 0, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[176][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#","#","#") && in_array(Context::get("mid"), array("#","#","#","#")) ? 1 : 0), "expand" => 'N', "list" => array(177=>array("node_srl" => 177, "parent_srl" => 176, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[177][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[177][$lang_type] : $_menu_names[177][$lang_type]) : ""),),178=>array("node_srl" => 178, "parent_srl" => 176, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[178][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[178][$lang_type] : $_menu_names[178][$lang_type]) : ""),),179=>array("node_srl" => 179, "parent_srl" => 176, "menu_name_key" => 'SAMPLE 3', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[179][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[179][$lang_type] : $_menu_names[179][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#","#") && in_array(Context::get("mid"), array("#","#","#","#")) ? $_menu_names[176][$lang_type] : $_menu_names[176][$lang_type]) : ""),),180=>array("node_srl" => 180, "parent_srl" => 0, "menu_name_key" => 'Board', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[180][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#","#") && in_array(Context::get("mid"), array("#","#","#")) ? 1 : 0), "expand" => 'N', "list" => array(181=>array("node_srl" => 181, "parent_srl" => 180, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[181][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[181][$lang_type] : $_menu_names[181][$lang_type]) : ""),),182=>array("node_srl" => 182, "parent_srl" => 180, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[182][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[182][$lang_type] : $_menu_names[182][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#") && in_array(Context::get("mid"), array("#","#","#")) ? $_menu_names[180][$lang_type] : $_menu_names[180][$lang_type]) : ""),),183=>array("node_srl" => 183, "parent_srl" => 0, "menu_name_key" => 'XEIcon', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[183][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? 1 : 0), "expand" => 'N', "list" => array(184=>array("node_srl" => 184, "parent_srl" => 183, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[184][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[184][$lang_type] : $_menu_names[184][$lang_type]) : ""),),), "link" => (true ? (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? $_menu_names[183][$lang_type] : $_menu_names[183][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>