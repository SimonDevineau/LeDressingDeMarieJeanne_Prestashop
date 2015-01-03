<?php /* Smarty version Smarty-3.1.19, created on 2014-12-14 18:24:39
         compiled from "/Users/simondevineau/Sites/LeDressingDeMarieJeanne_Prestashop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2053407181548dd5e7f137b2-15258634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d8618eddd00856fccc7a7ee42cecba88dcf76f' => 
    array (
      0 => '/Users/simondevineau/Sites/LeDressingDeMarieJeanne_Prestashop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1418581376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053407181548dd5e7f137b2-15258634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548dd5e7f30436_90311114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548dd5e7f30436_90311114')) {function content_548dd5e7f30436_90311114($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
