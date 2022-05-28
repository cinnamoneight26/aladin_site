<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act60_argument'} = new Argument('act', $args->{'act'});
${'act60_argument'}->checkNotNull();
if(!${'act60_argument'}->isValid()) return ${'act60_argument'}->getErrorMessage();
if(${'act60_argument'} !== null) ${'act60_argument'}->setColumnType('varchar');

${'module61_argument'} = new Argument('module', $args->{'module'});
${'module61_argument'}->checkNotNull();
if(!${'module61_argument'}->isValid()) return ${'module61_argument'}->getErrorMessage();
if(${'module61_argument'} !== null) ${'module61_argument'}->setColumnType('varchar');

${'type62_argument'} = new Argument('type', $args->{'type'});
${'type62_argument'}->checkNotNull();
if(!${'type62_argument'}->isValid()) return ${'type62_argument'}->getErrorMessage();
if(${'type62_argument'} !== null) ${'type62_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act60_argument'})
,new InsertExpression('`module`', ${'module61_argument'})
,new InsertExpression('`type`', ${'type62_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>