<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid70_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid70_argument'}->createConditionValue();
if(!${'mid70_argument'}->isValid()) return ${'mid70_argument'}->getErrorMessage();
} else
${'mid70_argument'} = NULL;if(${'mid70_argument'} !== null) ${'mid70_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl71_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl71_argument'}->createConditionValue();
if(!${'module_srl71_argument'}->isValid()) return ${'module_srl71_argument'}->getErrorMessage();
} else
${'module_srl71_argument'} = NULL;if(${'module_srl71_argument'} !== null) ${'module_srl71_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl72_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl72_argument'}->createConditionValue();
if(!${'site_srl72_argument'}->isValid()) return ${'site_srl72_argument'}->getErrorMessage();
} else
${'site_srl72_argument'} = NULL;if(${'site_srl72_argument'} !== null) ${'site_srl72_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid70_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl71_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl72_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>