<?php /* Smarty version Smarty-3.1.19, created on 2016-01-06 11:18:03
         compiled from "C:\Program Files (x86)\EasyPHP-12.1\www\myproject\modules\paypal\views\templates\front\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614568ce9db74acc6-78236171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a03022f84ca48f4a7d1cc7540926e844d80188cb' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\myproject\\modules\\paypal\\views\\templates\\front\\error.tpl',
      1 => 1452004574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614568ce9db74acc6-78236171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'navigationPipe' => 0,
    'message' => 0,
    'logs' => 0,
    'log' => 0,
    'order' => 0,
    'price' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568ce9db8fc6f5_22892002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568ce9db8fc6f5_22892002')) {function content_568ce9db8fc6f5_22892002($_smarty_tpl) {?>

<?php if (@constant('_PS_VERSION_')<1.5&&isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/paypal/views/templates/front/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="order.php"><?php echo smartyTranslate(array('s'=>'Your shopping cart','mod'=>'paypal'),$_smarty_tpl);?>
</a><span class="navigation-pipe"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </span> <?php echo smartyTranslate(array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<h2><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['logs']->value)&&$_smarty_tpl->tpl_vars['logs']->value) {?>
		<div class="error">
			<p><b><?php echo smartyTranslate(array('s'=>'Please try to contact the merchant:','mod'=>'paypal'),$_smarty_tpl);?>
</b></p>
			
			<ol>
			<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['log']->key;
?>
				<li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['log']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
			<?php } ?>
			</ol>
			
			<br>	
			
			<?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>
				<p>
					<?php echo smartyTranslate(array('s'=>'Total of the transaction (taxes incl.) :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['price']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><br>
					<?php echo smartyTranslate(array('s'=>'Your order ID is :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
</span><br>
				</p>
			<?php }?>
			
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="button_small" title="<?php echo smartyTranslate(array('s'=>'Back','mod'=>'paypal'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Back','mod'=>'paypal'),$_smarty_tpl);?>
</a></p>
		</div>
	
	<?php }?>

<?php }?>
<?php }} ?>
