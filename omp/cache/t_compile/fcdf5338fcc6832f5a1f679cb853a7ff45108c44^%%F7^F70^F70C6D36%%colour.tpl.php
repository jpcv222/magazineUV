<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:30:10
         compiled from form/colour.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'form/colour.tpl', 13, false),array('modifier', 'escape', 'form/colour.tpl', 13, false),)), $this); ?>

<?php $this->assign('uniqId', ((is_array($_tmp=((is_array($_tmp="-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['FBV_uniqId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['FBV_uniqId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
	<input type="color"
		<?php echo $this->_tpl_vars['FBV_colorParams']; ?>

		class="field color<?php if ($this->_tpl_vars['FBV_class']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['FBV_validation']): ?> <?php echo $this->_tpl_vars['FBV_validation']; ?>
<?php endif; ?>"
		<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?>
		<?php if ($this->_tpl_vars['FBV_readonly']): ?> readonly="readonly"<?php endif; ?>
		name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
		value="<?php if ($this->_tpl_vars['FBV_value']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_default'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"
		id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php echo $this->_tpl_vars['uniqId']; ?>
"
		<?php if ($this->_tpl_vars['FBV_tabIndex']): ?> tabindex="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_tabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>
	/>
	<span><?php echo $this->_tpl_vars['FBV_label_content']; ?>
</span>
</div>