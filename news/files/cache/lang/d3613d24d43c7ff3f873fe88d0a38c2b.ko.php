<?php
$lang->cmd_comment_do='이 댓글을';
$lang->comment_list='댓글 목록';
$lang->cmd_toggle_checked_comment='선택항목 반전';
$lang->cmd_delete_checked_comment='선택항목 삭제';
$lang->trash='휴지통';
$lang->cmd_trash='휴지통으로 이동';
$lang->comment_count='댓글 수';
$lang->about_comment_count='댓글을 정해진 수 만큼만 표시하고, 그 이상일 경우 페이지 번호를 표시해서 이동할 수 있게 합니다.';
$lang->msg_cart_is_null='삭제할 글을 선택해주세요.';
$lang->msg_checked_comment_is_deleted='%d개의 댓글을 삭제했습니다.';
if(!is_array($lang->search_target_list)){
	$lang->search_target_list = array();
}
$lang->search_target_list['content']='내용';
$lang->search_target_list['user_id']='아이디';
$lang->search_target_list['user_name']='이름';
$lang->search_target_list['nick_name']='닉네임';
$lang->search_target_list['member_srl']='회원 번호';
$lang->search_target_list['email_address']='이메일 주소';
$lang->search_target_list['homepage']='홈페이지';
$lang->search_target_list['regdate']='등록일';
$lang->search_target_list['last_update']='최근수정일 ';
$lang->search_target_list['ipaddress']='IP 주소';
$lang->search_target_list['is_secret']='상태';
$lang->no_text_comment='글자가 없는 댓글입니다.';
if(!is_array($lang->secret_name_list)){
	$lang->secret_name_list = array();
}
$lang->secret_name_list['Y']='비밀';
$lang->secret_name_list['N']='공개';
if(!is_array($lang->published_name_list)){
	$lang->published_name_list = array();
}
$lang->published_name_list['Y']='발행완료';
$lang->published_name_list['N']='발행대기';
$lang->comment_manager='선택한 댓글 관리';
$lang->selected_comment='선택한 댓글';
$lang->cmd_comment_validation='승인 후 공개';
$lang->about_comment_validation='관리자 승인 후 댓글을 공개합니다.';
$lang->published='발행 상태';
$lang->cmd_publish='발행';
$lang->cmd_unpublish='발행 중지';
$lang->select_module='모듈 선택';
$lang->page='페이지';
$lang->msg_not_selected_comment='선택한 댓글이 없습니다.';
