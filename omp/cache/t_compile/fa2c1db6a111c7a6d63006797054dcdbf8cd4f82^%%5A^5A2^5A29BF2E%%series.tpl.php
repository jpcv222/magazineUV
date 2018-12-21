<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:10:09
         compiled from submission/form/series.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'submission/form/series.tpl', 11, false),array('function', 'fbvElement', 'submission/form/series.tpl', 12, false),)), $this); ?>
<?php if (count ( $this->_tpl_vars['seriesOptions'] ) > 1): ?> 	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "series.series")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'seriesId','from' => $this->_tpl_vars['seriesOptions'],'selected' => $this->_tpl_vars['seriesId'],'translate' => false,'disabled' => $this->_tpl_vars['readOnly'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['includeSeriesPosition']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.seriesPosition")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'seriesPosition','name' => 'seriesPosition','label' => "submission.submit.seriesPosition.description",'value' => $this->_tpl_vars['seriesPosition'],'maxlength' => '255','disabled' => $this->_tpl_vars['readOnly']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
<?php endif; ?>