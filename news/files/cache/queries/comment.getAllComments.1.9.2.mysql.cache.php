<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAllComments");
$query->setAction("select");
$query->setPriority("");

${'document_srl18_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl18_argument'}->checkNotNull();
${'document_srl18_argument'}->createConditionValue();
if(!${'document_srl18_argument'}->isValid()) return ${'document_srl18_argument'}->getErrorMessage();
if(${'document_srl18_argument'} !== null) ${'document_srl18_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`comment_srl`')
,new SelectExpression('`module_srl`')
,new SelectExpression('`member_srl`')
,new SelectExpression('`document_srl`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl18_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>