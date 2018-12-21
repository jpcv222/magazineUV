<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:50:16
         compiled from frontend/objects/announcement_full.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'frontend/objects/announcement_full.tpl', 19, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/announcement_full.tpl', 23, false),)), $this); ?>

<article class="obj_announcement_full">
	<h1>
		<?php echo $this->_tpl_vars['announcement']->getLocalizedTitle(); ?>

	</h1>
	<div class="date">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

	</div>
	<div class="description">
		<?php if ($this->_tpl_vars['announcement']->getLocalizedDescription()): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescription())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescriptionShort())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		<?php endif; ?>
	</div>
</article><!-- .obj_announcement_full -->