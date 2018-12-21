<?php /* Smarty version 2.6.25-dev, created on 2018-09-07 02:53:04
         compiled from controllers/grid/files/proof/form/approvedProofFormFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'controllers/grid/files/proof/form/approvedProofFormFields.tpl', 10, false),array('function', 'fbvElement', 'controllers/grid/files/proof/form/approvedProofFormFields.tpl', 12, false),array('function', 'translate', 'controllers/grid/files/proof/form/approvedProofFormFields.tpl', 17, false),array('modifier', 'assign', 'controllers/grid/files/proof/form/approvedProofFormFields.tpl', 17, false),)), $this); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'priceType','list' => true,'description' => "payment.directSales.price.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $_from = $this->_tpl_vars['salesTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['salesTypeKey'] => $this->_tpl_vars['salesType']):
?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','name' => 'salesType','value' => $this->_tpl_vars['salesTypeKey'],'label' => $this->_tpl_vars['salesType'],'id' => $this->_tpl_vars['salesTypeKey']), $this);?>

	<?php endforeach; endif; unset($_from); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'price')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.directSales.priceCurrency",'currency' => $this->_tpl_vars['currentPress']->getSetting('currency')), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'priceLabel') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'priceLabel'));?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'price','label' => $this->_tpl_vars['priceLabel'],'subLabelTranslate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'value' => $this->_tpl_vars['price'],'maxlength' => '255'), $this);?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.directSales.numericOnly"), $this);?>
</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>