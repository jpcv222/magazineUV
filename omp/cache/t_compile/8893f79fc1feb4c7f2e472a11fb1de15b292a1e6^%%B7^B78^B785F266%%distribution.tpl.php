<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:33
         compiled from management/settings/distribution.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'management/settings/distribution.tpl', 24, false),array('function', 'translate', 'management/settings/distribution.tpl', 24, false),)), $this); ?>

<?php echo ''; ?><?php $this->assign('pageTitle', "manager.distribution.title"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#distributionTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="distributionTabs" class="pkp_controllers_tab">
	<ul>
		<li><a name="indexing" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'showTab','tab' => 'indexing'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.distribution.indexing"), $this);?>
</a></li>
		<li><a name="paymentMethod" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'showTab','tab' => 'paymentMethod'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.paymentMethod"), $this);?>
</a></li>
		<li><a name="permissions" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'showTab','tab' => 'permissions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.permissions"), $this);?>
</a></li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>