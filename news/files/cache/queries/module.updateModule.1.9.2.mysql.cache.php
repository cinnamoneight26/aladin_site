<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module35_argument'} = new Argument('module', $args->{'module'});
${'module35_argument'}->checkNotNull();
if(!${'module35_argument'}->isValid()) return ${'module35_argument'}->getErrorMessage();
if(${'module35_argument'} !== null) ${'module35_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl36_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl36_argument'}->isValid()) return ${'module_category_srl36_argument'}->getErrorMessage();
} else
${'module_category_srl36_argument'} = NULL;if(${'module_category_srl36_argument'} !== null) ${'module_category_srl36_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl37_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl37_argument'}->isValid()) return ${'layout_srl37_argument'}->getErrorMessage();
} else
${'layout_srl37_argument'} = NULL;if(${'layout_srl37_argument'} !== null) ${'layout_srl37_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin38_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin38_argument'}->isValid()) return ${'skin38_argument'}->getErrorMessage();
} else
${'skin38_argument'} = NULL;if(${'skin38_argument'} !== null) ${'skin38_argument'}->setColumnType('varchar');

${'is_skin_fix39_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix39_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix39_argument'}->isValid()) return ${'is_skin_fix39_argument'}->getErrorMessage();
if(${'is_skin_fix39_argument'} !== null) ${'is_skin_fix39_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin40_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin40_argument'}->isValid()) return ${'mskin40_argument'}->getErrorMessage();
} else
${'mskin40_argument'} = NULL;if(${'mskin40_argument'} !== null) ${'mskin40_argument'}->setColumnType('varchar');

${'is_mskin_fix41_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix41_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix41_argument'}->isValid()) return ${'is_mskin_fix41_argument'}->getErrorMessage();
if(${'is_mskin_fix41_argument'} !== null) ${'is_mskin_fix41_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl42_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl42_argument'}->checkFilter('number');
if(!${'menu_srl42_argument'}->isValid()) return ${'menu_srl42_argument'}->getErrorMessage();
} else
${'menu_srl42_argument'} = NULL;if(${'menu_srl42_argument'} !== null) ${'menu_srl42_argument'}->setColumnType('number');

${'mid43_argument'} = new Argument('mid', $args->{'mid'});
${'mid43_argument'}->checkNotNull();
if(!${'mid43_argument'}->isValid()) return ${'mid43_argument'}->getErrorMessage();
if(${'mid43_argument'} !== null) ${'mid43_argument'}->setColumnType('varchar');

${'browser_title44_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title44_argument'}->checkNotNull();
if(!${'browser_title44_argument'}->isValid()) return ${'browser_title44_argument'}->getErrorMessage();
if(${'browser_title44_argument'} !== null) ${'browser_title44_argument'}->setColumnType('varchar');

${'description45_argument'} = new Argument('description', $args->{'description'});
${'description45_argument'}->ensureDefaultValue('');
if(!${'description45_argument'}->isValid()) return ${'description45_argument'}->getErrorMessage();
if(${'description45_argument'} !== null) ${'description45_argument'}->setColumnType('text');

${'is_default46_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default46_argument'}->ensureDefaultValue('N');
${'is_default46_argument'}->checkNotNull();
if(!${'is_default46_argument'}->isValid()) return ${'is_default46_argument'}->getErrorMessage();
if(${'is_default46_argument'} !== null) ${'is_default46_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content47_argument'} = new Argument('content', $args->{'content'});
if(!${'content47_argument'}->isValid()) return ${'content47_argument'}->getErrorMessage();
} else
${'content47_argument'} = NULL;if(${'content47_argument'} !== null) ${'content47_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent48_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent48_argument'}->isValid()) return ${'mcontent48_argument'}->getErrorMessage();
} else
${'mcontent48_argument'} = NULL;if(${'mcontent48_argument'} !== null) ${'mcontent48_argument'}->setColumnType('bigtext');

${'open_rss49_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss49_argument'}->ensureDefaultValue('Y');
${'open_rss49_argument'}->checkNotNull();
if(!${'open_rss49_argument'}->isValid()) return ${'open_rss49_argument'}->getErrorMessage();
if(${'open_rss49_argument'} !== null) ${'open_rss49_argument'}->setColumnType('char');

${'header_text50_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text50_argument'}->ensureDefaultValue('');
if(!${'header_text50_argument'}->isValid()) return ${'header_text50_argument'}->getErrorMessage();
if(${'header_text50_argument'} !== null) ${'header_text50_argument'}->setColumnType('text');

${'footer_text51_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text51_argument'}->ensureDefaultValue('');
if(!${'footer_text51_argument'}->isValid()) return ${'footer_text51_argument'}->getErrorMessage();
if(${'footer_text51_argument'} !== null) ${'footer_text51_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl52_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl52_argument'}->isValid()) return ${'mlayout_srl52_argument'}->getErrorMessage();
} else
${'mlayout_srl52_argument'} = NULL;if(${'mlayout_srl52_argument'} !== null) ${'mlayout_srl52_argument'}->setColumnType('number');

${'use_mobile53_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile53_argument'}->ensureDefaultValue('N');
if(!${'use_mobile53_argument'}->isValid()) return ${'use_mobile53_argument'}->getErrorMessage();
if(${'use_mobile53_argument'} !== null) ${'use_mobile53_argument'}->setColumnType('char');

${'site_srl54_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl54_argument'}->checkFilter('number');
${'site_srl54_argument'}->ensureDefaultValue('0');
${'site_srl54_argument'}->checkNotNull();
${'site_srl54_argument'}->createConditionValue();
if(!${'site_srl54_argument'}->isValid()) return ${'site_srl54_argument'}->getErrorMessage();
if(${'site_srl54_argument'} !== null) ${'site_srl54_argument'}->setColumnType('number');

${'module_srl55_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl55_argument'}->checkFilter('number');
${'module_srl55_argument'}->checkNotNull();
${'module_srl55_argument'}->createConditionValue();
if(!${'module_srl55_argument'}->isValid()) return ${'module_srl55_argument'}->getErrorMessage();
if(${'module_srl55_argument'} !== null) ${'module_srl55_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module35_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl36_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl37_argument'})
,new UpdateExpression('`skin`', ${'skin38_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix39_argument'})
,new UpdateExpression('`mskin`', ${'mskin40_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix41_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl42_argument'})
,new UpdateExpression('`mid`', ${'mid43_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title44_argument'})
,new UpdateExpression('`description`', ${'description45_argument'})
,new UpdateExpression('`is_default`', ${'is_default46_argument'})
,new UpdateExpression('`content`', ${'content47_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent48_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss49_argument'})
,new UpdateExpression('`header_text`', ${'header_text50_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text51_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl52_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile53_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl54_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl55_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>