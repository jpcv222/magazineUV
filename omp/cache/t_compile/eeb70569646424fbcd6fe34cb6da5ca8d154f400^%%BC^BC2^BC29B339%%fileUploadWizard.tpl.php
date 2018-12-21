<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:15:37
         compiled from controllers/wizard/fileUpload/fileUploadWizard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/wizard/fileUpload/fileUploadWizard.tpl', 22, false),array('function', 'url', 'controllers/wizard/fileUpload/fileUploadWizard.tpl', 25, false),array('modifier', 'json_encode', 'controllers/wizard/fileUpload/fileUploadWizard.tpl', 22, false),)), $this); ?>

<script type="text/javascript">
	// Attach the JS file upload wizard handler.
	$(function() {
		$('#fileUploadWizard').pkpHandler(
			'$.pkp.controllers.wizard.fileUpload.FileUploadWizardHandler',
			{
				cancelButtonText: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				continueButtonText: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.continue"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				finishButtonText: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.complete"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				deleteUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.ManageFileApiHandler",'op' => 'deleteFile','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['fileStage'],'suppressNotification' => true,'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				metadataUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editMetadata','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'fileStage' => $this->_tpl_vars['fileStage'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				finishUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'finishFileSubmission','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'fileStage' => $this->_tpl_vars['fileStage'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<div id="fileUploadWizard">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'displayFileUploadForm','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'uploaderRoles' => $this->_tpl_vars['uploaderRoles'],'uploaderGroupIds' => $this->_tpl_vars['uploaderGroupIds'],'fileStage' => $this->_tpl_vars['fileStage'],'revisionOnly' => $this->_tpl_vars['revisionOnly'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'revisedFileId' => $this->_tpl_vars['revisedFileId'],'assocType' => $this->_tpl_vars['assocType'],'assocId' => $this->_tpl_vars['assocId'],'dependentFilesOnly' => $this->_tpl_vars['dependentFilesOnly']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.uploadStep"), $this);?>
</a></li>
		<li><a href="metadata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.metadataStep"), $this);?>
</a></li>
		<li><a href="finish"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.finishingUpStep"), $this);?>
</a></li>
	</ul>
</div>