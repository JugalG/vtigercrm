<?php /* Smarty version Smarty-3.1.7, created on 2023-01-03 05:05:02
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139999753063b3b77ec1a051-71211188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e046339c2891c495b657552a04d03f485a2b7f49' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/Index.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139999753063b3b77ec1a051-71211188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MODULE_NAME' => 0,
    'SELECTED_TAB' => 0,
    'MODE' => 0,
    'QUALIFIED_MODULE' => 0,
    'SUPPORTED_MODULES' => 0,
    'MODULE_NAME' => 0,
    'TRANSLATED_MODULE_NAME' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63b3b77ec6985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b3b77ec6985')) {function content_63b3b77ec6985($_smarty_tpl) {?>


<div class="container-fluid main-scroll paddingTop15" id="layoutEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><input class="selectedTab" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_TAB']->value;?>
"><input class="selectedMode" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
"><input type="hidden" id="selectedModuleLabel" value="<?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
" /><div class="widget_header row"><label class="col-sm-2 textAlignCenter" style="padding-top: 7px;"><?php echo vtranslate('SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6"><select class="select2 col-sm-6" name="layoutEditorModules"><option value=''><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['TRANSLATED_MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['TRANSLATED_MODULE_NAME']->value = $_smarty_tpl->tpl_vars['MODULE_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['TRANSLATED_MODULE_NAME']->value;?>
</option><?php } ?></select></div></div><br><br><?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value){?><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs marginBottom10px"><?php $_smarty_tpl->tpl_vars['URL'] = new Smarty_variable("index.php?module=LayoutEditor&parent=Settings&view=Index", null, 0);?><li class="<?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='detailViewTab'){?>active <?php }?>detailViewTab"><a data-toggle="tab" href="#detailViewLayout" data-url="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" data-mode="showFieldLayout"><strong><?php echo vtranslate('LBL_DETAILVIEW_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="<?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='relatedListTab'){?>active <?php }?>relatedListTab"><a data-toggle="tab" href="#relatedTabOrder" data-url="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" data-mode="showRelatedListLayout"><strong><?php echo vtranslate('LBL_RELATION_SHIPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="<?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='duplicationTab'){?>active <?php }?>duplicationTab"><a data-toggle="tab" href="#duplicationContainer" data-url="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" data-mode="showDuplicationHandling"><strong><?php echo vtranslate('LBL_DUPLICATE_HANDLING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent themeTableColor overflowVisible"><div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='detailViewTab'){?> active<?php }?>" id="detailViewLayout"><?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='detailViewTab'){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('FieldsList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div><div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='relatedListTab'){?> active<?php }?>" id="relatedTabOrder"><?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='relatedListTab'){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('RelatedList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div><div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='duplicationTab'){?> active<?php }?>" id="duplicationContainer"><?php if ($_smarty_tpl->tpl_vars['SELECTED_TAB']->value=='duplicationTab'){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DuplicateHandling.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div></div><?php }?></div><?php }} ?>