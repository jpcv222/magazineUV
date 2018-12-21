<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:24
         compiled from controllers/wizard/fileUpload/form/fileSubmissionComplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/wizard/fileUpload/form/fileSubmissionComplete.tpl', 11, false),)), $this); ?>
<div id="finishSubmissionForm" class="pkp_helpers_text_center">
	<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.fileAdded"), $this);?>
</h2>
	<?php if ($this->_tpl_vars['fileStage'] != @SUBMISSION_FILE_PROOF): ?>
		<button class="pkp_button" type="button" name="newFile" id="newFile"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'submission.submit.newFile'), $this);?>
</button>
	<?php endif; ?>
	<br>
	<br>
</div>