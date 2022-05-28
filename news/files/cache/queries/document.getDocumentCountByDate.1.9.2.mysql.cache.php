<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList6_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList6_argument'}->createConditionValue();
if(!${'moduleSrlList6_argument'}->isValid()) return ${'moduleSrlList6_argument'}->getErrorMessage();
} else
${'moduleSrlList6_argument'} = NULL;if(${'moduleSrlList6_argument'} !== null) ${'moduleSrlList6_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate7_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate7_argument'}->createConditionValue();
if(!${'regDate7_argument'}->isValid()) return ${'regDate7_argument'}->getErrorMessage();
} else
${'regDate7_argument'} = NULL;if(${'regDate7_argument'} !== null) ${'regDate7_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList8_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList8_argument'}->createConditionValue();
if(!${'statusList8_argument'}->isValid()) return ${'statusList8_argument'}->getErrorMessage();
} else
${'statusList8_argument'} = NULL;if(${'statusList8_argument'} !== null) ${'statusList8_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList6_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate7_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList8_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>