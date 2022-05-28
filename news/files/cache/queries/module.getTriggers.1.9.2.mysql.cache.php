<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name40_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name40_argument'}->createConditionValue();
if(!${'trigger_name40_argument'}->isValid()) return ${'trigger_name40_argument'}->getErrorMessage();
} else
${'trigger_name40_argument'} = NULL;if(${'trigger_name40_argument'} !== null) ${'trigger_name40_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position41_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position41_argument'}->createConditionValue();
if(!${'called_position41_argument'}->isValid()) return ${'called_position41_argument'}->getErrorMessage();
} else
${'called_position41_argument'} = NULL;if(${'called_position41_argument'} !== null) ${'called_position41_argument'}->setColumnType('varchar');

${'46_argument'} = new Argument('', $args->{''});
${'46_argument'}->ensureDefaultValue('called_method');
if(!${'46_argument'}->isValid()) return ${'46_argument'}->getErrorMessage();

${'45_argument'} = new Argument('', $args->{''});
${'45_argument'}->ensureDefaultValue('type');
if(!${'45_argument'}->isValid()) return ${'45_argument'}->getErrorMessage();

${'44_argument'} = new Argument('', $args->{''});
${'44_argument'}->ensureDefaultValue('module');
if(!${'44_argument'}->isValid()) return ${'44_argument'}->getErrorMessage();

${'43_argument'} = new Argument('', $args->{''});
${'43_argument'}->ensureDefaultValue('called_position');
if(!${'43_argument'}->isValid()) return ${'43_argument'}->getErrorMessage();

${'42_argument'} = new Argument('', $args->{''});
${'42_argument'}->ensureDefaultValue('trigger_name');
if(!${'42_argument'}->isValid()) return ${'42_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name40_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position41_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'42_argument'}, "asc")
,new OrderByColumn(${'43_argument'}, "asc")
,new OrderByColumn(${'44_argument'}, "asc")
,new OrderByColumn(${'45_argument'}, "asc")
,new OrderByColumn(${'46_argument'}, "asc")
));
$query->setLimit();
return $query; ?>