<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:45
         compiled from submission/submissionMetadataFormFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'submission/submissionMetadataFormFields.tpl', 12, false),array('function', 'url', 'submission/submissionMetadataFormFields.tpl', 13, false),array('function', 'fbvElement', 'submission/submissionMetadataFormFields.tpl', 14, false),array('modifier', 'assign', 'submission/submissionMetadataFormFields.tpl', 13, false),)), $this); ?>
<?php ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "submission.submit.metadataForm.tip",'title' => "common.languages")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'submission','op' => 'fetchChoices','codeList' => '74'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'languagesSourceUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'languagesSourceUrl'));?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'keyword','id' => 'languages','subLabelTranslate' => true,'multilingual' => true,'current' => $this->_tpl_vars['languages'],'source' => $this->_tpl_vars['languagesSourceUrl'],'disabled' => $this->_tpl_vars['readOnly']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('languagesField', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionMetadataFormFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>