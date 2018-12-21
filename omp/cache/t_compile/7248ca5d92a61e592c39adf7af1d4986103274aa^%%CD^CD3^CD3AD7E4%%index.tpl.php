<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:35:21
         compiled from manageCatalog/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manageCatalog/index.tpl', 32, false),array('function', 'translate', 'manageCatalog/index.tpl', 32, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.catalog"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if (array_intersect ( array ( ROLE_ID_MANAGER ) , $this->_tpl_vars['userRoles'] )): ?>
	<?php $this->assign('isManager', true); ?>
<?php endif; ?>

<script type="text/javascript">
	// Initialize JS handler for catalog header.
	$(function() {
		$('#catalogTabs').pkpHandler(
			'$.pkp.pages.manageCatalog.ManageCatalogHeaderHandler'
		);
	});
</script>

<div id="catalogHeader">

	<div id="catalogTabs" class="pkp_controllers_tab">
		<ul>
			<li><a name="manageHomepage" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.manageCatalog.ManageCatalogTabHandler",'op' => 'catalog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>
</a></li>
			<li><a name="manageCategory" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.manageCatalog.ManageCatalogTabHandler",'op' => 'category'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog.administration.categories"), $this);?>
</a></li>
			<li><a name="manageSeries" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.manageCatalog.ManageCatalogTabHandler",'op' => 'series'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.manage.series"), $this);?>
</a></li>
			<?php if ($this->_tpl_vars['isManager']): ?><li><a name="manageSpotlights" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.manageCatalog.ManageCatalogTabHandler",'op' => 'spotlights'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "spotlight.spotlights"), $this);?>
</a></li><?php endif; ?>
		</ul>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>