<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid76_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid76_argument'}->ensureDefaultValue('Y');
${'isvalid76_argument'}->checkNotNull();
if(!${'isvalid76_argument'}->isValid()) return ${'isvalid76_argument'}->getErrorMessage();
if(${'isvalid76_argument'} !== null) ${'isvalid76_argument'}->setColumnType('char');

${'upload_target_srl77_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl77_argument'}->checkFilter('number');
${'upload_target_srl77_argument'}->checkNotNull();
${'upload_target_srl77_argument'}->createConditionValue();
if(!${'upload_target_srl77_argument'}->isValid()) return ${'upload_target_srl77_argument'}->getErrorMessage();
if(${'upload_target_srl77_argument'} !== null) ${'upload_target_srl77_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid76_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl77_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>