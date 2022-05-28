<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->regDate)) {
${'regDate5_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate5_argument'}->createConditionValue();
if(!${'regDate5_argument'}->isValid()) return ${'regDate5_argument'}->getErrorMessage();
} else
${'regDate5_argument'} = NULL;if(${'regDate5_argument'} !== null) ${'regDate5_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$regDate5_argument,"like_prefix")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>