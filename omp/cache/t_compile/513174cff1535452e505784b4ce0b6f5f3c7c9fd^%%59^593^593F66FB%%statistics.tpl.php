<?php /* Smarty version 2.6.25-dev, created on 2018-06-15 08:36:46
         compiled from management/tools/statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'management/tools/statistics.tpl', 12, false),array('function', 'translate', 'management/tools/statistics.tpl', 18, false),array('function', 'url', 'management/tools/statistics.tpl', 23, false),array('modifier', 'escape', 'management/tools/statistics.tpl', 23, false),)), $this); ?>
<div class="pkp_page_content pkp_page_statistics">
	<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "tools.md",'section' => 'statistics','class' => 'pkp_help_tab'), $this);?>


	<?php if ($this->_tpl_vars['showMetricTypeSelector'] || $this->_tpl_vars['appSettings']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "management/tools/form/statisticsSettingsForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports"), $this);?>
</h3>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports.description"), $this);?>
</p>

	<ul>
	<?php $_from = $this->_tpl_vars['reportPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['plugin']):
?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'tools','path' => 'report','pluginName' => ((is_array($_tmp=$this->_tpl_vars['plugin']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>

	<p><a class="pkp_button" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'tools','path' => 'reportGenerator'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.statistics.reports.generateReport"), $this);?>
</a></p>
</div>