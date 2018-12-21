<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:29
         compiled from controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 22, false),array('function', 'csrf', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 23, false),array('function', 'fbvElement', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 27, false),array('function', 'load_url_in_div', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 39, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 41, false),array('block', 'fbvFormSection', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 26, false),array('modifier', 'assign', 'controllers/tab/settings/emailTemplates/form/emailTemplatesForm.tpl', 38, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => "workflow-emails",'class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#emailTemplatesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="emailTemplatesForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'saveFormData','tab' => 'emailTemplates'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'emailTemplatesFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.emailSignature",'for' => 'emailSignature','description' => "manager.setup.emailSignatureDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'emailSignature','value' => $this->_tpl_vars['emailSignature'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'rich' => true,'variables' => $this->_tpl_vars['emailVariables']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.emailBounceAddress",'for' => 'envelopeSender','description' => "manager.setup.emailBounceAddressDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!-- FIXME: There may be a better way to do this if statement within the fbvElement itself -->
		<?php if ($this->_tpl_vars['envelopeSenderDisabled']): ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'envelopeSender','value' => $this->_tpl_vars['envelopeSender'],'maxlength' => '90','disabled' => $this->_tpl_vars['envelopeSenderDisabled'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'label' => "manager.setup.emailBounceAddressDisabled"), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'envelopeSender','value' => $this->_tpl_vars['envelopeSender'],'maxlength' => '90','disabled' => $this->_tpl_vars['envelopeSenderDisabled'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.preparedEmails.preparedEmailsGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'preparedEmailsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'preparedEmailsGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'preparedEmailsGridDiv','url' => $this->_tpl_vars['preparedEmailsGridUrl']), $this);?>


	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'emailTemplatesFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

</form>