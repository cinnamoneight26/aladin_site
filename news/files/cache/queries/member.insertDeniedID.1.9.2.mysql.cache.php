<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id47_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id47_argument'}->checkNotNull();
if(!${'user_id47_argument'}->isValid()) return ${'user_id47_argument'}->getErrorMessage();
if(${'user_id47_argument'} !== null) ${'user_id47_argument'}->setColumnType('varchar');

${'regdate48_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate48_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate48_argument'}->isValid()) return ${'regdate48_argument'}->getErrorMessage();
if(${'regdate48_argument'} !== null) ${'regdate48_argument'}->setColumnType('date');

${'description49_argument'} = new Argument('description', $args->{'description'});
${'description49_argument'}->ensureDefaultValue('');
if(!${'description49_argument'}->isValid()) return ${'description49_argument'}->getErrorMessage();
if(${'description49_argument'} !== null) ${'description49_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order50_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order50_argument'}->isValid()) return ${'list_order50_argument'}->getErrorMessage();
} else
${'list_order50_argument'} = NULL;if(${'list_order50_argument'} !== null) ${'list_order50_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id47_argument'})
,new InsertExpression('`regdate`', ${'regdate48_argument'})
,new InsertExpression('`description`', ${'description49_argument'})
,new InsertExpression('`list_order`', ${'list_order50_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>