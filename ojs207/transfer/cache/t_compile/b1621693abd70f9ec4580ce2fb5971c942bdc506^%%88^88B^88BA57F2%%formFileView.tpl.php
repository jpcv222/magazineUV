<?php /* Smarty version 2.6.25-dev, created on 2017-08-19 19:17:56
         compiled from controllers/tab/settings/formFileView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/tab/settings/formFileView.tpl', 16, false),array('modifier', 'escape', 'controllers/tab/settings/formFileView.tpl', 19, false),array('modifier', 'date_format', 'controllers/tab/settings/formFileView.tpl', 25, false),)), $this); ?>

<div class="pkp_form_file_view">

	<div class="data">
		<span class="title">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>

		</span>
		<span class="value">
			<a href="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
?<?php echo $this->_tpl_vars['file']['dateUploaded']; ?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['file']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
		</span>
		<span class="title">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.uploadedDate"), $this);?>

		</span>
		<span class="value">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['file']['dateUploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>

		</span>

		<div id="<?php echo $this->_tpl_vars['deleteLinkAction']->getId(); ?>
" class="actions">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['deleteLinkAction'],'contextId' => $this->_tpl_vars['fileSettingName'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>
</div>