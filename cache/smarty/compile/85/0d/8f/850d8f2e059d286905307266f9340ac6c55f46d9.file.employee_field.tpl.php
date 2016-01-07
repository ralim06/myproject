<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 17:13:40
         compiled from "C:\Program Files (x86)\EasyPHP-12.1\www\myproject\admin228c4ef56\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14911568d3d3481ca39-00353324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850d8f2e059d286905307266f9340ac6c55f46d9' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\myproject\\admin228c4ef56\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1452093414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14911568d3d3481ca39-00353324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d3d3483be31_46346282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d3d3483be31_46346282')) {function content_568d3d3483be31_46346282($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
