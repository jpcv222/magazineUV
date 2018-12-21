<?php /* Smarty version 2.6.25-dev, created on 2018-12-06 13:36:23
         compiled from controllers/grid/files/proof/manageProofFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/grid/files/proof/manageProofFiles.tpl', 19, false),array('function', 'url', 'controllers/grid/files/proof/manageProofFiles.tpl', 22, false),array('function', 'csrf', 'controllers/grid/files/proof/manageProofFiles.tpl', 23, false),array('function', 'load_url_in_div', 'controllers/grid/files/proof/manageProofFiles.tpl', 30, false),array('function', 'fbvFormButtons', 'controllers/grid/files/proof/manageProofFiles.tpl', 33, false),array('block', 'fbvFormArea', 'controllers/grid/files/proof/manageProofFiles.tpl', 24, false),array('block', 'fbvFormSection', 'controllers/grid/files/proof/manageProofFiles.tpl', 25, false),array('modifier', 'escape', 'controllers/grid/files/proof/manageProofFiles.tpl', 26, false),array('modifier', 'assign', 'controllers/grid/files/proof/manageProofFiles.tpl', 29, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#manageProofFilesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<!-- Current proof files -->
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.submission.proof.manageProofFilesDescription"), $this);?>
</p>

<div id="existingFilesContainer">
	<form class="pkp_form" id="manageProofFilesForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.files.proof.ManageProofFilesGridHandler",'op' => 'updateProofFiles','submissionId' => $this->_tpl_vars['submissionId']), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'manageProofFiles')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<input type="hidden" name="stageId" value="<?php echo @WORKFLOW_STAGE_ID_PRODUCTION; ?>
" />
				<input type="hidden" name="representationId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['representationId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.proof.ManageProofFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'availableReviewFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'availableReviewFilesGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'availableReviewFilesGrid','url' => $this->_tpl_vars['availableReviewFilesGridUrl']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>
</div>