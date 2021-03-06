<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItem");
$query->setAction("select");
$query->setPriority("");

${'menu_item_srl68_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl68_argument'}->checkFilter('number');
${'menu_item_srl68_argument'}->checkNotNull();
${'menu_item_srl68_argument'}->createConditionValue();
if(!${'menu_item_srl68_argument'}->isValid()) return ${'menu_item_srl68_argument'}->getErrorMessage();
if(${'menu_item_srl68_argument'} !== null) ${'menu_item_srl68_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl68_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>