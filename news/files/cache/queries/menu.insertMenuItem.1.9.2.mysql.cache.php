<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl74_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl74_argument'}->checkFilter('number');
${'menu_item_srl74_argument'}->checkNotNull();
if(!${'menu_item_srl74_argument'}->isValid()) return ${'menu_item_srl74_argument'}->getErrorMessage();
if(${'menu_item_srl74_argument'} !== null) ${'menu_item_srl74_argument'}->setColumnType('number');

${'parent_srl75_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl75_argument'}->checkFilter('number');
${'parent_srl75_argument'}->ensureDefaultValue('0');
if(!${'parent_srl75_argument'}->isValid()) return ${'parent_srl75_argument'}->getErrorMessage();
if(${'parent_srl75_argument'} !== null) ${'parent_srl75_argument'}->setColumnType('number');

${'menu_srl76_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl76_argument'}->checkFilter('number');
${'menu_srl76_argument'}->checkNotNull();
if(!${'menu_srl76_argument'}->isValid()) return ${'menu_srl76_argument'}->getErrorMessage();
if(${'menu_srl76_argument'} !== null) ${'menu_srl76_argument'}->setColumnType('number');

${'name77_argument'} = new Argument('name', $args->{'name'});
${'name77_argument'}->checkNotNull();
if(!${'name77_argument'}->isValid()) return ${'name77_argument'}->getErrorMessage();
if(${'name77_argument'} !== null) ${'name77_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc78_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc78_argument'}->isValid()) return ${'desc78_argument'}->getErrorMessage();
} else
${'desc78_argument'} = NULL;if(${'desc78_argument'} !== null) ${'desc78_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url79_argument'} = new Argument('url', $args->{'url'});
if(!${'url79_argument'}->isValid()) return ${'url79_argument'}->getErrorMessage();
} else
${'url79_argument'} = NULL;if(${'url79_argument'} !== null) ${'url79_argument'}->setColumnType('varchar');

${'is_shortcut80_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut80_argument'}->ensureDefaultValue('N');
${'is_shortcut80_argument'}->checkNotNull();
if(!${'is_shortcut80_argument'}->isValid()) return ${'is_shortcut80_argument'}->getErrorMessage();
if(${'is_shortcut80_argument'} !== null) ${'is_shortcut80_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window81_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window81_argument'}->isValid()) return ${'open_window81_argument'}->getErrorMessage();
} else
${'open_window81_argument'} = NULL;if(${'open_window81_argument'} !== null) ${'open_window81_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand82_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand82_argument'}->isValid()) return ${'expand82_argument'}->getErrorMessage();
} else
${'expand82_argument'} = NULL;if(${'expand82_argument'} !== null) ${'expand82_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn83_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn83_argument'}->isValid()) return ${'normal_btn83_argument'}->getErrorMessage();
} else
${'normal_btn83_argument'} = NULL;if(${'normal_btn83_argument'} !== null) ${'normal_btn83_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn84_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn84_argument'}->isValid()) return ${'hover_btn84_argument'}->getErrorMessage();
} else
${'hover_btn84_argument'} = NULL;if(${'hover_btn84_argument'} !== null) ${'hover_btn84_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn85_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn85_argument'}->isValid()) return ${'active_btn85_argument'}->getErrorMessage();
} else
${'active_btn85_argument'} = NULL;if(${'active_btn85_argument'} !== null) ${'active_btn85_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls86_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls86_argument'}->isValid()) return ${'group_srls86_argument'}->getErrorMessage();
} else
${'group_srls86_argument'} = NULL;if(${'group_srls86_argument'} !== null) ${'group_srls86_argument'}->setColumnType('text');

${'listorder87_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder87_argument'}->checkNotNull();
if(!${'listorder87_argument'}->isValid()) return ${'listorder87_argument'}->getErrorMessage();
if(${'listorder87_argument'} !== null) ${'listorder87_argument'}->setColumnType('number');

${'regdate88_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate88_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate88_argument'}->isValid()) return ${'regdate88_argument'}->getErrorMessage();
if(${'regdate88_argument'} !== null) ${'regdate88_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl74_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl75_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl76_argument'})
,new InsertExpression('`name`', ${'name77_argument'})
,new InsertExpression('`desc`', ${'desc78_argument'})
,new InsertExpression('`url`', ${'url79_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut80_argument'})
,new InsertExpression('`open_window`', ${'open_window81_argument'})
,new InsertExpression('`expand`', ${'expand82_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn83_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn84_argument'})
,new InsertExpression('`active_btn`', ${'active_btn85_argument'})
,new InsertExpression('`group_srls`', ${'group_srls86_argument'})
,new InsertExpression('`listorder`', ${'listorder87_argument'})
,new InsertExpression('`regdate`', ${'regdate88_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>