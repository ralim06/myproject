<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 17:13:20
         compiled from "C:\Program Files (x86)\EasyPHP-12.1\www\myproject\admin228c4ef56\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11309568d3d20536737-43507577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de77f4dca81d9cd82dbf20b06799c06cdec2446' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\myproject\\admin228c4ef56\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1452093415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11309568d3d20536737-43507577',
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
  'unifunc' => 'content_568d3d20580ab9_91218832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d3d20580ab9_91218832')) {function content_568d3d20580ab9_91218832($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
