<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:19
         compiled from controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl', 23, false),array('function', 'csrf', 'controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl', 24, false),array('function', 'fbvElement', 'controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl', 36, false),array('function', 'fbvFormButtons', 'controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl', 37, false),array('block', 'fbvFormArea', 'controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl', 27, false),array('block', 'fbvFormSection', 'controllers/wizard/fileUpload/form/submissionFileMetadataForm.tpl', 30, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#metadataForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="metadataForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.ManageFileApiHandler",'op' => 'saveMetadata','submissionId' => $this->_tpl_vars['submissionFile']->getSubmissionId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'fileStage' => $this->_tpl_vars['submissionFile']->getFileStage(),'fileId' => $this->_tpl_vars['submissionFile']->getFileId(),'escape' => false), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'fileMetaData')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/wizard/fileUpload/form/uploadedFileSummary.tpl", 'smarty_include_vars' => array('submissionFile' => $this->_tpl_vars['submissionFile'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['showButtons']): ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'showButtons','value' => $this->_tpl_vars['showButtons']), $this);?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

	<?php endif; ?>
</form>