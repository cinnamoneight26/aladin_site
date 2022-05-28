<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin19_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin19_argument'}->createConditionValue();
if(!${'is_admin19_argument'}->isValid()) return ${'is_admin19_argument'}->getErrorMessage();
} else
${'is_admin19_argument'} = NULL;if(${'is_admin19_argument'} !== null) ${'is_admin19_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied20_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied20_argument'}->createConditionValue();
if(!${'is_denied20_argument'}->isValid()) return ${'is_denied20_argument'}->getErrorMessage();
} else
${'is_denied20_argument'} = NULL;if(${'is_denied20_argument'} !== null) ${'is_denied20_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls21_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls21_argument'}->createConditionValue();
if(!${'member_srls21_argument'}->isValid()) return ${'member_srls21_argument'}->getErrorMessage();
} else
${'member_srls21_argument'} = NULL;if(${'member_srls21_argument'} !== null) ${'member_srls21_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id22_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id22_argument'}->createConditionValue();
if(!${'s_user_id22_argument'}->isValid()) return ${'s_user_id22_argument'}->getErrorMessage();
} else
${'s_user_id22_argument'} = NULL;if(${'s_user_id22_argument'} !== null) ${'s_user_id22_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name23_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name23_argument'}->createConditionValue();
if(!${'s_user_name23_argument'}->isValid()) return ${'s_user_name23_argument'}->getErrorMessage();
} else
${'s_user_name23_argument'} = NULL;if(${'s_user_name23_argument'} !== null) ${'s_user_name23_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name24_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name24_argument'}->createConditionValue();
if(!${'s_nick_name24_argument'}->isValid()) return ${'s_nick_name24_argument'}->getErrorMessage();
} else
${'s_nick_name24_argument'} = NULL;if(${'s_nick_name24_argument'} !== null) ${'s_nick_name24_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name25_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name25_argument'}->createConditionValue();
if(!${'html_nick_name25_argument'}->isValid()) return ${'html_nick_name25_argument'}->getErrorMessage();
} else
${'html_nick_name25_argument'} = NULL;if(${'html_nick_name25_argument'} !== null) ${'html_nick_name25_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address26_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address26_argument'}->createConditionValue();
if(!${'s_email_address26_argument'}->isValid()) return ${'s_email_address26_argument'}->getErrorMessage();
} else
${'s_email_address26_argument'} = NULL;if(${'s_email_address26_argument'} !== null) ${'s_email_address26_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday27_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday27_argument'}->createConditionValue();
if(!${'s_birthday27_argument'}->isValid()) return ${'s_birthday27_argument'}->getErrorMessage();
} else
${'s_birthday27_argument'} = NULL;if(${'s_birthday27_argument'} !== null) ${'s_birthday27_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars28_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars28_argument'}->createConditionValue();
if(!${'s_extra_vars28_argument'}->isValid()) return ${'s_extra_vars28_argument'}->getErrorMessage();
} else
${'s_extra_vars28_argument'} = NULL;if(${'s_extra_vars28_argument'} !== null) ${'s_extra_vars28_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate29_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate29_argument'}->createConditionValue();
if(!${'s_regdate29_argument'}->isValid()) return ${'s_regdate29_argument'}->getErrorMessage();
} else
${'s_regdate29_argument'} = NULL;if(${'s_regdate29_argument'} !== null) ${'s_regdate29_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login30_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login30_argument'}->createConditionValue();
if(!${'s_last_login30_argument'}->isValid()) return ${'s_last_login30_argument'}->getErrorMessage();
} else
${'s_last_login30_argument'} = NULL;if(${'s_last_login30_argument'} !== null) ${'s_last_login30_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more31_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more31_argument'}->createConditionValue();
if(!${'s_regdate_more31_argument'}->isValid()) return ${'s_regdate_more31_argument'}->getErrorMessage();
} else
${'s_regdate_more31_argument'} = NULL;if(${'s_regdate_more31_argument'} !== null) ${'s_regdate_more31_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less32_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less32_argument'}->createConditionValue();
if(!${'s_regdate_less32_argument'}->isValid()) return ${'s_regdate_less32_argument'}->getErrorMessage();
} else
${'s_regdate_less32_argument'} = NULL;if(${'s_regdate_less32_argument'} !== null) ${'s_regdate_less32_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more33_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more33_argument'}->createConditionValue();
if(!${'s_last_login_more33_argument'}->isValid()) return ${'s_last_login_more33_argument'}->getErrorMessage();
} else
${'s_last_login_more33_argument'} = NULL;if(${'s_last_login_more33_argument'} !== null) ${'s_last_login_more33_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less34_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less34_argument'}->createConditionValue();
if(!${'s_last_login_less34_argument'}->isValid()) return ${'s_last_login_less34_argument'}->getErrorMessage();
} else
${'s_last_login_less34_argument'} = NULL;if(${'s_last_login_less34_argument'} !== null) ${'s_last_login_less34_argument'}->setColumnType('date');

${'page37_argument'} = new Argument('page', $args->{'page'});
${'page37_argument'}->ensureDefaultValue('1');
if(!${'page37_argument'}->isValid()) return ${'page37_argument'}->getErrorMessage();

${'page_count38_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count38_argument'}->ensureDefaultValue('10');
if(!${'page_count38_argument'}->isValid()) return ${'page_count38_argument'}->getErrorMessage();

${'list_count39_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count39_argument'}->ensureDefaultValue('20');
if(!${'list_count39_argument'}->isValid()) return ${'list_count39_argument'}->getErrorMessage();

${'sort_index35_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index35_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index35_argument'}->isValid()) return ${'sort_index35_argument'}->getErrorMessage();

${'sort_order36_argument'} = new SortArgument('sort_order36', $args->sort_order);
${'sort_order36_argument'}->ensureDefaultValue('asc');
if(!${'sort_order36_argument'}->isValid()) return ${'sort_order36_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin19_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied20_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls21_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id22_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name23_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name24_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name25_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address26_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday27_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars28_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate29_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login30_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more31_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less32_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more33_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less34_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index35_argument'}, $sort_order36_argument)
));
$query->setLimit(new Limit(${'list_count39_argument'}, ${'page37_argument'}, ${'page_count38_argument'}));
return $query; ?>