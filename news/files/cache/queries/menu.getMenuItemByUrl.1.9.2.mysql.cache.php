<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url56_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url56_argument'}->checkNotNull();
${'url56_argument'}->createConditionValue();
if(!${'url56_argument'}->isValid()) return ${'url56_argument'}->getErrorMessage();
if(${'url56_argument'} !== null) ${'url56_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut57_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut57_argument'}->createConditionValue();
if(!${'is_shortcut57_argument'}->isValid()) return ${'is_shortcut57_argument'}->getErrorMessage();
} else
${'is_shortcut57_argument'} = NULL;if(${'is_shortcut57_argument'} !== null) ${'is_shortcut57_argument'}->setColumnType('char');

${'site_srl58_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl58_argument'}->checkNotNull();
${'site_srl58_argument'}->createConditionValue();
if(!${'site_srl58_argument'}->isValid()) return ${'site_srl58_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url56_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut57_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl58_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>