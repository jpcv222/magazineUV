<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:36
         compiled from controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 21, false),array('function', 'csrf', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 40, false),array('function', 'fbvElement', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 47, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 63, false),array('function', 'translate', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 66, false),array('modifier', 'json_encode', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 21, false),array('block', 'fbvFormArea', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 45, false),array('block', 'fbvFormSection', 'controllers/tab/settings/paymentMethod/form/paymentMethodForm.tpl', 46, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'distribution','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#paymentMethodContainerDiv').pkpHandler(
			'$.pkp.controllers.tab.settings.paymentMethod.PaymentMethodHandler',
			{
				paymentMethodFormUrlTemplate: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'getPaymentFormContents','paymentPluginName' => 'PAYMENT_PLUGIN_NAME','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
		// Attach the container handler. (Triggers e.g. selectMonograph event.)
		$('#paymentMethodSelector').pkpHandler(
			'$.pkp.controllers.form.DropdownHandler',
			{
				getOptionsUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'getPaymentMethods','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				defaultKey: <?php echo ((is_array($_tmp=$this->_tpl_vars['paymentPluginName'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
				eventName: 'selectPaymentMethod'
			}
		);
		// Attach the AJAX form handler to the actual payment method config form.
		$('#paymentMethodForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<div id="paymentMethodContainerDiv">
	<form class="pkp_form" id="paymentMethodForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.DistributionSettingsTabHandler",'op' => 'saveFormData','tab' => 'paymentMethod'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="paymentPluginName" id="paymentPluginName" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'paymentMethodFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/settings/wizardMode.tpl", 'smarty_include_vars' => array('wizardMode' => $this->_tpl_vars['wizardMode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'paymentMethod')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.paymentMethod.currency",'description' => "manager.paymentMethod.currency.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('required' => 'true','type' => 'select','id' => 'currency','from' => $this->_tpl_vars['currencies'],'selected' => $this->_tpl_vars['currency'],'translate' => false), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<div id="paymentMethodSelector">
				<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.paymentMethod.method")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'pluginSelect','from' => $this->_tpl_vars['pluginNames'],'translate' => false), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'paymentMethodFormContainer')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<div class="separator"></div>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'paymentFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

	<?php endif; ?>
	</form>
	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>