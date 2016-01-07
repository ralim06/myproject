<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 17:27:05
         compiled from "C:\Program Files (x86)\EasyPHP-12.1\www\myproject\admin228c4ef56\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4072568d4059807b54-15917101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '467bca230590a3f047fe8a3cdb0284b975bfc0f6' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\myproject\\admin228c4ef56\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1452093415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4072568d4059807b54-15917101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d405984a1e1_24214075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d405984a1e1_24214075')) {function content_568d405984a1e1_24214075($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
