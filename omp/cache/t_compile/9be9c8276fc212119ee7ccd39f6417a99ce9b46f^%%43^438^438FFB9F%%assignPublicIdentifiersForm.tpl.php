<?php /* Smarty version 2.6.25-dev, created on 2018-06-13 14:19:56
         compiled from controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 21, false),array('function', 'csrf', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 26, false),array('function', 'fbvFormButtons', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 39, false),array('block', 'fbvFormArea', 'controllers/grid/pubIds/form/assignPublicIdentifiersForm.tpl', 27, false),)), $this); ?>
 
 <script>
	$(function() {
		// Attach the form handler.
		$('#assignPublicIdentifierForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
</script>
<?php if ($this->_tpl_vars['pubObject'] instanceof Representation): ?>
	<form class="pkp_form" id="assignPublicIdentifierForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'setApproved','submissionId' => $this->_tpl_vars['pubObject']->getSubmissionId(),'representationId' => $this->_tpl_vars['pubObject']->getId(),'newApprovedState' => $this->_tpl_vars['approval'],'confirmed' => true,'escape' => false), $this);?>
">
		<?php $this->assign('remoteObject', $this->_tpl_vars['pubObject']->getRemoteURL()); ?>
<?php elseif ($this->_tpl_vars['pubObject'] instanceof SubmissionFile): ?>
	<form class="pkp_form" id="assignPublicIdentifierForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'setProofFileCompletion','fileId' => $this->_tpl_vars['pubObject']->getFileId(),'revision' => $this->_tpl_vars['pubObject']->getRevision(),'submissionId' => $this->_tpl_vars['pubObject']->getSubmissionId(),'approval' => $this->_tpl_vars['approval'],'confirmed' => true,'escape' => false), $this);?>
">
<?php endif; ?>
<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'confirmationText')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<p><?php echo $this->_tpl_vars['confirmationText']; ?>
</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['approval']): ?>
	<?php if (! $this->_tpl_vars['remoteObject']): ?>
		<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
			<?php $this->assign('pubIdAssignFile', $this->_tpl_vars['pubIdPlugin']->getPubIdAssignFile()); ?>
			<?php $this->assign('canBeAssigned', $this->_tpl_vars['pubIdPlugin']->canBeAssigned($this->_tpl_vars['pubObject'])); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pubIdAssignFile']), 'smarty_include_vars' => array('pubIdPlugin' => $this->_tpl_vars['pubIdPlugin'],'pubObject' => $this->_tpl_vars['pubObject'],'canBeAssigned' => $this->_tpl_vars['canBeAssigned'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
<?php endif; ?>
<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'assignPublicIdentifierForm','submitText' => "common.ok"), $this);?>

</form>