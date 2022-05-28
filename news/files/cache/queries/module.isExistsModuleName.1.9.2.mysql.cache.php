<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl32_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl32_argument'}->ensureDefaultValue('0');
${'site_srl32_argument'}->checkNotNull();
${'site_srl32_argument'}->createConditionValue();
if(!${'site_srl32_argument'}->isValid()) return ${'site_srl32_argument'}->getErrorMessage();
if(${'site_srl32_argument'} !== null) ${'site_srl32_argument'}->setColumnType('number');

${'mid33_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid33_argument'}->checkNotNull();
${'mid33_argument'}->createConditionValue();
if(!${'mid33_argument'}->isValid()) return ${'mid33_argument'}->getErrorMessage();
if(${'mid33_argument'} !== null) ${'mid33_argument'}->setColumnType('varchar');

${'module_srl34_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl34_argument'}->ensureDefaultValue('0');
${'module_srl34_argument'}->checkNotNull();
${'module_srl34_argument'}->createConditionValue();
if(!${'module_srl34_argument'}->isValid()) return ${'module_srl34_argument'}->getErrorMessage();
if(${'module_srl34_argument'} !== null) ${'module_srl34_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl32_argument,"equal")
,new ConditionWithArgument('`mid`',$mid33_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl34_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>