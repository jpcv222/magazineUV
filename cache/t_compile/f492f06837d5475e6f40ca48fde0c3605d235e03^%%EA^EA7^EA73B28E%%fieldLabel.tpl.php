<?php /* Smarty version 2.6.25-dev, created on 2018-12-21 02:19:59
         compiled from form/fieldLabel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/fieldLabel.tpl', 11, false),)), $this); ?>

<label<?php if (! $this->_tpl_vars['FBV_suppressId']): ?> for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?><?php if ($this->_tpl_vars['FBV_class']): ?> class="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?> >
	<?php echo $this->_tpl_vars['FBV_label']; ?>
<?php if ($this->_tpl_vars['FBV_required']): ?><span class="req">*</span><?php endif; ?>
</label>
