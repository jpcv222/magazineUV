<?php /* Smarty version 2.6.25-dev, created on 2017-08-19 19:17:56
         compiled from admin/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/settings.tpl', 24, false),array('function', 'translate', 'admin/settings.tpl', 24, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "admin.settings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#settingsTabs').pkpHandler(
				'$.pkp.controllers.TabHandler');
	});
</script>
<div id="settingsTabs">
	<ul>
		<li><a name="siteSetup" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AdminSettingsTabHandler",'op' => 'showTab','tab' => 'siteSetup'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.siteSetup"), $this);?>
</a></li>
		<li><a name="adminLanguages" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AdminSettingsTabHandler",'op' => 'showTab','tab' => 'languages'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.languages"), $this);?>
</a></li>
		<li><a name="adminPlugins" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.AdminSettingsTabHandler",'op' => 'showTab','tab' => 'plugins'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plugins"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>