<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:15:37
         compiled from controllers/wizard/fileUpload/form/fileUploadForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'fatalError', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 107, false),array('modifier', 'json_encode', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 132, false),array('modifier', 'escape', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 154, false),array('modifier', 'key', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 162, false),array('modifier', 'assign', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 186, false),array('function', 'translate', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 120, false),array('function', 'url', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 143, false),array('function', 'csrf', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 151, false),array('function', 'fbvElement', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 159, false),array('block', 'fbvFormArea', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 152, false),array('block', 'fbvFormSection', 'controllers/wizard/fileUpload/form/fileUploadForm.tpl', 158, false),)), $this); ?>

<?php $this->assign('showFileNameOnly', false); ?>
<?php if ($this->_tpl_vars['revisionOnly']): ?>
	<?php $this->assign('showGenreSelector', false); ?>
	<?php if (is_numeric ( $this->_tpl_vars['revisedFileId'] )): ?>
				<?php $this->assign('showFileSelector', false); ?>
		<?php $this->assign('showFileNameOnly', true); ?>
	<?php else: ?>
				<?php if (empty ( $this->_tpl_vars['submissionFileOptions'] )): ?><?php $this->assign('revisionOnlyWithoutFileOptions', true); ?><?php endif; ?>
		<?php $this->assign('showFileSelector', true); ?>
	<?php endif; ?>
<?php else: ?>
	<?php $this->assign('showGenreSelector', true); ?>
	<?php if (empty ( $this->_tpl_vars['submissionFileOptions'] )): ?>
				<?php if (is_numeric ( $this->_tpl_vars['revisedFileId'] )): ?><?php echo ((is_array($_tmp="A revised file id cannot be given when uploading a new file!")) ? $this->_run_mod_handler('fatalError', true, $_tmp) : fatalError($_tmp)); ?>
<?php endif; ?>
		<?php $this->assign('showFileSelector', false); ?>
	<?php else: ?>
				<?php $this->assign('showFileSelector', true); ?>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['isReviewAttachment']): ?><?php $this->assign('showGenreSelector', false); ?><?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['revisionOnlyWithoutFileOptions']): ?>
	<br /><br />
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.upload.noAvailableReviewFiles"), $this);?>

	<br /><br />
<?php else: ?>

<script type="text/javascript">
	$(function() {
		// Attach the upload form handler.
		$('#uploadForm').pkpHandler(
			'$.pkp.controllers.wizard.fileUpload.form.FileUploadFormHandler',
			{
				hasFileSelector: <?php if ($this->_tpl_vars['showFileSelector']): ?>true<?php else: ?>false<?php endif; ?>,
				hasGenreSelector: <?php if ($this->_tpl_vars['showGenreSelector']): ?>true<?php else: ?>false<?php endif; ?>,
				presetRevisedFileId: <?php echo ((is_array($_tmp=$this->_tpl_vars['revisedFileId'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				// File genres currently assigned to submission files.
				fileGenres: {
					<?php $_from = $this->_tpl_vars['currentSubmissionFileGenres']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['currentSubmissionFileGenres'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['currentSubmissionFileGenres']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['submissionFileId'] => $this->_tpl_vars['fileGenre']):
        $this->_foreach['currentSubmissionFileGenres']['iteration']++;
?>
						<?php if (! empty ( $this->_tpl_vars['fileGenre'] )): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFileId'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['fileGenre'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
<?php if (! ($this->_foreach['currentSubmissionFileGenres']['iteration'] == $this->_foreach['currentSubmissionFileGenres']['total'])): ?>,<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				},
				$uploader: $('#plupload'),
				uploaderOptions: {
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadFile','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'fileStage' => $this->_tpl_vars['fileStage'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'assocType' => $this->_tpl_vars['assocType'],'assocId' => $this->_tpl_vars['assocId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				}
			});
	});
</script>

<form class="pkp_form" id="uploadForm" action="#" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['assocType'] && $this->_tpl_vars['assocId']): ?>
			<input type="hidden" name="assocType" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['assocType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="hidden" name="assocId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['assocId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<?php endif; ?>
		<?php if (count ( $this->_tpl_vars['uploaderUserGroupOptions'] ) > 1): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.upload.userGroup",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'uploaderUserGroupId','id' => 'uploaderUserGroupId','from' => $this->_tpl_vars['uploaderUserGroupOptions'],'selected' => $this->_tpl_vars['defaultUserGroupId'],'translate' => false,'required' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php else: ?>
			<input type="hidden" id="uploaderUserGroupId" name="uploaderUserGroupId" value="<?php echo key($this->_tpl_vars['uploaderUserGroupOptions']); ?>
" />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['showFileNameOnly']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.currentFile")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_tpl_vars['revisedFileName']; ?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

						<input type="hidden" id="revisedFileId" name="revisedFileId" value="<?php echo $this->_tpl_vars['revisedFileId']; ?>
" />
		<?php elseif ($this->_tpl_vars['showFileSelector']): ?>
						<?php if ($this->_tpl_vars['revisionOnly']): ?>
				<?php $this->assign('revisionSelectTitle', "submission.upload.selectMandatoryFileToRevise"); ?>
			<?php else: ?>
				<?php $this->assign('revisionSelectTitle', "submission.upload.selectOptionalFileToRevise"); ?>
			<?php endif; ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => $this->_tpl_vars['revisionSelectTitle'],'required' => $this->_tpl_vars['revisionOnly'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'revisedFileId','id' => 'revisedFileId','from' => $this->_tpl_vars['submissionFileOptions'],'selected' => $this->_tpl_vars['revisedFileId'],'translate' => false), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['showGenreSelector']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.upload.fileContents",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.upload.selectComponent"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'defaultLabel') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'defaultLabel'));?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'genreId','id' => 'genreId','from' => $this->_tpl_vars['submissionFileGenres'],'translate' => false,'defaultLabel' => $this->_tpl_vars['defaultLabel'],'defaultValue' => "",'required' => true,'selected' => $this->_tpl_vars['genreId']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if ($this->_tpl_vars['ensuringLink']): ?>
			<div id="<?php echo $this->_tpl_vars['ensuringLink']->getId(); ?>
" class="pkp_linkActions">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['ensuringLink'],'contextId' => 'uploadForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>
<?php endif; ?>