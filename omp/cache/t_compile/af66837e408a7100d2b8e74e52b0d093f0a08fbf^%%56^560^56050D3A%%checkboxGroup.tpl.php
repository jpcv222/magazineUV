<?php /* Smarty version 2.6.25-dev, created on 2018-09-14 14:04:15
         compiled from form/checkboxGroup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/checkboxGroup.tpl', 22, false),array('modifier', 'strip_unsafe_html', 'form/checkboxGroup.tpl', 30, false),array('function', 'translate', 'form/checkboxGroup.tpl', 28, false),)), $this); ?>

<?php if ($this->_tpl_vars['FBV_required']): ?><?php $this->assign('required', 'required'); ?><?php endif; ?>

<?php $_from = $this->_tpl_vars['FBV_from']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checkbox'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checkbox']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['FBV_value'] => $this->_tpl_vars['FBV_label']):
        $this->_foreach['checkbox']['iteration']++;
?>
	<?php if (in_array ( $this->_tpl_vars['FBV_value'] , $this->_tpl_vars['FBV_selected'] )): ?>
		<?php $this->assign('FBV_checked', 'checked'); ?>
	<?php else: ?>
		<?php $this->assign('FBV_checked', ""); ?>
	<?php endif; ?>

	<li<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
		<?php ob_start(); ?>
			<input type="checkbox" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-<?php echo ($this->_foreach['checkbox']['iteration']-1); ?>
" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
[]"<?php echo $this->_tpl_vars['FBV_checkboxParams']; ?>
 class="field checkbox<?php if ($this->_tpl_vars['FBV_required']): ?> required<?php endif; ?>"<?php if ($this->_tpl_vars['FBV_checked']): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['FBV_validation']): ?><?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?><?php if ($this->_tpl_vars['FBV_required']): ?> required aria-required="true"<?php endif; ?>/>
		<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('FBV_inputMarkup', ob_get_contents());ob_end_clean(); ?>
		<?php if ($this->_tpl_vars['FBV_label']): ?>
			<label for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
-<?php echo ($this->_foreach['checkbox']['iteration']-1); ?>
">
				<?php echo $this->_tpl_vars['FBV_inputMarkup']; ?>

				<?php if ($this->_tpl_vars['FBV_translate']): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_label']), $this);?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

				<?php endif; ?>
			</label>
		<?php else: ?>
			<?php echo $this->_tpl_vars['FBV_inputMarkup']; ?>

		<?php endif; ?>
	</li>
<?php endforeach; endif; unset($_from); ?>