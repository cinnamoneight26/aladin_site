<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl63_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl63_argument'}->checkFilter('number');
${'menu_srl63_argument'}->checkNotNull();
if(!${'menu_srl63_argument'}->isValid()) return ${'menu_srl63_argument'}->getErrorMessage();
if(${'menu_srl63_argument'} !== null) ${'menu_srl63_argument'}->setColumnType('number');

${'site_srl64_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl64_argument'}->checkFilter('number');
${'site_srl64_argument'}->ensureDefaultValue('0');
${'site_srl64_argument'}->checkNotNull();
if(!${'site_srl64_argument'}->isValid()) return ${'site_srl64_argument'}->getErrorMessage();
if(${'site_srl64_argument'} !== null) ${'site_srl64_argument'}->setColumnType('number');

${'title65_argument'} = new Argument('title', $args->{'title'});
${'title65_argument'}->checkNotNull();
if(!${'title65_argument'}->isValid()) return ${'title65_argument'}->getErrorMessage();
if(${'title65_argument'} !== null) ${'title65_argument'}->setColumnType('varchar');

${'listorder66_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder66_argument'}->checkNotNull();
if(!${'listorder66_argument'}->isValid()) return ${'listorder66_argument'}->getErrorMessage();
if(${'listorder66_argument'} !== null) ${'listorder66_argument'}->setColumnType('number');

${'regdate67_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate67_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate67_argument'}->isValid()) return ${'regdate67_argument'}->getErrorMessage();
if(${'regdate67_argument'} !== null) ${'regdate67_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl63_argument'})
,new InsertExpression('`site_srl`', ${'site_srl64_argument'})
,new InsertExpression('`title`', ${'title65_argument'})
,new InsertExpression('`listorder`', ${'listorder66_argument'})
,new InsertExpression('`regdate`', ${'regdate67_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>