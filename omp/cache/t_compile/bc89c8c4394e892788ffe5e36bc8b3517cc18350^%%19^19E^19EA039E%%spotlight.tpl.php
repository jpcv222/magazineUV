<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:18:38
         compiled from frontend/objects/spotlight.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'frontend/objects/spotlight.tpl', 25, false),array('modifier', 'escape', 'frontend/objects/spotlight.tpl', 25, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/spotlight.tpl', 42, false),array('function', 'translate', 'frontend/objects/spotlight.tpl', 35, false),)), $this); ?>
<div class="obj_spotlight <?php echo $this->_tpl_vars['hasCoverImage']; ?>
 <?php echo $this->_tpl_vars['type']; ?>
">

	<?php if ($this->_tpl_vars['coverImage']): ?>
		<a class="cover_image" href="<?php echo $this->_tpl_vars['targetUrl']; ?>
">
			<img alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedFullTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" src="<?php echo $this->_tpl_vars['coverImageUrl']; ?>
">
		</a>
	<?php endif; ?>

	<div class="call_to_action">
		<h3 class="title">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</h3>
		<div class="type">
			<?php if ($this->_tpl_vars['assocType'] == @SPOTLIGHT_TYPE_SERIES): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "series.series"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'spotlight'), $this);?>

			<?php endif; ?>
		</div>
		<?php if ($this->_tpl_vars['description']): ?>
		<div class="description">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

		</div>
		<?php endif; ?>
		<a class="read_more" href="<?php echo $this->_tpl_vars['targetUrl']; ?>
" title="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.readMoreWithTitle",'title' => $this->_tpl_vars['spotlight']->getLocalizedTitle()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.readMore"), $this);?>

		</a>
	</div>
</div>