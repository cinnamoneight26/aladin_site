<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl73_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl73_argument'}->checkFilter('number');
${'module_srl73_argument'}->checkNotNull();
if(!${'module_srl73_argument'}->isValid()) return ${'module_srl73_argument'}->getErrorMessage();
if(${'module_srl73_argument'} !== null) ${'module_srl73_argument'}->setColumnType('number');

${'name74_argument'} = new Argument('name', $args->{'name'});
${'name74_argument'}->checkNotNull();
if(!${'name74_argument'}->isValid()) return ${'name74_argument'}->getErrorMessage();
if(${'name74_argument'} !== null) ${'name74_argument'}->setColumnType('varchar');

${'value75_argument'} = new Argument('value', $args->{'value'});
${'value75_argument'}->checkNotNull();
if(!${'value75_argument'}->isValid()) return ${'value75_argument'}->getErrorMessage();
if(${'value75_argument'} !== null) ${'value75_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl73_argument'})
,new InsertExpression('`name`', ${'name74_argument'})
,new InsertExpression('`value`', ${'value75_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>