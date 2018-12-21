<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:30
         compiled from frontend/components/notification.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/components/notification.tpl', 15, false),array('modifier', 'replace', 'frontend/components/notification.tpl', 15, false),array('function', 'translate', 'frontend/components/notification.tpl', 17, false),)), $this); ?>
<div class="cmp_notification <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '_') : smarty_modifier_replace($_tmp, ' ', '_')); ?>
">
	<?php if ($this->_tpl_vars['messageKey']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['messageKey']), $this);?>

	<?php else: ?>
		<?php echo $this->_tpl_vars['message']; ?>

	<?php endif; ?>
</div>