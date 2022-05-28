<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title101_argument'} = new Argument('title', $args->{'title'});
if(!${'title101_argument'}->isValid()) return ${'title101_argument'}->getErrorMessage();
} else
${'title101_argument'} = NULL;if(${'title101_argument'} !== null) ${'title101_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars102_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars102_argument'}->isValid()) return ${'extra_vars102_argument'}->getErrorMessage();
} else
${'extra_vars102_argument'} = NULL;if(${'extra_vars102_argument'} !== null) ${'extra_vars102_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout103_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout103_argument'}->isValid()) return ${'layout103_argument'}->getErrorMessage();
} else
${'layout103_argument'} = NULL;if(${'layout103_argument'} !== null) ${'layout103_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path104_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path104_argument'}->isValid()) return ${'layout_path104_argument'}->getErrorMessage();
} else
${'layout_path104_argument'} = NULL;if(${'layout_path104_argument'} !== null) ${'layout_path104_argument'}->setColumnType('varchar');

${'layout_srl105_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl105_argument'}->checkFilter('number');
${'layout_srl105_argument'}->checkNotNull();
${'layout_srl105_argument'}->createConditionValue();
if(!${'layout_srl105_argument'}->isValid()) return ${'layout_srl105_argument'}->getErrorMessage();
if(${'layout_srl105_argument'} !== null) ${'layout_srl105_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title101_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars102_argument'})
,new UpdateExpression('`layout`', ${'layout103_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path104_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl105_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>