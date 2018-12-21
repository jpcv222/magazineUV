<?php /* Smarty version 2.6.25-dev, created on 2018-05-07 14:10:14
         compiled from frontend/pages/catalogNewReleases.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/catalogNewReleases.tpl', 21, false),array('modifier', 'count', 'frontend/pages/catalogNewReleases.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "catalog.newReleases")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_catalog_new_releases">

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs_catalog.tpl", 'smarty_include_vars' => array('currentTitleKey' => "catalog.newReleases")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div class="monograph_count">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.browseTitles",'numTitles' => count($this->_tpl_vars['publishedMonographs'])), $this);?>

	</div>

		<?php if (empty ( $this->_tpl_vars['publishedMonographs'] )): ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.noTitlesNew"), $this);?>
</p>

	<?php else: ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['publishedMonographs'])));
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