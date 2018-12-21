<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:18:38
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/blocks/browse/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/blocks/browse/block.tpl', 19, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/blocks/browse/block.tpl', 27, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/blocks/browse/block.tpl', 22, false),array('block', 'iterate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/blocks/browse/block.tpl', 37, false),)), $this); ?>
<div class="pkp_block block_browse">
	<span class="title">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse"), $this);?>

	</span>

	<nav class="content" role="navigation" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
		<ul>

			<?php if ($this->_tpl_vars['browseNewReleases']): ?>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'newReleases'), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.newReleases"), $this);?>

					</a>
				</li>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['browseCategoryFactory'] && $this->_tpl_vars['browseCategoryFactory']->getCount()): ?>
				<li class="has_submenu">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse.category"), $this);?>

					<ul>
						<?php $this->_tag_stack[] = array('iterate', array('from' => 'browseCategoryFactory','item' => 'browseCategory')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li class="category_<?php echo $this->_tpl_vars['browseCategory']->getId(); ?>
<?php if ($this->_tpl_vars['browseCategory']->getParentId()): ?> is_sub<?php endif; ?><?php if ($this->_tpl_vars['browseBlockSelectedCategory'] == $this->_tpl_vars['browseCategory']->getPath()): ?> current<?php endif; ?>">
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'category','path' => ((is_array($_tmp=$this->_tpl_vars['browseCategory']->getPath())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['browseCategory']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

								</a>
							</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</li>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['browseSeriesFactory'] && $this->_tpl_vars['browseSeriesFactory']->getCount()): ?>
				<li class="has_submenu">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.browse.series"), $this);?>

					<ul>
						<?php $this->_tag_stack[] = array('iterate', array('from' => 'browseSeriesFactory','item' => 'browseSeriesItem')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
							<li class="series_<?php echo $this->_tpl_vars['browseSeriesItem']->getId(); ?>
<?php if ($this->_tpl_vars['browseBlockSelectedSeries'] == $this->_tpl_vars['browseSeriesItem']->getPath() && $this->_tpl_vars['browseBlockSelectedSeries'] != ''): ?> current<?php endif; ?>">
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'series','path' => ((is_array($_tmp=$this->_tpl_vars['browseSeriesItem']->getPath())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['browseSeriesItem']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

								</a>
							</li>
						<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
					</ul>
				</li>
			<?php endif; ?>

		</ul>
	</nav>
</div><!-- .block_browse -->