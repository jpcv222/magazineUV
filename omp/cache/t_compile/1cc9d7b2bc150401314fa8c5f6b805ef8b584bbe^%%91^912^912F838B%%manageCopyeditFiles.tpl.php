<?php /* Smarty version 2.6.25-dev, created on 2018-09-07 02:51:34
         compiled from controllers/grid/files/copyedit/manageCopyeditFiles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 20, false),array('function', 'csrf', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 21, false),array('function', 'load_url_in_div', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 25, false),array('function', 'fbvFormButtons', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 28, false),array('block', 'fbvFormArea', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 23, false),array('modifier', 'assign', 'controllers/grid/files/copyedit/manageCopyeditFiles.tpl', 24, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#manageCopyeditFilesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<!-- Current copyedited files -->
<div id="existingFilesContainer">
	<form class="pkp_form" id="manageCopyeditFilesForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('component' => "grid.files.copyedit.ManageCopyeditFilesGridHandler",'op' => 'updateCopyeditFiles','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => @WORKFLOW_STAGE_ID_EDITING), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'manageCopyeditFiles')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.copyedit.ManageCopyeditFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'manageCopyeditFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'manageCopyeditFilesGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'manageCopyeditFilesGrid','url' => $this->_tpl_vars['manageCopyeditFilesGridUrl']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>
</div>