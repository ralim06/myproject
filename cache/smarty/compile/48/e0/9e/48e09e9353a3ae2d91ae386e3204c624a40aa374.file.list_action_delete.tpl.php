<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 17:27:05
         compiled from "C:\Program Files (x86)\EasyPHP-12.1\www\myproject\admin228c4ef56\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9729568d405986d477-16507035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e09e9353a3ae2d91ae386e3204c624a40aa374' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\myproject\\admin228c4ef56\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1452093415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9729568d405986d477-16507035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d40598ee326_17011124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d40598ee326_17011124')) {function content_568d40598ee326_17011124($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
