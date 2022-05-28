<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl92_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl92_argument'}->checkFilter('number');
${'layout_srl92_argument'}->checkNotNull();
if(!${'layout_srl92_argument'}->isValid()) return ${'layout_srl92_argument'}->getErrorMessage();
if(${'layout_srl92_argument'} !== null) ${'layout_srl92_argument'}->setColumnType('number');

${'site_srl93_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl93_argument'}->checkFilter('number');
${'site_srl93_argument'}->ensureDefaultValue('0');
${'site_srl93_argument'}->checkNotNull();
if(!${'site_srl93_argument'}->isValid()) return ${'site_srl93_argument'}->getErrorMessage();
if(${'site_srl93_argument'} !== null) ${'site_srl93_argument'}->setColumnType('number');

${'layout94_argument'} = new Argument('layout', $args->{'layout'});
${'layout94_argument'}->checkNotNull();
if(!${'layout94_argument'}->isValid()) return ${'layout94_argument'}->getErrorMessage();
if(${'layout94_argument'} !== null) ${'layout94_argument'}->setColumnType('varchar');

${'title95_argument'} = new Argument('title', $args->{'title'});
${'title95_argument'}->checkNotNull();
if(!${'title95_argument'}->isValid()) return ${'title95_argument'}->getErrorMessage();
if(${'title95_argument'} !== null) ${'title95_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl96_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl96_argument'}->isValid()) return ${'module_srl96_argument'}->getErrorMessage();
} else
${'module_srl96_argument'} = NULL;if(${'module_srl96_argument'} !== null) ${'module_srl96_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars97_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars97_argument'}->isValid()) return ${'extra_vars97_argument'}->getErrorMessage();
} else
${'extra_vars97_argument'} = NULL;if(${'extra_vars97_argument'} !== null) ${'extra_vars97_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path98_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path98_argument'}->isValid()) return ${'layout_path98_argument'}->getErrorMessage();
} else
${'layout_path98_argument'} = NULL;if(${'layout_path98_argument'} !== null) ${'layout_path98_argument'}->setColumnType('varchar');

${'regdate99_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate99_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate99_argument'}->isValid()) return ${'regdate99_argument'}->getErrorMessage();
if(${'regdate99_argument'} !== null) ${'regdate99_argument'}->setColumnType('date');

${'layout_type100_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type100_argument'}->ensureDefaultValue('P');
if(!${'layout_type100_argument'}->isValid()) return ${'layout_type100_argument'}->getErrorMessage();
if(${'layout_type100_argument'} !== null) ${'layout_type100_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl92_argument'})
,new InsertExpression('`site_srl`', ${'site_srl93_argument'})
,new InsertExpression('`layout`', ${'layout94_argument'})
,new InsertExpression('`title`', ${'title95_argument'})
,new InsertExpression('`module_srl`', ${'module_srl96_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars97_argument'})
,new InsertExpression('`layout_path`', ${'layout_path98_argument'})
,new InsertExpression('`regdate`', ${'regdate99_argument'})
,new InsertExpression('`layout_type`', ${'layout_type100_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>