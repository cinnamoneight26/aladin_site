<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl51_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl51_argument'}->checkNotNull();
if(!${'site_srl51_argument'}->isValid()) return ${'site_srl51_argument'}->getErrorMessage();
if(${'site_srl51_argument'} !== null) ${'site_srl51_argument'}->setColumnType('number');

${'addon52_argument'} = new Argument('addon', $args->{'addon'});
${'addon52_argument'}->checkNotNull();
if(!${'addon52_argument'}->isValid()) return ${'addon52_argument'}->getErrorMessage();
if(${'addon52_argument'} !== null) ${'addon52_argument'}->setColumnType('varchar');

${'is_used53_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used53_argument'}->ensureDefaultValue('N');
${'is_used53_argument'}->checkNotNull();
if(!${'is_used53_argument'}->isValid()) return ${'is_used53_argument'}->getErrorMessage();
if(${'is_used53_argument'} !== null) ${'is_used53_argument'}->setColumnType('char');

${'is_used_m54_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m54_argument'}->ensureDefaultValue('N');
if(!${'is_used_m54_argument'}->isValid()) return ${'is_used_m54_argument'}->getErrorMessage();
if(${'is_used_m54_argument'} !== null) ${'is_used_m54_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars55_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars55_argument'}->isValid()) return ${'extra_vars55_argument'}->getErrorMessage();
} else
${'extra_vars55_argument'} = NULL;if(${'extra_vars55_argument'} !== null) ${'extra_vars55_argument'}->setColumnType('text');

${'regdate56_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate56_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate56_argument'}->isValid()) return ${'regdate56_argument'}->getErrorMessage();
if(${'regdate56_argument'} !== null) ${'regdate56_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl51_argument'})
,new InsertExpression('`addon`', ${'addon52_argument'})
,new InsertExpression('`is_used`', ${'is_used53_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m54_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars55_argument'})
,new InsertExpression('`regdate`', ${'regdate56_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>