<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:10:09
         compiled from submission/form/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'submission/form/step1.tpl', 12, false),array('function', 'fbvElement', 'submission/form/step1.tpl', 13, false),array('modifier', 'compare', 'submission/form/step1.tpl', 13, false),)), $this); ?>
<?php ob_start(); ?>
	<!-- Submission Type -->
	<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','label' => "submission.workflowType")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','name' => 'workType','id' => "isEditedVolume-0",'value' => @WORK_TYPE_AUTHORED_WORK,'checked' => ((is_array($_tmp=$this->_tpl_vars['workType'])) ? $this->_run_mod_handler('compare', true, $_tmp, @WORK_TYPE_EDITED_VOLUME, false, true) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, @WORK_TYPE_EDITED_VOLUME, false, true)),'label' => "submission.workflowType.authoredWork",'disabled' => $this->_tpl_vars['submissionId']), $this);?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','name' => 'workType','id' => "isEditedVolume-1",'value' => @WORK_TYPE_EDITED_VOLUME,'checked' => ((is_array($_tmp=$this->_tpl_vars['workType'])) ? $this->_run_mod_handler('compare', true, $_tmp, @WORK_TYPE_EDITED_VOLUME) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, @WORK_TYPE_EDITED_VOLUME)),'label' => "submission.workflowType.editedVolume",'disabled' => $this->_tpl_vars['submissionId']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalFormContent1', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/series.tpl", 'smarty_include_vars' => array('includeSeriesPosition' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalFormContent2', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/form/step1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>