<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 17:20:07
         compiled from "C:\Program Files (x86)\EasyPHP-12.1\www\myproject\admin228c4ef56\themes\default\template\controllers\addons_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11656568d3eb749cc08-81129767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2b120948ebc2186d2f631de6ad63afe38f9895d' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\myproject\\admin228c4ef56\\themes\\default\\template\\controllers\\addons_catalog\\content.tpl',
      1 => 1452093414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11656568d3eb749cc08-81129767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d3eb74f69d7_18917958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d3eb74f69d7_18917958')) {function content_568d3eb74f69d7_18917958($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
