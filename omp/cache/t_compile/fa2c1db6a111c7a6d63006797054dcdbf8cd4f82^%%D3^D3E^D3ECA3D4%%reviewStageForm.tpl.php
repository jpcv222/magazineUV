<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:21
         compiled from core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 13, false),array('function', 'url', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 22, false),array('function', 'csrf', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 23, false),array('function', 'fbvElement', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 38, false),array('function', 'translate', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 44, false),array('function', 'load_url_in_div', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 58, false),array('function', 'fbvFormButtons', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 96, false),array('block', 'fbvFormArea', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 35, false),array('block', 'fbvFormSection', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 37, false),array('modifier', 'assign', 'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl', 44, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => "workflow-review",'class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#reviewStageForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="reviewStageForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.PublicationSettingsTabHandler",'op' => 'saveFormData','tab' => 'reviewStage'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'reviewStageFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/settings/wizardMode.tpl", 'smarty_include_vars' => array('wizardMode' => $this->_tpl_vars['wizardMode'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


		<?php if ($this->_tpl_vars['wizardMode']): ?>
		<?php $this->assign('wizardClass', 'is_wizard_mode'); ?>
	<?php else: ?>
		<?php $this->assign('wizardClass', ""); ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'reviewOptions','title' => "manager.setup.reviewOptions.reviewTime",'class' => $this->_tpl_vars['wizardClass'])); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!-- FIXME: also, fbvStyles.size.SMALL needs to be switched to TINY once there's a TINY option available -->
		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.reviewOptions.noteOnModification")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "manager.setup.reviewOptions.numWeeksPerResponse",'name' => 'numWeeksPerResponse','id' => 'numWeeksPerResponse','value' => $this->_tpl_vars['numWeeksPerResponse'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "manager.setup.reviewOptions.numWeeksPerReview",'name' => 'numWeeksPerReview','id' => 'numWeeksPerReview','value' => $this->_tpl_vars['numWeeksPerReview'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.reviewOptions.automatedReminders",'description' => "manager.setup.reviewOptions.automatedRemindersDisabled")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.reviewOptions.neverSendReminder"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reminderDefault') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reminderDefault'));?>


		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.reviewOptions.remindForInvite")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['scheduledTasksDisabled']): ?><?php $this->assign('disabled', true); ?><?php else: ?><?php $this->assign('disabled', false); ?><?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['numDaysBeforeInviteReminderValues'],'selected' => $this->_tpl_vars['numDaysBeforeInviteReminder'],'defaultValue' => "",'defaultLabel' => $this->_tpl_vars['reminderDefault'],'id' => 'numDaysBeforeInviteReminder','disabled' => $this->_tpl_vars['disabled'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.reviewOptions.remindForSubmit")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['scheduledTasksDisabled']): ?><?php $this->assign('disabled', true); ?><?php else: ?><?php $this->assign('disabled', false); ?><?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['numDaysBeforeSubmitReminderValues'],'selected' => $this->_tpl_vars['numDaysBeforeSubmitReminder'],'defaultValue' => "",'defaultLabel' => $this->_tpl_vars['reminderDefault'],'id' => 'numDaysBeforeSubmitReminder','disabled' => $this->_tpl_vars['disabled'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.reviewForms.ReviewFormGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewFormsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewFormsUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reviewFormGridContainer','url' => $this->_tpl_vars['reviewFormsUrl']), $this);?>


	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'reviewProcessDetails','class' => $this->_tpl_vars['wizardClass'])); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['ensuringLink'],'contextId' => 'uploadForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ensureLink', ob_get_contents());ob_end_clean(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'showEnsuringLink','label' => "manager.setup.reviewOptions.blindReview",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'showEnsuringLink','value' => '1','checked' => $this->_tpl_vars['showEnsuringLink'],'label' => $this->_tpl_vars['ensureLink'],'translate' => false,'keepLabelHtml' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'review','class' => $this->_tpl_vars['wizardClass'])); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.competingInterests",'for' => 'competingInterests','description' => "manager.setup.competingInterestsDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => 'true','id' => 'competingInterests','value' => $this->_tpl_vars['competingInterests'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'reviewerCompetingInterestsRequired','list' => true,'label' => "manager.setup.reviewerCompetingInterestsRequired.description")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'reviewerCompetingInterestsRequired','checked' => $this->_tpl_vars['reviewerCompetingInterestsRequired'],'label' => "manager.setup.competingInterests.required",'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_tpl_vars['additionalReviewFormContents']; ?>


		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "manager.setup.reviewGuidelines",'for' => 'reviewGuidelines','description' => "manager.setup.reviewGuidelinesDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => 'true','name' => 'reviewGuidelines','id' => 'reviewGuidelines','value' => $this->_tpl_vars['reviewGuidelines'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'reviewOptions','title' => "manager.setup.reviewOptions")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['reviewMethodOptions'],'selected' => $this->_tpl_vars['defaultReviewMode'],'id' => 'defaultReviewMode','size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_tpl_vars['additionalReviewFormOptions']; ?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (! $this->_tpl_vars['wizardMode']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'reviewStageFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

	<?php endif; ?>
</form>