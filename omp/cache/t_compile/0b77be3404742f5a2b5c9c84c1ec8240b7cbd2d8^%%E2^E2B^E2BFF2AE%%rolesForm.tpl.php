<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:04:14
         compiled from user/rolesForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'user/rolesForm.tpl', 12, false),array('function', 'url', 'user/rolesForm.tpl', 21, false),array('function', 'csrf', 'user/rolesForm.tpl', 22, false),array('function', 'fbvFormButtons', 'user/rolesForm.tpl', 28, false),array('function', 'translate', 'user/rolesForm.tpl', 30, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "user-profile.md",'class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#rolesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="rolesForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveRoles'), $this);?>
" enctype="multipart/form-data">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'rolesFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/userGroups.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => "common.save"), $this);?>


	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</form>