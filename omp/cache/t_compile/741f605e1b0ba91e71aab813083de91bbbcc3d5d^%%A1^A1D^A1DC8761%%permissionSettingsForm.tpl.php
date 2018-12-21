<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:37
         compiled from controllers/tab/settings/permissions/form/permissionSettingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 21, false),array('function', 'translate', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 22, false),array('function', 'csrf', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 29, false),array('function', 'fbvElement', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 35, false),array('modifier', 'json_encode', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 21, false),array('modifier', 'compare', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 48, false),array('modifier', 'concat', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 70, false),array('modifier', 'uniqid', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 70, false),array('block', 'fbvFormArea', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 33, false),array('block', 'fbvFormSection', 'controllers/tab/settings/permissions/form/permissionSettingsForm.tpl', 34, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'distribution','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#permissionSettingsForm').pkpHandler(
			'$.pkp.controllers.tab.settings.permissions.form.PermissionSettingsFormHandler',
			{
				resetPermissionsUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'resetPermissions','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				resetPermissionsConfirmText: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.resetPermissions.confirm"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
			}
		);
	});
</script>

<form class="pkp_form" id="permissionSettingsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'saveFormData','tab' => 'permissions'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'permissionSettingsFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/settings/wizardMode.tpl", 'smarty_include_vars' => array('wizardMode' => $this->_tpl_vars['wizardMode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'permissionSettings')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.authorCopyrightNotice",'description' => $this->_tpl_vars['authorCopyrightNoticeDescription'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'name' => 'copyrightNotice','id' => 'copyrightNotice','value' => $this->_tpl_vars['copyrightNotice'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'copyrightNoticeAgree','value' => '1','checked' => $this->_tpl_vars['copyrightNoticeAgree'],'label' => "manager.setup.authorCopyrightNoticeAgree"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


		<?php echo $this->_tpl_vars['additionalFormContent']; ?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'copyrightHolderSettings','title' => "submission.copyrightHolder")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "copyrightHolderType-author",'name' => 'copyrightHolderType','value' => 'author','checked' => ((is_array($_tmp=$this->_tpl_vars['copyrightHolderType'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'author') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'author')),'label' => "user.role.author"), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "copyrightHolderType-context",'name' => 'copyrightHolderType','value' => 'context','checked' => ((is_array($_tmp=$this->_tpl_vars['copyrightHolderType'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'context') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'context')),'label' => "context.context"), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => "copyrightHolderType-author",'name' => 'copyrightHolderType','value' => 'other','checked' => ((is_array($_tmp=$this->_tpl_vars['copyrightHolderType'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'other') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'other')),'label' => "common.other"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'copyrightHolderOther','name' => 'copyrightHolderOther','value' => $this->_tpl_vars['copyrightHolderOther'],'multilingual' => true,'label' => "common.other",'disabled' => ((is_array($_tmp=$this->_tpl_vars['copyrightHolderType'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'other', false, true) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'other', false, true))), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'licenseSettings')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.license")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'licenseURLSelect','from' => $this->_tpl_vars['ccLicenseOptions'],'selected' => $this->_tpl_vars['licenseURL'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'licenseURL','name' => 'licenseURL','value' => $this->_tpl_vars['licenseURL'],'label' => "manager.setup.licenseURLDescription",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.setup.resetPermissions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.resetPermissions.description"), $this);?>
</p>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','id' => 'resetPermissionsButton','label' => "manager.setup.resetPermissions"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'formButtons')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->assign('buttonId', ((is_array($_tmp=((is_array($_tmp='submitFormButton')) ? $this->_run_mod_handler('concat', true, $_tmp, "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'submit','class' => 'submitFormButton','id' => $this->_tpl_vars['buttonId'],'label' => "common.save"), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
</form>