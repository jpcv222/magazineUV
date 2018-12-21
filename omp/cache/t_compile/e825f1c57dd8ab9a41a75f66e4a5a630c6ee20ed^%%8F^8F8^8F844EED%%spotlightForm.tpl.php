<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 03:24:01
         compiled from controllers/grid/content/spotlights/form/spotlightForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 10, false),array('function', 'csrf', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 23, false),array('function', 'fbvElement', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 31, false),array('function', 'fbvFormButtons', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 39, false),array('function', 'translate', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 40, false),array('modifier', 'assign', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 10, false),array('modifier', 'json_encode', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 16, false),array('modifier', 'escape', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 27, false),array('block', 'fbvFormArea', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 25, false),array('block', 'fbvFormSection', 'controllers/grid/content/spotlights/form/spotlightForm.tpl', 30, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'itemAutocomplete','pressId' => $this->_tpl_vars['pressId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'addSpotlightItemUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'addSpotlightItemUrl'));?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#spotlightForm').pkpHandler('$.pkp.controllers.grid.content.spotlights.form.SpotlightFormHandler',
			{
				autocompleteUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['addSpotlightItemUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<form class="pkp_form" id="spotlightForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.content.spotlights.ManageSpotlightsGridHandler",'op' => 'updateSpotlight'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'spotlightFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'spotlightInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['spotlight']): ?>
			<input type="hidden" name="spotlightId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'autocomplete','id' => 'assocId','required' => 'true','value' => $this->_tpl_vars['assocTitle'],'autocompleteValue' => $this->_tpl_vars['assocId'],'label' => "grid.content.spotlights.form.item",'autocompleteUrl' => $this->_tpl_vars['addSpotlightItemUrl'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => 'true','disableSync' => 'true'), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => 'true','id' => 'title','required' => 'true','label' => "grid.content.spotlights.form.title",'value' => $this->_tpl_vars['title'],'maxlength' => '255','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "common.description",'for' => 'description')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'description','id' => 'description','value' => $this->_tpl_vars['description'],'rich' => true,'height' => $this->_tpl_vars['fbvStyles']['height']['SHORT']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'spotlightFormSubmit','submitText' => "common.save"), $this);?>

	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</form>