<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:18:38
         compiled from frontend/objects/monograph_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/monograph_summary.tpl', 14, false),array('function', 'translate', 'frontend/objects/monograph_summary.tpl', 15, false),array('modifier', 'strip_tags', 'frontend/objects/monograph_summary.tpl', 15, false),array('modifier', 'escape', 'frontend/objects/monograph_summary.tpl', 15, false),array('modifier', 'uniqid', 'frontend/objects/monograph_summary.tpl', 15, false),array('modifier', 'date_format', 'frontend/objects/monograph_summary.tpl', 29, false),)), $this); ?>
<div class="obj_monograph_summary<?php if ($this->_tpl_vars['isFeatured']): ?> is_featured<?php endif; ?>">
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['monograph']->getBestId()), $this);?>
" class="cover">
		<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.coverImageTitle",'monographTitle' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','submissionId' => $this->_tpl_vars['monograph']->getId(),'random' => ((is_array($_tmp=$this->_tpl_vars['monograph']->getId())) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))), $this);?>
" />
	</a>
	<?php if ($this->_tpl_vars['monograph']->getSeriesPosition()): ?>
		<div class="seriesPosition">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getSeriesPosition())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</div>
	<?php endif; ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['monograph']->getBestId()), $this);?>
" class="title">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	</a>
	<div class="author">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	</div>
	<div class="date">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatLong'])); ?>

	</div>
</div><!-- .obj_monograph_summary -->