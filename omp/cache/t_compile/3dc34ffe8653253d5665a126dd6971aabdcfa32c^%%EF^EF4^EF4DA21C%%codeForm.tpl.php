<?php /* Smarty version 2.6.25-dev, created on 2018-08-27 15:30:10
         compiled from controllers/grid/catalogEntry/form/codeForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/catalogEntry/form/codeForm.tpl', 18, false),array('function', 'csrf', 'controllers/grid/catalogEntry/form/codeForm.tpl', 19, false),array('function', 'fbvElement', 'controllers/grid/catalogEntry/form/codeForm.tpl', 25, false),array('function', 'fbvFormButtons', 'controllers/grid/catalogEntry/form/codeForm.tpl', 30, false),array('function', 'translate', 'controllers/grid/catalogEntry/form/codeForm.tpl', 33, false),array('modifier', 'escape', 'controllers/grid/catalogEntry/form/codeForm.tpl', 20, false),array('block', 'fbvFormArea', 'controllers/grid/catalogEntry/form/codeForm.tpl', 23, false),array('block', 'fbvFormSection', 'controllers/grid/catalogEntry/form/codeForm.tpl', 24, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#addIdentificationCodeForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="addIdentificationCodeForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.IdentificationCodeGridHandler",'op' => 'updateCode'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="representationId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['representationId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="identificationCodeId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['identificationCodeId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'addCode')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.catalogEntry.identificationCodeValue",'for' => 'value','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'value','value' => $this->_tpl_vars['value'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.catalogEntry.identificationCodeType",'for' => 'code','required' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['identificationCodes'],'selected' => $this->_tpl_vars['code'],'id' => 'code','translate' => false,'required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>