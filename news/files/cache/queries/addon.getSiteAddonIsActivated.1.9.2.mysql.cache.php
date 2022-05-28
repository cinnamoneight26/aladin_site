<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl47_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl47_argument'}->checkNotNull();
${'site_srl47_argument'}->createConditionValue();
if(!${'site_srl47_argument'}->isValid()) return ${'site_srl47_argument'}->getErrorMessage();
if(${'site_srl47_argument'} !== null) ${'site_srl47_argument'}->setColumnType('number');

${'addon48_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon48_argument'}->checkNotNull();
${'addon48_argument'}->createConditionValue();
if(!${'addon48_argument'}->isValid()) return ${'addon48_argument'}->getErrorMessage();
if(${'addon48_argument'} !== null) ${'addon48_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl47_argument,"equal")
,new ConditionWithArgument('`addon`',$addon48_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>