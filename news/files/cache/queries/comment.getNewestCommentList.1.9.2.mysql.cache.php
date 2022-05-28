<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status42_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status42_argument'}->createConditionValue();
if(!${'status42_argument'}->isValid()) return ${'status42_argument'}->getErrorMessage();
} else
${'status42_argument'} = NULL;if(${'status42_argument'} !== null) ${'status42_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl43_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl43_argument'}->checkFilter('number');
${'module_srl43_argument'}->createConditionValue();
if(!${'module_srl43_argument'}->isValid()) return ${'module_srl43_argument'}->getErrorMessage();
} else
${'module_srl43_argument'} = NULL;if(${'module_srl43_argument'} !== null) ${'module_srl43_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl44_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl44_argument'}->checkFilter('number');
${'document_srl44_argument'}->createConditionValue();
if(!${'document_srl44_argument'}->isValid()) return ${'document_srl44_argument'}->getErrorMessage();
} else
${'document_srl44_argument'} = NULL;if(${'document_srl44_argument'} !== null) ${'document_srl44_argument'}->setColumnType('number');

${'list_count46_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count46_argument'}->ensureDefaultValue('20');
if(!${'list_count46_argument'}->isValid()) return ${'list_count46_argument'}->getErrorMessage();

${'sort_index45_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index45_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index45_argument'}->isValid()) return ${'sort_index45_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status42_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl43_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl44_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index45_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count46_argument'}));
return $query; ?>