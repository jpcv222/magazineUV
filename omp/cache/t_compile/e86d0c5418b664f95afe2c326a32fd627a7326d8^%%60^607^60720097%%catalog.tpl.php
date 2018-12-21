<?php /* Smarty version 2.6.25-dev, created on 2018-05-05 00:00:59
         compiled from frontend/pages/catalog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/catalog.tpl', 17, false),array('modifier', 'count', 'frontend/pages/catalog.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "navigation.catalog")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_catalog">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "navigation.catalog")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div class="monograph_count">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.browseTitles",'numTitles' => count($this->_tpl_vars['publishedMonographs'])), $this);?>

	</div>

		<?php if (! count($this->_tpl_vars['publishedMonographs'])): ?>
		<h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.allBooks"), $this);?>

		</h2>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.noTitles"), $this);?>
</p>

		<?php else: ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['publishedMonographs'],'featured' => $this->_tpl_vars['featuredMonographIds'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>