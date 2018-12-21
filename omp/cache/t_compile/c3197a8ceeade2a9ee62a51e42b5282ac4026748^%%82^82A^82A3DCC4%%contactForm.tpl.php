<?php /* Smarty version 2.6.25-dev, created on 2018-06-15 08:36:58
         compiled from controllers/tab/settings/contact/form/contactForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/contact/form/contactForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/contact/form/contactForm.tpl', 22, false),array('function', 'csrf', 'controllers/tab/settings/contact/form/contactForm.tpl', 23, false),array('function', 'fbvElement', 'controllers/tab/settings/contact/form/contactForm.tpl', 30, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/contact/form/contactForm.tpl', 59, false),array('block', 'fbvFormSection', 'controllers/tab/settings/contact/form/contactForm.tpl', 29, false),array('block', 'fbvFormArea', 'controllers/tab/settings/contact/form/contactForm.tpl', 34, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'context','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#contactForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="contactForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveFormData','tab' => 'contact'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'contactFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/settings/wizardMode.tpl", 'smarty_include_vars' => array('wizardMode' => $this->_tpl_vars['wizardMode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.mailingAddress",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'mailingAddress','value' => $this->_tpl_vars['mailingAddress'],'height' => $this->_tpl_vars['fbvStyles']['height']['SHORT'],'required' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('title' => "manager.setup.principalContact",'id' => 'principalContactArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.principalContactDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.name",'required' => true,'id' => 'contactName','value' => $this->_tpl_vars['contactName'],'maxlength' => '60','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.title",'multilingual' => true,'name' => 'contactTitle','id' => 'contactTitle','value' => $this->_tpl_vars['contactTitle'],'maxlength' => '90','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.email",'required' => true,'id' => 'contactEmail','value' => $this->_tpl_vars['contactEmail'],'maxlength' => '90','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.phone",'id' => 'contactPhone','value' => $this->_tpl_vars['contactPhone'],'maxlength' => '24','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.affiliation",'multilingual' => true,'name' => 'contactAffiliation','id' => 'contactAffiliation','value' => $this->_tpl_vars['contactAffiliation'],'maxlength' => '90'), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php $this->_tag_stack[] = array('fbvFormArea', array('title' => "manager.setup.technicalSupportContact",'class' => $this->_tpl_vars['wizardClass'],'id' => 'technicalContactArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.technicalSupportContactDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.name",'required' => true,'id' => 'supportName','value' => $this->_tpl_vars['supportName'],'maxlength' => '60','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.email",'required' => true,'id' => 'supportEmail','value' => $this->_tpl_vars['supportEmail'],'maxlength' => '60','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.phone",'id' => 'supportPhone','value' => $this->_tpl_vars['supportPhone'],'maxlength' => '24','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'contactFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

	<?php endif; ?>
</form>