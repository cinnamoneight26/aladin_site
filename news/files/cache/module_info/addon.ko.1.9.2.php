<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispAddonAdminIndex';
$info->menu = new stdClass;
$info->menu->installedAddon = new stdClass;
$info->menu->installedAddon->title='설치된 애드온';
$info->menu->installedAddon->type='';
$info->action = new stdClass;
$info->menu->installedAddon->index='dispAddonAdminIndex';
$info->menu->installedAddon->acts[0]='dispAddonAdminIndex';
$info->action->dispAddonAdminIndex = new stdClass;
$info->action->dispAddonAdminIndex->type='view';
$info->action->dispAddonAdminIndex->grant='guest';
$info->action->dispAddonAdminIndex->standalone='true';
$info->action->dispAddonAdminIndex->ruleset='';
$info->action->dispAddonAdminIndex->method='';
$info->action->dispAddonAdminIndex->check_csrf='true';
$info->action->dispAddonAdminInfo = new stdClass;
$info->action->dispAddonAdminInfo->type='view';
$info->action->dispAddonAdminInfo->grant='guest';
$info->action->dispAddonAdminInfo->standalone='true';
$info->action->dispAddonAdminInfo->ruleset='';
$info->action->dispAddonAdminInfo->method='';
$info->action->dispAddonAdminInfo->check_csrf='true';
$info->menu->installedAddon->acts[1]='dispAddonAdminSetup';
$info->action->dispAddonAdminSetup = new stdClass;
$info->action->dispAddonAdminSetup->type='view';
$info->action->dispAddonAdminSetup->grant='guest';
$info->action->dispAddonAdminSetup->standalone='true';
$info->action->dispAddonAdminSetup->ruleset='';
$info->action->dispAddonAdminSetup->method='';
$info->action->dispAddonAdminSetup->check_csrf='true';
$info->action->procAddonAdminToggleActivate = new stdClass;
$info->action->procAddonAdminToggleActivate->type='controller';
$info->action->procAddonAdminToggleActivate->grant='guest';
$info->action->procAddonAdminToggleActivate->standalone='true';
$info->action->procAddonAdminToggleActivate->ruleset='';
$info->action->procAddonAdminToggleActivate->method='';
$info->action->procAddonAdminToggleActivate->check_csrf='true';
$info->action->procAddonAdminSetupAddon = new stdClass;
$info->action->procAddonAdminSetupAddon->type='controller';
$info->action->procAddonAdminSetupAddon->grant='guest';
$info->action->procAddonAdminSetupAddon->standalone='true';
$info->action->procAddonAdminSetupAddon->ruleset='updateAddonSetup';
$info->action->procAddonAdminSetupAddon->method='';
$info->action->procAddonAdminSetupAddon->check_csrf='true';
$info->action->procAddonAdminSaveActivate = new stdClass;
$info->action->procAddonAdminSaveActivate->type='controller';
$info->action->procAddonAdminSaveActivate->grant='guest';
$info->action->procAddonAdminSaveActivate->standalone='true';
$info->action->procAddonAdminSaveActivate->ruleset='';
$info->action->procAddonAdminSaveActivate->method='';
$info->action->procAddonAdminSaveActivate->check_csrf='true';
return $info;