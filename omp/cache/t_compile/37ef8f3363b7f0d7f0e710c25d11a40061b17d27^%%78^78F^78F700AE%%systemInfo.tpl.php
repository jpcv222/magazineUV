<?php /* Smarty version 2.6.25-dev, created on 2018-09-06 19:03:30
         compiled from admin/systemInfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'admin/systemInfo.tpl', 17, false),array('function', 'url', 'admin/systemInfo.tpl', 27, false),array('function', 'load_url_in_div', 'admin/systemInfo.tpl', 31, false),array('modifier', 'date_format', 'admin/systemInfo.tpl', 17, false),array('modifier', 'escape', 'admin/systemInfo.tpl', 20, false),array('modifier', 'assign', 'admin/systemInfo.tpl', 30, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "admin.systemInformation"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div class="pkp_page_content pkp_page_admin">

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.currentVersion"), $this);?>
: <?php echo $this->_tpl_vars['currentVersion']->getVersionString(false); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['currentVersion']->getDateInstalled())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatLong'])); ?>
)</h3>

	<?php if ($this->_tpl_vars['latestVersionInfo']): ?>
			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.latest"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['latestVersionInfo']['release'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['latestVersionInfo']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatLong'])); ?>
)</p>
		<?php if ($this->_tpl_vars['currentVersion']->compare($this->_tpl_vars['latestVersionInfo']['version']) < 0): ?>
			<p><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.updateAvailable"), $this);?>
</strong>: <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['latestVersionInfo']['package'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.downloadPackage"), $this);?>
</a> | <?php if ($this->_tpl_vars['latestVersionInfo']['patch']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['latestVersionInfo']['patch'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.downloadPatch"), $this);?>
</a><?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.downloadPatch"), $this);?>
<?php endif; ?> | <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['latestVersionInfo']['info'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.moreInfo"), $this);?>
</a></p>
		<?php else: ?>
			<p><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.upToDate"), $this);?>
</strong></p>
		<?php endif; ?>
	<?php else: ?>
	<p><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('versionCheck' => 1), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.version.checkForUpdates"), $this);?>
</a></p>
	<?php endif; ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.systemInfo.VersionInfoGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'versionInfoGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'versionInfoGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'versionInfoGridContainer','url' => $this->_tpl_vars['versionInfoGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.systemInfo.ServerInfoGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'serverInfoGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'serverInfoGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'serverInfoGridContainer','url' => $this->_tpl_vars['serverInfoGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.systemInfo.SystemInfoGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'systemInfoGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'systemInfoGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'systemInfoGridContainer','url' => $this->_tpl_vars['systemInfoGridUrl']), $this);?>


	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'phpinfo'), $this);?>
" target="_blank"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.phpInfo"), $this);?>
</a>
</div><!-- .pkp_page_content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>