<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:06:31
         compiled from management/settings/press.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'management/settings/press.tpl', 14, false),array('function', 'url', 'management/settings/press.tpl', 28, false),array('modifier', 'assign', 'management/settings/press.tpl', 14, false),array('modifier', 'uniqid', 'management/settings/press.tpl', 15, false),array('modifier', 'translate', 'management/settings/press.tpl', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "manager.settings.pressSettings")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['newVersionAvailable']): ?>
	<div class="pkp_notification">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.upgradeAvailable.manager",'currentVersion' => $this->_tpl_vars['currentVersion'],'latestVersion' => $this->_tpl_vars['latestVersion'],'siteAdminName' => $this->_tpl_vars['siteAdmin']->getFullName(),'siteAdminEmail' => $this->_tpl_vars['siteAdmin']->getEmail()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'notificationContents') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'notificationContents'));?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => ((is_array($_tmp="upgradeWarning-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)),'notificationStyleClass' => 'notifyWarning','notificationTitle' => ((is_array($_tmp="common.warning")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => $this->_tpl_vars['notificationContents'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
<?php endif; ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#pressSettingsTabs').pkpHandler(
				'$.pkp.controllers.TabHandler');
	});
</script>
<div id="pressSettingsTabs" class="pkp_controllers_tab">
	<ul>
		<li><a name="masthead" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PressSettingsTabHandler",'op' => 'showTab','tab' => 'masthead'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.masthead"), $this);?>
</a></li>
		<li><a name="contact" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PressSettingsTabHandler",'op' => 'showTab','tab' => 'contact'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>
</a></li>
		<li><a name="series" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PressSettingsTabHandler",'op' => 'showTab','tab' => 'series'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "series.series"), $this);?>
</a></li>
		<li><a name="categories" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PressSettingsTabHandler",'op' => 'showTab','tab' => 'categories'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.category.categories"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>