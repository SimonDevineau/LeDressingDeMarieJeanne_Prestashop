<?php /* Smarty version Smarty-3.1.19, created on 2014-12-14 18:24:39
         compiled from "/Users/simondevineau/Sites/LeDressingDeMarieJeanne_Prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1259041740548dd5e7612c60-28864438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7bc16e670aabd60acade600f7e4309ef87b50c' => 
    array (
      0 => '/Users/simondevineau/Sites/LeDressingDeMarieJeanne_Prestashop/themes/default-bootstrap/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1418581377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1259041740548dd5e7612c60-28864438',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_548dd5e76329e3_28549964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548dd5e76329e3_28549964')) {function content_548dd5e76329e3_28549964($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
