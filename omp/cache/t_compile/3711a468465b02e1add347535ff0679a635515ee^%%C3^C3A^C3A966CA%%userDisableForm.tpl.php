<?php /* Smarty version 2.6.25-dev, created on 2018-09-06 19:06:54
         compiled from controllers/grid/settings/user/form/userDisableForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/user/form/userDisableForm.tpl', 16, false),array('function', 'csrf', 'controllers/grid/settings/user/form/userDisableForm.tpl', 17, false),array('function', 'fbvElement', 'controllers/grid/settings/user/form/userDisableForm.tpl', 24, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/user/form/userDisableForm.tpl', 32, false),array('modifier', 'escape', 'controllers/grid/settings/user/form/userDisableForm.tpl', 19, false),array('block', 'fbvFormSection', 'controllers/grid/settings/user/form/userDisableForm.tpl', 23, false),)), $this); ?>
 <script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userDisableForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>
<form class="pkp_form" id="userDisableForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.user.UserGridHandler",'op' => 'disableUser'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<input type="hidden" name="userId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['userId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="enable" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['enable'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

	<?php if ($this->_tpl_vars['enable']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.enableReason",'for' => 'disableReason')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'disableReason','value' => $this->_tpl_vars['disableReason'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php else: ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.user.disableReason",'for' => 'disableReason')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'disableReason','value' => $this->_tpl_vars['disableReason'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

</form>