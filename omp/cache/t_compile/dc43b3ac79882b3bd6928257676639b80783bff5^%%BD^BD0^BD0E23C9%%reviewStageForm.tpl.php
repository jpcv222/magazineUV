<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:21
         compiled from controllers/tab/settings/reviewStage/form/reviewStageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 13, false),array('function', 'fbvElement', 'controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 17, false),array('block', 'fbvFormSection', 'controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 16, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'workflow','class' => 'pkp_help_tab'), $this);?>


<?php ob_start(); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.internalReviewGuidelines",'description' => "manager.setup.internalReviewGuidelinesDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => 'true','name' => 'internalReviewGuidelines','id' => 'internalReviewGuidelines','value' => $this->_tpl_vars['internalReviewGuidelines'],'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalReviewFormContents', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl", 'smarty_include_vars' => array('additionalReviewFormContents' => $this->_tpl_vars['additionalReviewFormContents'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>