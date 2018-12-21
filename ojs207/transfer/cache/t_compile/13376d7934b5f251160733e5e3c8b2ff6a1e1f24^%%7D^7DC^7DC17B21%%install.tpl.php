<?php /* Smarty version 2.6.25-dev, created on 2017-08-11 17:29:44
         compiled from install/install.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/install.tpl', 13, false),array('function', 'url', 'install/install.tpl', 31, false),array('function', 'fbvElement', 'install/install.tpl', 65, false),array('function', 'fbvFormButtons', 'install/install.tpl', 158, false),array('modifier', 'assign', 'install/install.tpl', 13, false),array('modifier', 'translate', 'install/install.tpl', 45, false),array('modifier', 'escape', 'install/install.tpl', 71, false),array('modifier', 'concat', 'install/install.tpl', 88, false),array('block', 'fbvFormArea', 'install/install.tpl', 57, false),array('block', 'fbvFormSection', 'install/install.tpl', 64, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "installer.appInstallation")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (is_writeable ( 'config.inc.php' )): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkYes"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_config') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_config'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkNo"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_config') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_config'));?>
<?php endif; ?>
<?php if (is_writeable ( 'cache' )): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkYes"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_cache') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_cache'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkNo"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_cache') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_cache'));?>
<?php endif; ?>
<?php if (is_writeable ( 'public' )): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkYes"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_public') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_public'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkNo"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_public') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_public'));?>
<?php endif; ?>
<?php if (is_writeable ( 'cache/_db' )): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkYes"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_db_cache') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_db_cache'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkNo"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_db_cache') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_db_cache'));?>
<?php endif; ?>
<?php if (is_writeable ( 'cache/t_cache' )): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkYes"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_templates_cache') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_templates_cache'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkNo"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_templates_cache') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_templates_cache'));?>
<?php endif; ?>
<?php if (is_writeable ( 'cache/t_compile' )): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkYes"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_templates_compile') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_templates_compile'));?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.checkNo"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'writable_templates_compile') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'writable_templates_compile'));?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['phpIsSupportedVersion']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installationWrongPhp"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'wrongPhpText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'wrongPhpText'));?>

<?php endif; ?>

<div class="pkp_page_content pkp_page_install">
	<script>
		$(function() {
			// Attach the form handler.
			$('#installForm').pkpHandler('$.pkp.controllers.form.FormHandler');
		});
	</script>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'install','op' => 'upgrade'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'upgradeUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'upgradeUrl'));?>

	<form class="pkp_form" method="post" id="installForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'install'), $this);?>
">
		<input type="hidden" name="installing" value="0" />

		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installationInstructions",'version' => $this->_tpl_vars['version']->getVersionString(false),'upgradeUrl' => $this->_tpl_vars['upgradeUrl'],'baseUrl' => $this->_tpl_vars['baseUrl'],'writable_config' => $this->_tpl_vars['writable_config'],'writable_db_cache' => $this->_tpl_vars['writable_db_cache'],'writable_cache' => $this->_tpl_vars['writable_cache'],'writable_public' => $this->_tpl_vars['writable_public'],'writable_templates_cache' => $this->_tpl_vars['writable_templates_cache'],'writable_templates_compile' => $this->_tpl_vars['writable_templates_compile'],'phpRequiredVersion' => $this->_tpl_vars['phpRequiredVersion'],'wrongPhpText' => $this->_tpl_vars['wrongPhpText'],'phpVersion' => $this->_tpl_vars['phpVersion']), $this);?>


		<?php if ($this->_tpl_vars['isInstallError']): ?>
						<div class="pkp_notification">
				<?php if ($this->_tpl_vars['dbErrorMsg']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.databaseError",'error' => $this->_tpl_vars['dbErrorMsg']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'errorMsg') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'errorMsg'));?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['errorMsg']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'errorMsg') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'errorMsg'));?>

				<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'installer','notificationStyleClass' => 'notifyError','notificationTitle' => ((is_array($_tmp="installer.installErrorsOccurred")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => $this->_tpl_vars['errorMsg'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endif; ?>

		<!-- XSL check -->
		<?php if ($this->_tpl_vars['xslRequired'] && ! $this->_tpl_vars['xslEnabled']): ?>
						<div class="pkp_notification">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'installerXsl','notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="common.warning")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="installer.configureXSLMessage")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'preInstallationFormArea','title' => "installer.preInstallationInstructionsTitle")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.preInstallationInstructions",'upgradeUrl' => $this->_tpl_vars['upgradeUrl'],'baseUrl' => $this->_tpl_vars['baseUrl'],'writable_config' => $this->_tpl_vars['writable_config'],'writable_db_cache' => $this->_tpl_vars['writable_db_cache'],'writable_cache' => $this->_tpl_vars['writable_cache'],'writable_public' => $this->_tpl_vars['writable_public'],'writable_templates_cache' => $this->_tpl_vars['writable_templates_cache'],'writable_templates_compile' => $this->_tpl_vars['writable_templates_compile'],'phpRequiredVersion' => $this->_tpl_vars['phpRequiredVersion'],'wrongPhpText' => $this->_tpl_vars['wrongPhpText'],'phpVersion' => $this->_tpl_vars['phpVersion']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- Administrator username, password, and email -->
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'administratorAccountFormArea','title' => "installer.administratorAccount")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.administratorAccountInstructions"), $this);?>
</p>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.username")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'adminUsername','value' => $this->_tpl_vars['adminUsername'],'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.password")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','password' => true,'id' => 'adminPassword','value' => $this->_tpl_vars['adminPassword'],'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.repeatPassword")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','password' => true,'id' => 'adminPassword2','value' => ((is_array($_tmp=$this->_tpl_vars['adminPassword2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.email")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'adminEmail','value' => $this->_tpl_vars['adminEmail'],'maxlength' => '90','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- Locale configuration -->
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'localeSettingsFormArea','title' => "installer.localeSettings")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.localeSettingsInstructions",'supportsMBString' => $this->_tpl_vars['supportsMBString']), $this);?>
</p>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "locale.primary",'description' => "installer.localeInstructions",'for' => 'locale')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'locale','id' => 'localeOptions','from' => $this->_tpl_vars['localeOptions'],'selected' => $this->_tpl_vars['locale'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'subLabelTranslate' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','label' => "installer.additionalLocales",'description' => "installer.additionalLocalesInstructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $_from = $this->_tpl_vars['localeOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
					<?php $this->assign('localeKeyEscaped', ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
					<?php if (! $this->_tpl_vars['localesComplete'][$this->_tpl_vars['localeKey']]): ?>
						<?php $this->assign('localeName', ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('concat', true, $_tmp, "*") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "*"))); ?>
					<?php endif; ?>
					<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['additionalLocales'] )): ?>
						<?php $this->assign('localeSelected', true); ?>
					<?php else: ?>
						<?php $this->assign('localeSelected', false); ?>
					<?php endif; ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => "additionalLocales[]",'id' => "additionalLocales-".($this->_tpl_vars['localeKeyEscaped']),'value' => $this->_tpl_vars['localeKeyEscaped'],'translate' => false,'label' => ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'checked' => $this->_tpl_vars['localeSelected']), $this);?>

				<?php endforeach; endif; unset($_from); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.clientCharset",'description' => "installer.clientCharsetInstructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'clientCharset','from' => $this->_tpl_vars['clientCharsetOptions'],'selected' => $this->_tpl_vars['clientCharset'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.connectionCharset")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'connectionCharset','from' => $this->_tpl_vars['connectionCharsetOptions'],'selected' => $this->_tpl_vars['connectionCharset'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.databaseCharset")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'databaseCharset','from' => $this->_tpl_vars['databaseCharsetOptions'],'selected' => $this->_tpl_vars['databaseCharset'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<!-- Files directory configuration -->
		<?php if (! $this->_tpl_vars['skipFilesDirSection']): ?>
			<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'fileSettingsFormArea','title' => "installer.fileSettings")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.filesDir",'description' => "installer.filesDirInstructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'filesDir','value' => $this->_tpl_vars['filesDir'],'maxlength' => '255','size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.allowFileUploads",'allowFileUploads' => $this->_tpl_vars['allowFileUploads']), $this);?>
</p>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.maxFileUploadSize",'maxFileUploadSize' => $this->_tpl_vars['maxFileUploadSize']), $this);?>
</p>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<!-- Database configuration -->
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'databaseSettingsFormArea','title' => "installer.databaseSettings")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.databaseSettingsInstructions"), $this);?>
</p>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.databaseDriver",'description' => "installer.databaseDriverInstructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'databaseDriver','from' => $this->_tpl_vars['databaseDriverOptions'],'selected' => $this->_tpl_vars['databaseDriver'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.databaseHost")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'databaseHost','value' => $this->_tpl_vars['databaseHost'],'maxlength' => '60','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.databaseUsername")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'databaseUsername','value' => $this->_tpl_vars['databaseUsername'],'maxlength' => '60','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.databasePassword")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'databasePassword','value' => $this->_tpl_vars['databasePassword'],'maxlength' => '60','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.databaseName")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'databaseName','value' => $this->_tpl_vars['databaseName'],'maxlength' => '60','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'createDatabase','value' => '1','checked' => $this->_tpl_vars['createDatabase'],'label' => "installer.createDatabase"), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'oaiSettingsFormArea','title' => "installer.oaiSettings")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "installer.oaiRepositoryId",'description' => "installer.oaiRepositoryIdInstructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'oaiRepositoryId','value' => $this->_tpl_vars['oaiRepositoryId'],'maxlength' => '60','size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'beaconArea','title' => "installer.beacon")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableBeacon','value' => '1','checked' => $this->_tpl_vars['enableBeacon'],'label' => "installer.beacon.enable"), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'installFormSubmit','submitText' => "installer.installApplication",'hideCancel' => true), $this);?>

	</form>
</div><!-- .pkp_page_content -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>