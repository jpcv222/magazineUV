<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 03:00:39
         compiled from controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 19, false),array('function', 'url', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 21, false),array('function', 'csrf', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 22, false),array('function', 'fbvElement', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 27, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 39, false),array('block', 'fbvFormArea', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 25, false),array('block', 'fbvFormSection', 'controllers/tab/settings/siteAccessOptions/form/siteAccessOptionsForm.tpl', 26, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#siteAccessOptionsForm').pkpHandler('$.pkp.controllers.tab.settings.siteAccessOptions.form.SiteAccessOptionsFormHandler');
	});
</script>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "users-and-roles.md",'section' => 'accessOptions','class' => 'pkp_help_tab'), $this);?>


<form class="pkp_form" id="siteAccessOptionsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AccessSettingsTabHandler",'op' => 'saveFormData','tab' => 'siteAccessOptions'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'siteAccessOptionsFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'siteAccess','class' => 'border','title' => "manager.setup.siteAccess")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'restrictSiteAccess','value' => '1','checked' => $this->_tpl_vars['restrictSiteAccess'],'label' => "manager.setup.restrictSiteAccess"), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'restrictMonographAccess','value' => '1','checked' => $this->_tpl_vars['restrictMonographAccess'],'label' => "manager.setup.restrictMonographAccess"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userRegistration','class' => 'border','title' => "manager.setup.userRegistration")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "disableUserReg-0",'name' => 'disableUserReg','value' => '0','checked' => "!".($this->_tpl_vars['disableUserReg']),'label' => "manager.setup.enableUserRegistration"), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "disableUserReg-1",'name' => 'disableUserReg','value' => '1','checked' => $this->_tpl_vars['disableUserReg'],'label' => "manager.setup.disableUserRegistration"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'siteAccessFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

</form>