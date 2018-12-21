<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:10:09
         compiled from core:submission/submissionLocale.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fbvElement', 'core:submission/submissionLocale.tpl', 14, false),array('block', 'fbvFormSection', 'core:submission/submissionLocale.tpl', 18, false),)), $this); ?>
<?php if (count ( $this->_tpl_vars['supportedSubmissionLocaleNames'] ) == 1): ?>
		<?php $_from = $this->_tpl_vars['supportedSubmissionLocaleNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['localeName']):
?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'locale','value' => $this->_tpl_vars['locale']), $this);?>

	<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.submissionLocale",'for' => 'locale')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "submission.submit.submissionLocaleDescription",'required' => 'true','type' => 'select','id' => 'locale','from' => $this->_tpl_vars['supportedSubmissionLocaleNames'],'selected' => $this->_tpl_vars['locale'],'translate' => false,'readonly' => $this->_tpl_vars['readOnly'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>