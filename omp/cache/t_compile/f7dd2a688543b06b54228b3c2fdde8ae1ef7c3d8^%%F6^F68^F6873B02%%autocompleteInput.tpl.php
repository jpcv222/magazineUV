<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 03:24:01
         compiled from form/autocompleteInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'form/autocompleteInput.tpl', 10, false),array('modifier', 'assign', 'form/autocompleteInput.tpl', 10, false),array('modifier', 'json_encode', 'form/autocompleteInput.tpl', 16, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.startTyping"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'jLabelText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'jLabelText'));?>

<script>
	$(function() {
		$('#<?php echo $this->_tpl_vars['FBV_id']; ?>
_container').pkpHandler('$.pkp.controllers.AutocompleteHandler',
			{
				<?php if ($this->_tpl_vars['FBV_disableSync']): ?>disableSync: true,<?php endif; ?>
				sourceUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_autocompleteUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				jLabelText: <?php echo ((is_array($_tmp=$this->_tpl_vars['jLabelText'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			});
	});
</script>

<div id="<?php echo $this->_tpl_vars['FBV_id']; ?>
_container" <?php if ($this->_tpl_vars['FBV_layoutInfo']): ?><?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
<?php endif; ?>>
	<?php echo $this->_tpl_vars['FBV_textInput']; ?>

	<div class="hidden">
		<input type="hidden" name="<?php echo $this->_tpl_vars['FBV_id']; ?>
" id="<?php echo $this->_tpl_vars['FBV_id']; ?>
" <?php if ($this->_tpl_vars['FBV_autocompleteValue']): ?>value="<?php echo $this->_tpl_vars['FBV_autocompleteValue']; ?>
"<?php endif; ?> <?php if ($this->_tpl_vars['FBV_validation']): ?>class="<?php echo $this->_tpl_vars['FBV_validation']; ?>
"<?php endif; ?> />
	</div>
</div>