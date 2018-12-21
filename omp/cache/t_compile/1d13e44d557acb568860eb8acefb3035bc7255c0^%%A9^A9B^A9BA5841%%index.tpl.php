<?php /* Smarty version 2.6.25-dev, created on 2018-05-29 10:17:58
         compiled from management/tools/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'management/tools/index.tpl', 20, false),array('function', 'translate', 'management/tools/index.tpl', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "navigation.tools")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#managementTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="managementTabs" class="pkp_controllers_tab">
	<ul>
		<li><a name="importexport" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'importexport'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools.importExport"), $this);?>
</a></li>
		<li><a name="statistics" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'statistics'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.tools.statistics"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>