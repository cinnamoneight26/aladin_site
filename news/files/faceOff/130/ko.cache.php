<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "0";
$layout_info->layout = "xe_official";
$layout_info->type = "";
$layout_info->path = "./layouts/xe_official/";
$layout_info->title = "XE 공식 사이트 레이아웃";
$layout_info->description = "
        XE 공식 사이트 레이아웃입니다.
        제작 : NAVER
    ";
$layout_info->version = "1.7";
$layout_info->date = "20131127";
$layout_info->homepage = "http://xpressengine.com/";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "NAVER";
$layout_info->author[0]->email_address = "developers@xpressengine.com";
$layout_info->author[0]->homepage = "http://xpressengine.com/";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->colorset = new stdClass;
$layout_info->extra_var->colorset->group = "";
$layout_info->extra_var->colorset->title = "컬러셋";
$layout_info->extra_var->colorset->type = "select";
$layout_info->extra_var->colorset->value = $vars->colorset;
$layout_info->extra_var->colorset->description = "원하는 컬러셋을 선택해주세요.";
$layout_info->extra_var->colorset->options = array();
$layout_info->extra_var->colorset->options["default"] = new stdClass;
$layout_info->extra_var->colorset->options["default"]->val = "기본";
$layout_info->extra_var->colorset->options["black"] = new stdClass;
$layout_info->extra_var->colorset->options["black"]->val = "검은색";
$layout_info->extra_var->colorset->options["white"] = new stdClass;
$layout_info->extra_var->colorset->options["white"]->val = "하얀색";
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "로고이미지";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "레이아웃의 상단에 표시될 로고이미지를 입력하세요. (세로길이가 23px인 투명이미지가 가장 어울립니다)";
$layout_info->extra_var->logo_image_alt = new stdClass;
$layout_info->extra_var->logo_image_alt->group = "";
$layout_info->extra_var->logo_image_alt->title = "로고이미지 대체문자";
$layout_info->extra_var->logo_image_alt->type = "text";
$layout_info->extra_var->logo_image_alt->value = $vars->logo_image_alt;
$layout_info->extra_var->logo_image_alt->description = "레이아웃의 상단에 표시될 로고이미지 대체문자를 입력하세요.";
$layout_info->extra_var->index_url = new stdClass;
$layout_info->extra_var->index_url->group = "";
$layout_info->extra_var->index_url->title = "홈 페이지 URL";
$layout_info->extra_var->index_url->type = "text";
$layout_info->extra_var->index_url->value = $vars->index_url;
$layout_info->extra_var->index_url->description = "로고를 클릭시에 이동할 홈 페이지 URL을 입력해 주세요.";
$layout_info->extra_var->background_image = new stdClass;
$layout_info->extra_var->background_image->group = "";
$layout_info->extra_var->background_image->title = "배경 이미지";
$layout_info->extra_var->background_image->type = "image";
$layout_info->extra_var->background_image->value = $vars->background_image;
$layout_info->extra_var->background_image->description = "배경 이미지를 사용하려면 등록해주세요.";
$layout_info->extra_var_count = "5";
$layout_info->menu_count = "1";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "상단 메뉴";
$layout_info->menu->main_menu->maxdepth = "3";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";
 $layout_info->header_script = "<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no\">
<script type=\"text/javascript\">
function openit() {
newWindow = window.open('http://www.aladin.co.kr/login/wlogin_popup.aspx', '로그인', 'width=780,height=444');
}
</script>

<link rel=\"stylesheet\" type=\"text/css\" href=\"http://auguster.dothome.co.kr/aladin/css/common.css\" media=\"all\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://auguster.dothome.co.kr/aladin/css/news_style.css\" media=\"all\">"; 