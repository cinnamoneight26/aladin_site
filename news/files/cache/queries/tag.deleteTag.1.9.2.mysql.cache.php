<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl27_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl27_argument'}->checkFilter('number');
${'document_srl27_argument'}->checkNotNull();
${'document_srl27_argument'}->createConditionValue();
if(!${'document_srl27_argument'}->isValid()) return ${'document_srl27_argument'}->getErrorMessage();
if(${'document_srl27_argument'} !== null) ${'document_srl27_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl27_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>