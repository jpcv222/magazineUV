<?php /* Smarty version 2.6.25-dev, created on 2018-08-24 22:07:51
         compiled from user/changePassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'user/changePassword.tpl', 12, false),array('function', 'url', 'user/changePassword.tpl', 21, false),array('function', 'csrf', 'user/changePassword.tpl', 22, false),array('function', 'translate', 'user/changePassword.tpl', 26, false),array('function', 'fbvElement', 'user/changePassword.tpl', 30, false),array('function', 'fbvFormButtons', 'user/changePassword.tpl', 38, false),array('block', 'fbvFormArea', 'user/changePassword.tpl', 28, false),array('block', 'fbvFormSection', 'user/changePassword.tpl', 29, false),array('modifier', 'assign', 'user/changePassword.tpl', 33, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "user-profile.md",'class' => 'pkp_help_tab'), $this);?>


<script>
	$(function() {
		// Attach the form handler.
		$('#changePasswordForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="changePasswordForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'savePassword'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'changePasswordFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.changePasswordInstructions"), $this);?>
</span></p>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'changePasswordFormArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.profile.oldPassword")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','password' => 'true','id' => 'oldPassword','value' => $this->_tpl_vars['oldPassword'],'maxLength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.profile.newPassword")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.form.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'passwordLengthRestriction') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'passwordLengthRestriction'));?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','password' => 'true','id' => 'password','value' => $this->_tpl_vars['oldPassword'],'label' => $this->_tpl_vars['passwordLengthRestriction'],'subLabelTranslate' => false,'maxLength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','password' => 'true','id' => 'password2','value' => $this->_tpl_vars['oldPassword'],'maxLength' => '32','label' => "user.profile.repeatNewPassword",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>