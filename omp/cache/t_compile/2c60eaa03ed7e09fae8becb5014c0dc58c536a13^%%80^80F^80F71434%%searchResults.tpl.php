<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:05
         compiled from frontend/pages/searchResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/searchResults.tpl', 20, false),array('modifier', 'count', 'frontend/pages/searchResults.tpl', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "common.search")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_search">

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('type' => 'category','currentTitleKey' => "common.search")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div class="monograph_count">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.browseTitles",'numTitles' => count($this->_tpl_vars['publishedMonographs'])), $this);?>

	</div>

		<?php if ($this->_tpl_vars['searchQuery'] == ''): ?>

		<?php elseif (! count($this->_tpl_vars['publishedMonographs'])): ?>
		<div class="search_results">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.noTitlesSearch",'searchQuery' => $this->_tpl_vars['searchQuery']), $this);?>

			<a href="#search-form">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchAgain"), $this);?>

			</a>
		</div>

		<?php else: ?>
		<div class="search_results">
			<?php if (count($this->_tpl_vars['publishedMonographs']) > 1): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.foundTitlesSearch",'searchQuery' => $this->_tpl_vars['searchQuery'],'number' => count($this->_tpl_vars['publishedMonographs'])), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.foundTitleSearch",'searchQuery' => $this->_tpl_vars['searchQuery']), $this);?>

			<?php endif; ?>
			<a href="#search-form">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchAgain"), $this);?>

			</a>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['publishedMonographs'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<a name="search-form"></a>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/searchForm_simple.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>