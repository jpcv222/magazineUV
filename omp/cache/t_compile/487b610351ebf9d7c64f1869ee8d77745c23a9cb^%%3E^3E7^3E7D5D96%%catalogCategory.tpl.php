<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:34:27
         compiled from frontend/pages/catalogCategory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/catalogCategory.tpl', 28, false),array('function', 'url', 'frontend/pages/catalogCategory.tpl', 36, false),array('modifier', 'count', 'frontend/pages/catalogCategory.tpl', 28, false),array('modifier', 'strip_unsafe_html', 'frontend/pages/catalogCategory.tpl', 33, false),array('modifier', 'escape', 'frontend/pages/catalogCategory.tpl', 37, false),array('modifier', 'nl2br', 'frontend/pages/catalogCategory.tpl', 41, false),array('block', 'iterate', 'frontend/pages/catalogCategory.tpl', 51, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => $this->_tpl_vars['category']->getLocalizedTitle())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_catalog_category">

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs_catalog.tpl", 'smarty_include_vars' => array('type' => 'category','parent' => $this->_tpl_vars['parentCategory'],'currentTitle' => $this->_tpl_vars['category']->getLocalizedTitle())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div class="monograph_count">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.browseTitles",'numTitles' => count($this->_tpl_vars['publishedMonographs'])), $this);?>

	</div>

		<?php $this->assign('image', $this->_tpl_vars['category']->getImage()); ?>
	<?php $this->assign('description', ((is_array($_tmp=$this->_tpl_vars['category']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?>
	<div class="about_section<?php if ($this->_tpl_vars['image']): ?> has_image<?php endif; ?><?php if ($this->_tpl_vars['description']): ?> has_description<?php endif; ?>">
		<?php if ($this->_tpl_vars['image']): ?>
			<div class="cover" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'fullSize','type' => 'category','id' => $this->_tpl_vars['category']->getId()), $this);?>
">
				<img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'thumbnail','type' => 'category','id' => $this->_tpl_vars['category']->getId()), $this);?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			</div>
		<?php endif; ?>
		<div class="description">
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		</div>
	</div>

	<?php if (! $this->_tpl_vars['subcategories']->wasEmpty()): ?>
	<nav class="subcategories" role="navigation">
		<h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.subcategories"), $this);?>

		</h2>
		<ul>
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'subcategories','item' => 'subcategory')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'category','path' => $this->_tpl_vars['subcategory']->getPath()), $this);?>
">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['subcategory']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

					</a>
				</li>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ul>
	</nav>
	<?php endif; ?>

		<?php if (empty ( $this->_tpl_vars['publishedMonographs'] )): ?>
		<h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.allBooks"), $this);?>

		</h2>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.noTitlesSection"), $this);?>
</p>

	<?php else: ?>

				<?php if (! empty ( $this->_tpl_vars['newReleasesMonographs'] )): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['newReleasesMonographs'],'titleKey' => "catalog.newReleases")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['publishedMonographs'],'featured' => $this->_tpl_vars['featuredMonographIds'],'titleKey' => "catalog.allBooks")));
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