<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:15:36
         compiled from submission/form/step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/form/step2.tpl', 16, false),array('function', 'csrf', 'submission/form/step2.tpl', 17, false),array('function', 'load_url_in_div', 'submission/form/step2.tpl', 22, false),array('function', 'fbvFormButtons', 'submission/form/step2.tpl', 24, false),array('modifier', 'escape', 'submission/form/step2.tpl', 18, false),array('modifier', 'assign', 'submission/form/step2.tpl', 21, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep2Form').pkpHandler('$.pkp.pages.submission.SubmissionStep2FormHandler');
	});
</script>
<form class="pkp_form" id="submitStep2Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
" enctype="multipart/form-data">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep2FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.SubmissionWizardFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionFilesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionFilesGridDiv','url' => $this->_tpl_vars['submissionFilesGridUrl']), $this);?>


	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step2Buttons','submitText' => "common.saveAndContinue"), $this);?>

</form>