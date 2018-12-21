<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:31
         compiled from frontend/objects/announcement_summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/objects/announcement_summary.tpl', 19, false),array('function', 'translate', 'frontend/objects/announcement_summary.tpl', 30, false),array('modifier', 'escape', 'frontend/objects/announcement_summary.tpl', 20, false),array('modifier', 'date_format', 'frontend/objects/announcement_summary.tpl', 24, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/announcement_summary.tpl', 27, false),)), $this); ?>
<?php if (! $this->_tpl_vars['heading']): ?>
	<?php $this->assign('heading', 'h2'); ?>
<?php endif; ?>

<article class="obj_announcement_summary">
	<<?php echo $this->_tpl_vars['heading']; ?>
>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</a>
	</<?php echo $this->_tpl_vars['heading']; ?>
>
	<div class="date">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

	</div>
	<div class="summary">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescriptionShort())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
" class="read_more">
			<span aria-hidden="true" role="presentation">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.readMore"), $this);?>

			</span>
			<span class="pkp_screen_reader">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.readMoreWithTitle",'title' => ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>

			</span>
		</a>
	</div>
</article><!-- .obj_announcement_summary -->