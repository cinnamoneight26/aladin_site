<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl108_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl108_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl108_argument'}->isValid()) return ${'spamfilter_log_srl108_argument'}->getErrorMessage();
if(${'spamfilter_log_srl108_argument'} !== null) ${'spamfilter_log_srl108_argument'}->setColumnType('number');

${'ipaddress109_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress109_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress109_argument'}->isValid()) return ${'ipaddress109_argument'}->getErrorMessage();
if(${'ipaddress109_argument'} !== null) ${'ipaddress109_argument'}->setColumnType('varchar');

${'regdate110_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate110_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate110_argument'}->isValid()) return ${'regdate110_argument'}->getErrorMessage();
if(${'regdate110_argument'} !== null) ${'regdate110_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl108_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress109_argument'})
,new InsertExpression('`regdate`', ${'regdate110_argument'})
));
$query->setTables(array(
new Table('`xe_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>