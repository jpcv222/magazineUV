<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 21:45:53
         compiled from submission/form/section.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'submission/form/section.tpl', 14, false),array('function', 'fbvElement', 'submission/form/section.tpl', 15, false),)), $this); ?>
<?php $this->assign('sectionDescription', ""); ?>
<?php if (! $this->_tpl_vars['readOnly']): ?>
	<?php $this->assign('sectionDescription', "author.submit.journalSectionDescription"); ?>
<?php endif; ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "section.section",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'sectionId','label' => $this->_tpl_vars['sectionDescription'],'from' => $this->_tpl_vars['sectionOptions'],'selected' => $this->_tpl_vars['sectionId'],'translate' => false,'disabled' => $this->_tpl_vars['readOnly'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'required' => true), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>