<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl59_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl59_argument'}->isValid()) return ${'menu_srl59_argument'}->getErrorMessage();
} else
${'menu_srl59_argument'} = NULL;if(${'menu_srl59_argument'} !== null) ${'menu_srl59_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl60_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl60_argument'}->isValid()) return ${'parent_srl60_argument'}->getErrorMessage();
} else
${'parent_srl60_argument'} = NULL;if(${'parent_srl60_argument'} !== null) ${'parent_srl60_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name61_argument'} = new Argument('name', $args->{'name'});
if(!${'name61_argument'}->isValid()) return ${'name61_argument'}->getErrorMessage();
} else
${'name61_argument'} = NULL;if(${'name61_argument'} !== null) ${'name61_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc62_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc62_argument'}->isValid()) return ${'desc62_argument'}->getErrorMessage();
} else
${'desc62_argument'} = NULL;if(${'desc62_argument'} !== null) ${'desc62_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url63_argument'} = new Argument('url', $args->{'url'});
if(!${'url63_argument'}->isValid()) return ${'url63_argument'}->getErrorMessage();
} else
${'url63_argument'} = NULL;if(${'url63_argument'} !== null) ${'url63_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut64_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut64_argument'}->isValid()) return ${'is_shortcut64_argument'}->getErrorMessage();
} else
${'is_shortcut64_argument'} = NULL;if(${'is_shortcut64_argument'} !== null) ${'is_shortcut64_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window65_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window65_argument'}->isValid()) return ${'open_window65_argument'}->getErrorMessage();
} else
${'open_window65_argument'} = NULL;if(${'open_window65_argument'} !== null) ${'open_window65_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand66_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand66_argument'}->isValid()) return ${'expand66_argument'}->getErrorMessage();
} else
${'expand66_argument'} = NULL;if(${'expand66_argument'} !== null) ${'expand66_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn67_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn67_argument'}->isValid()) return ${'normal_btn67_argument'}->getErrorMessage();
} else
${'normal_btn67_argument'} = NULL;if(${'normal_btn67_argument'} !== null) ${'normal_btn67_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn68_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn68_argument'}->isValid()) return ${'hover_btn68_argument'}->getErrorMessage();
} else
${'hover_btn68_argument'} = NULL;if(${'hover_btn68_argument'} !== null) ${'hover_btn68_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn69_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn69_argument'}->isValid()) return ${'active_btn69_argument'}->getErrorMessage();
} else
${'active_btn69_argument'} = NULL;if(${'active_btn69_argument'} !== null) ${'active_btn69_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls70_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls70_argument'}->isValid()) return ${'group_srls70_argument'}->getErrorMessage();
} else
${'group_srls70_argument'} = NULL;if(${'group_srls70_argument'} !== null) ${'group_srls70_argument'}->setColumnType('text');

${'menu_item_srl71_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl71_argument'}->checkFilter('number');
${'menu_item_srl71_argument'}->checkNotNull();
${'menu_item_srl71_argument'}->createConditionValue();
if(!${'menu_item_srl71_argument'}->isValid()) return ${'menu_item_srl71_argument'}->getErrorMessage();
if(${'menu_item_srl71_argument'} !== null) ${'menu_item_srl71_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl59_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl60_argument'})
,new UpdateExpression('`name`', ${'name61_argument'})
,new UpdateExpression('`desc`', ${'desc62_argument'})
,new UpdateExpression('`url`', ${'url63_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut64_argument'})
,new UpdateExpression('`open_window`', ${'open_window65_argument'})
,new UpdateExpression('`expand`', ${'expand66_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn67_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn68_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn69_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls70_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl71_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>