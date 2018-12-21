<?php /* Smarty version 2.6.25-dev, created on 2018-09-07 02:53:04
         compiled from controllers/grid/files/proof/form/approvedProofForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/grid/files/proof/form/approvedProofForm.tpl', 15, false),array('modifier', 'escape', 'controllers/grid/files/proof/form/approvedProofForm.tpl', 25, false),array('function', 'url', 'controllers/grid/files/proof/form/approvedProofForm.tpl', 21, false),array('function', 'csrf', 'controllers/grid/files/proof/form/approvedProofForm.tpl', 22, false),array('function', 'fbvFormButtons', 'controllers/grid/files/proof/form/approvedProofForm.tpl', 30, false),array('block', 'fbvFormArea', 'controllers/grid/files/proof/form/approvedProofForm.tpl', 24, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#approvedProofForm').pkpHandler('$.pkp.controllers.grid.files.proof.form.ApprovedProofFormHandler',
			{
				salesType: <?php echo ((is_array($_tmp=$this->_tpl_vars['salesType'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<form class="pkp_form" id="approvedProofForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'saveApprovedProof'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'approvedProofFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'approvedProofInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<input type="hidden" name="fileId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fileId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/grid/files/proof/form/approvedProofFormFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'saveApprovedProofForm','submitText' => "common.save"), $this);?>

</form>