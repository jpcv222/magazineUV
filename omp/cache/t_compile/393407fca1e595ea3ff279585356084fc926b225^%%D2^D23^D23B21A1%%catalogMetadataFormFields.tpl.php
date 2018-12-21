<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:26:04
         compiled from controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 9, false),array('function', 'url', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 19, false),array('function', 'csrf', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 35, false),array('function', 'fbvElement', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 46, false),array('function', 'load_url_in_div', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 99, false),array('function', 'fbvFormButtons', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 103, false),array('modifier', 'json_encode', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 19, false),array('modifier', 'escape', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 28, false),array('modifier', 'uniqid', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 66, false),array('modifier', 'concat', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 97, false),array('modifier', 'assign', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 98, false),array('block', 'fbvFormSection', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 45, false),array('block', 'fbvFormArea', 'controllers/tab/catalogEntry/form/catalogMetadataFormFields.tpl', 50, false),)), $this); ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.currentCoverImageReload"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('coverImageMessage', ob_get_contents());ob_end_clean(); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#catalogMetadataEntryForm').pkpHandler(
			'$.pkp.controllers.catalog.form.CatalogMetadataFormHandler',
			{
				trackFormChanges: true,
				$uploader: $('#plupload'),
				uploaderOptions: {
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'op' => 'uploadCoverImage','escape' => false,'stageId' => $this->_tpl_vars['stageId'],'submissionId' => $this->_tpl_vars['submissionId']), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					filters: {
						mime_types : [
							{ title : "Image files", extensions : "jpg,jpeg,png" }
						]
					}
				},
				arePermissionsAttached: <?php if ($this->_tpl_vars['arePermissionsAttached']): ?>true<?php else: ?>false<?php endif; ?>,
				coverImageMessage: "<?php echo ((is_array($_tmp=$this->_tpl_vars['coverImageMessage'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
"
			}
		);
	});
</script>

<form class="pkp_form" id="catalogMetadataEntryForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'op' => 'saveForm'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'catalogMetadataFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="tabPos" value="1" />
	<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="tab" value="catalog" />

	<?php if (! $this->_tpl_vars['formParams']['hideSubmit']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.catalogEntry",'list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'confirm','checked' => $this->_tpl_vars['confirm'],'label' => "submission.catalogEntry.confirm",'value' => 'confirm'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'permissions','title' => "submission.permissions",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'attachPermissions','label' => "submission.attachPermissions"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'licenseURL','label' => "submission.licenseURL",'value' => $this->_tpl_vars['licenseURL']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'copyrightHolder','label' => "submission.copyrightHolder",'value' => $this->_tpl_vars['copyrightHolder'],'multilingual' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'copyrightYear','label' => "submission.copyrightYear",'value' => $this->_tpl_vars['copyrightYear'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "monograph.coverImage")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="currentCoverImage">
			<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.currentCoverImage"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('altTitle', ob_get_contents());ob_end_clean(); ?>
			<img height="<?php echo $this->_tpl_vars['coverImage']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['coverImage']['thumbnailWidth']; ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','submissionId' => $this->_tpl_vars['submissionId'],'random' => ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))), $this);?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<span class="coverImageMessage description"></span>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />

	<div class="pkp_helpers_clear"></div>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'audienceInformation','title' => "monograph.audience",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'audience')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience",'type' => 'select','from' => $this->_tpl_vars['audienceCodes'],'selected' => $this->_tpl_vars['audience'],'translate' => false,'id' => 'audience','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeQualifier",'type' => 'select','from' => $this->_tpl_vars['audienceRangeQualifiers'],'selected' => $this->_tpl_vars['audienceRangeQualifier'],'translate' => false,'id' => 'audienceRangeQualifier','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeFrom",'type' => 'select','from' => $this->_tpl_vars['audienceRanges'],'selected' => $this->_tpl_vars['audienceRangeFrom'],'translate' => false,'id' => 'audienceRangeFrom','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeTo",'type' => 'select','from' => $this->_tpl_vars['audienceRanges'],'selected' => $this->_tpl_vars['audienceRangeTo'],'translate' => false,'id' => 'audienceRangeTo','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "monograph.audience.rangeExact",'type' => 'select','from' => $this->_tpl_vars['audienceRanges'],'selected' => $this->_tpl_vars['audienceRangeExact'],'translate' => false,'id' => 'audienceRangeExact','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'representatives')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "grid.catalogEntry.representativesDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- Representatives -->
			<?php $this->assign('divId', ((is_array($_tmp=((is_array($_tmp='representativesGridContainer')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['representationId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['representationId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.RepresentativesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'representativesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'representativesGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['divId'],'url' => $this->_tpl_vars['representativesGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'catalogMetadataFormSubmit','submitText' => "common.save"), $this);?>

</form>