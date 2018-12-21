<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:20:17
         compiled from core:linkAction/buttonConfirmationLinkAction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'core:linkAction/buttonConfirmationLinkAction.tpl', 19, false),array('modifier', 'json_encode', 'core:linkAction/buttonConfirmationLinkAction.tpl', 25, false),array('function', 'translate', 'core:linkAction/buttonConfirmationLinkAction.tpl', 25, false),)), $this); ?>
<?php if (! $this->_tpl_vars['titleIcon']): ?><?php $this->assign('titleIcon', 'modal_confirm'); ?><?php endif; ?>
<script>
	$(function() {
		$('<?php echo ((is_array($_tmp=$this->_tpl_vars['buttonSelector'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
').pkpHandler(
			'$.pkp.controllers.linkAction.LinkActionHandler',
			{
				actionRequest: '$.pkp.classes.linkAction.ModalRequest',
				actionRequestOptions: {
					modalHandler: '$.pkp.controllers.modal.ButtonConfirmationModalHandler',
					title: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.confirmSubmit.title"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					okButton: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ok"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					cancelButton: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					dialogText: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['dialogText']), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					$button: $(<?php echo ((is_array($_tmp=$this->_tpl_vars['buttonSelector'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
),
					titleIcon: <?php echo ((is_array($_tmp=$this->_tpl_vars['titleIcon'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					width: 'auto'
				},
		});
	});
</script>