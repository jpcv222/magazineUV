<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:10:09
         compiled from core:submission/form/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:submission/form/step1.tpl', 17, false),array('function', 'csrf', 'core:submission/form/step1.tpl', 18, false),array('function', 'fbvElement', 'core:submission/form/step1.tpl', 28, false),array('function', 'fbvFormButtons', 'core:submission/form/step1.tpl', 74, false),array('function', 'translate', 'core:submission/form/step1.tpl', 76, false),array('modifier', 'escape', 'core:submission/form/step1.tpl', 19, false),array('modifier', 'translate', 'core:submission/form/step1.tpl', 35, false),array('block', 'fbvFormArea', 'core:submission/form/step1.tpl', 24, false),array('block', 'fbvFormSection', 'core:submission/form/step1.tpl', 27, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#submitStep1Form').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="submitStep1Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
">
<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php if ($this->_tpl_vars['submissionId']): ?><input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/><?php endif; ?>
	<input type="hidden" name="submissionChecklist" value="1"/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep1FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'submissionStep1')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<!-- Author user group selection (only appears if user has > 1 author user groups) -->
	<?php if (count ( $this->_tpl_vars['authorUserGroupOptions'] ) > 1): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.submit.userGroup",'description' => "submission.submit.userGroupDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'authorUserGroupId','from' => $this->_tpl_vars['authorUserGroupOptions'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php elseif (count ( $this->_tpl_vars['authorUserGroupOptions'] ) == 1): ?>
		<?php $_from = $this->_tpl_vars['authorUserGroupOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorUserGroupName']):
?><?php $this->assign('authorUserGroupId', $this->_tpl_vars['key']); ?><?php endforeach; endif; unset($_from); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','id' => 'authorUserGroupId','value' => $this->_tpl_vars['authorUserGroupId']), $this);?>

	<?php else: ?>
		<div class="pkp_notification">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => 'submit','notificationStyleClass' => 'notifyError','notificationTitle' => ((is_array($_tmp="common.warning")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)),'notificationContents' => ((is_array($_tmp="author.submit.userGroupRequired")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['copyrightNoticeAgree']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.submit.copyrightNoticeAgreementLabel")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_tpl_vars['copyrightNotice']; ?>

			<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'copyrightNoticeAgree','required' => true,'value' => 1,'label' => "submission.submit.copyrightNoticeAgree",'checked' => $this->_tpl_vars['submissionId']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php echo $this->_tpl_vars['additionalFormContent1']; ?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionLocale.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_tpl_vars['additionalFormContent2']; ?>


		<?php if ($this->_tpl_vars['currentContext']->getLocalizedSetting('submissionChecklist')): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','label' => "submission.submit.submissionChecklist",'description' => "submission.submit.submissionChecklistDescription",'id' => 'pkp_submissionChecklist')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['currentContext']->getLocalizedSetting('submissionChecklist'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checklist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checklist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['checklistId'] => $this->_tpl_vars['checklistItem']):
        $this->_foreach['checklist']['iteration']++;
?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "checklist-".($this->_tpl_vars['checklistId']),'required' => true,'value' => 1,'label' => $this->_tpl_vars['checklistItem']['content'],'translate' => false,'checked' => false), $this);?>

			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'commentsToEditor','title' => "submission.submit.coverNote")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'commentsToEditor','id' => 'commentsToEditor','value' => $this->_tpl_vars['commentsToEditor'],'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'privacyStatement','title' => "submission.submit.privacyStatement")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'privacyStatement','id' => 'privacyStatement','disabled' => true,'value' => $this->_tpl_vars['currentContext']->getLocalizedSetting('privacyStatement'),'rich' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step1Buttons','submitText' => "common.saveAndContinue"), $this);?>


	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</form>