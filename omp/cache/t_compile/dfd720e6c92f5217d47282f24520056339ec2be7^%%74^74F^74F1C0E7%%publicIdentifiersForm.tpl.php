<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:25:11
         compiled from controllers/tab/pubIds/form/publicIdentifiersForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/pubIds/form/publicIdentifiersForm.tpl', 21, false),array('function', 'csrf', 'controllers/tab/pubIds/form/publicIdentifiersForm.tpl', 46, false),array('function', 'fbvElement', 'controllers/tab/pubIds/form/publicIdentifiersForm.tpl', 48, false),array('function', 'fbvFormButtons', 'controllers/tab/pubIds/form/publicIdentifiersForm.tpl', 57, false),array('modifier', 'escape', 'controllers/tab/pubIds/form/publicIdentifiersForm.tpl', 23, false),array('block', 'fbvFormSection', 'controllers/tab/pubIds/form/publicIdentifiersForm.tpl', 47, false),)), $this); ?>
<script>
	$(function() {
		// Attach the form handler.
		$('#publicIdentifiersForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
</script>
<?php if ($this->_tpl_vars['pubObject'] instanceof Monograph): ?>
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'updateIdentifiers'), $this);?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'publicationIdentifiersFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="tabPos" value="2" />
		<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="tab" value="identifiers" />

<?php elseif ($this->_tpl_vars['pubObject'] instanceof Representation): ?>
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'updateIdentifiers'), $this);?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'representationIdentifiersFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getSubmissionId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="representationId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

<?php elseif ($this->_tpl_vars['pubObject'] instanceof SubmissionFile): ?>
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "api.file.ManageFileApiHandler",'op' => 'updateIdentifiers','escape' => false), $this);?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'fileIdentifiersFormFieldsNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<input type="hidden" name="fileId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getFileId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="revision" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getRevision())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getSubmissionId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="fileStageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObject']->getFileStage())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

<?php endif; ?>

<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "submission.publisherId",'id' => 'publisherId','name' => 'publisherId','value' => $this->_tpl_vars['publisherId'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php $this->assign('pubIdMetadataFile', $this->_tpl_vars['pubIdPlugin']->getPubIdMetadataFile()); ?>
	<?php $this->assign('canBeAssigned', $this->_tpl_vars['pubIdPlugin']->canBeAssigned($this->_tpl_vars['pubObject'])); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pubIdMetadataFile']), 'smarty_include_vars' => array('pubObject' => $this->_tpl_vars['pubObject'],'canBeAssigned' => $this->_tpl_vars['canBeAssigned'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'publicIdentifiersFormSubmit','submitText' => "common.save"), $this);?>


</form>