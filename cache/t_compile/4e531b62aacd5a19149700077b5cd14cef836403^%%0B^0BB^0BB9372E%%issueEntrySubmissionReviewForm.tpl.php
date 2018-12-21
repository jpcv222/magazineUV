<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 16:12:23
         compiled from controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'uniqid', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 12, false),array('modifier', 'escape', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 12, false),array('modifier', 'json_encode', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 20, false),array('modifier', 'assign', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 61, false),array('function', 'url', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 24, false),array('function', 'csrf', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 42, false),array('function', 'load_url_in_div', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 62, false),array('function', 'translate', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 82, false),array('function', 'fbvElement', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 85, false),array('function', 'fbvFormButtons', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 102, false),array('block', 'fbvFormArea', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 66, false),array('block', 'fbvFormSection', 'controllers/modals/submissionMetadata/form/issueEntrySubmissionReviewForm.tpl', 68, false),)), $this); ?>
<?php $this->assign('submissionMetadataViewFormId', ((is_array($_tmp=((is_array($_tmp="submissionMetadataViewForm-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#<?php echo $this->_tpl_vars['submissionMetadataViewFormId']; ?>
').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				readOnly: <?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['readOnly'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				$uploader: $('#coverImageUploader'),
				$preview: $('#coverImagePreview'),
				uploaderOptions: {
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'uploadCoverImage','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					filters: {
						mime_types : [
							{ title : "Image files", extensions : "jpg,jpeg,png" }
						]
					},
					multipart_params: {
						submissionId: <?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
,
						<?php if ($this->_tpl_vars['stageId']): ?>stageId: <?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
,<?php endif; ?>
					}
				}
			}
		);
	});
</script>

<form class="pkp_form" id="<?php echo $this->_tpl_vars['submissionMetadataViewFormId']; ?>
" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveForm'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->assign('notificationId', ((is_array($_tmp=((is_array($_tmp="submissionMetadataViewFormNotification-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => $this->_tpl_vars['notificationId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="tab" value="submission" />

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/section.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionLocale.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionMetadataFormTitleFields.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if (! $this->_tpl_vars['formParams']['hideSubmit'] || ! $this->_tpl_vars['formParams']['anonymous']): ?>
				<?php $this->assign('authorsGridContainer', ((is_array($_tmp=((is_array($_tmp="authorsGridContainer-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.author.AuthorGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'authorGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'authorGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['authorsGridContainer'],'url' => ($this->_tpl_vars['authorGridUrl'])), $this);?>

	<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'coverImage','title' => "editor.article.coverImage")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if (! $this->_tpl_vars['formParams']['readOnly']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'coverImageUploader')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'coverImagePreview')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['coverImage'] != ''): ?>
				<div class="pkp_form_file_view pkp_form_image_view">
					<div class="img">
						<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['coverImage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php echo ((is_array($_tmp='?')) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)); ?>
" <?php if ($this->_tpl_vars['coverImageAlt'] !== ''): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['coverImageAlt'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
					</div>

					<div class="data">
						<span class="title">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.altText"), $this);?>

						</span>
						<span class="value">
							<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'coverImageAltText','label' => "common.altTextInstructions",'value' => $this->_tpl_vars['coverImageAltText'],'readOnly' => $this->_tpl_vars['formParams']['readOnly']), $this);?>

						</span>

						<?php if (! $this->_tpl_vars['formParams']['readOnly']): ?>
							<div id="<?php echo $this->_tpl_vars['deleteCoverImageLinkAction']->getId(); ?>
" class="actions">
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['deleteCoverImageLinkAction'],'contextId' => 'issueForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/submissionMetadataFormFields.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if (! $this->_tpl_vars['formParams']['hideSubmit']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'submissionMetadataFormSubmit','submitText' => "common.save"), $this);?>

	<?php endif; ?>
</form>