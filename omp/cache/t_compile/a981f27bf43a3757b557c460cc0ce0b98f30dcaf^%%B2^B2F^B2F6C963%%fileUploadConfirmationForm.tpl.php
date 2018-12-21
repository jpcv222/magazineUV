<?php /* Smarty version 2.6.25-dev, created on 2018-11-02 09:21:35
         compiled from controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl', 30, false),array('function', 'csrf', 'controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl', 32, false),array('function', 'translate', 'controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl', 38, false),array('function', 'fbvElement', 'controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl', 40, false),array('block', 'fbvFormArea', 'controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl', 33, false),array('block', 'fbvFormSection', 'controllers/wizard/fileUpload/form/fileUploadConfirmationForm.tpl', 36, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the revision confirmation handler.
		$('#uploadForm').pkpHandler(
			'$.pkp.controllers.wizard.fileUpload.form.RevisionConfirmationHandler');
	});
</script>

<form class="pkp_form pkp_controllers_grid_files" id="uploadForm"
		action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'confirmRevision','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['fileStage'],'uploadedFileId' => $this->_tpl_vars['uploadedFile']->getFileId(),'reviewRoundId' => $this->_tpl_vars['reviewRoundId']), $this);?>
"
		method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div id="possibleRevision" class="pkp_controllers_grid_files_possibleRevision" style="display:none;">
			<div id="revisionWarningText">
				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.upload.possibleRevision")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<div class="description">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.upload.possibleRevisionDescription",'revisedFileName' => $this->_tpl_vars['revisedFileName']), $this);?>

					</div>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'revisedFileId','id' => 'revisedFileId','from' => $this->_tpl_vars['submissionFileOptions'],'selected' => $this->_tpl_vars['revisedFileId'],'translate' => false), $this);?>
 <br />
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</div>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<div class="separator"></div>
</form>