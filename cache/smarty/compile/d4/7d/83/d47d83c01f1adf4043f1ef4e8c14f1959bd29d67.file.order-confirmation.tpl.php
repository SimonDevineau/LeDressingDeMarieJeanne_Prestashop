<?php /* Smarty version Smarty-3.1.19, created on 2014-12-14 18:24:39
         compiled from "/Users/simondevineau/Sites/LeDressingDeMarieJeanne_Prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977740619548dd5e7658b18-23431949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd47d83c01f1adf4043f1ef4e8c14f1959bd29d67' => 
    array (
      0 => '/Users/simondevineau/Sites/LeDressingDeMarieJeanne_Prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1418581377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977740619548dd5e7658b18-23431949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548dd5e766fda5_28105453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548dd5e766fda5_28105453')) {function content_548dd5e766fda5_28105453($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
