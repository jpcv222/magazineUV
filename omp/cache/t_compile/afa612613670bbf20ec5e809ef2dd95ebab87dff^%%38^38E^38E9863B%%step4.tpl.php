<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:20:17
         compiled from submission/form/step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/form/step4.tpl', 17, false),array('function', 'csrf', 'submission/form/step4.tpl', 18, false),array('function', 'translate', 'submission/form/step4.tpl', 22, false),array('function', 'fbvFormButtons', 'submission/form/step4.tpl', 24, false),array('modifier', 'escape', 'submission/form/step4.tpl', 19, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the JS form handler.
		$('#submitStep4Form').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="submitStep4Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep4FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.confirm.message"), $this);?>
</p>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step4Buttons','submitText' => "submission.submit.finishSubmission",'confirmSubmit' => "submission.confirmSubmit"), $this);?>

</form>