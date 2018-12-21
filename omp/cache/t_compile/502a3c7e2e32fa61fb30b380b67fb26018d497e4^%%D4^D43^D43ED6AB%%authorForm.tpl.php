<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:19:03
         compiled from controllers/grid/users/author/form/authorForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/author/form/authorForm.tpl', 21, false),array('function', 'csrf', 'controllers/grid/users/author/form/authorForm.tpl', 22, false),array('function', 'fbvElement', 'controllers/grid/users/author/form/authorForm.tpl', 46, false),array('function', 'translate', 'controllers/grid/users/author/form/authorForm.tpl', 65, false),array('function', 'fbvFormButtons', 'controllers/grid/users/author/form/authorForm.tpl', 66, false),array('block', 'fbvFormArea', 'controllers/grid/users/author/form/authorForm.tpl', 42, false),array('block', 'fbvFormSection', 'controllers/grid/users/author/form/authorForm.tpl', 43, false),array('block', 'iterate', 'controllers/grid/users/author/form/authorForm.tpl', 44, false),array('modifier', 'concat', 'controllers/grid/users/author/form/authorForm.tpl', 46, false),array('modifier', 'escape', 'controllers/grid/users/author/form/authorForm.tpl', 56, false),)), $this); ?>

<script>
	// Attach the Information Center handler.
	$(function() {
		$('#editAuthor').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler'
		);
	});
</script>

<form class="pkp_form" id="editAuthor" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateAuthor','authorId' => $this->_tpl_vars['authorId']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'authorFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/userDetails.tpl", 'smarty_include_vars' => array('disableUserNameSection' => true,'disableAuthSourceSection' => true,'disablePasswordSection' => true,'disableSendNotifySection' => true,'disableGenderSection' => true,'disableSalutationSection' => true,'disableInitialsSection' => true,'disablePhoneSection' => true,'disableLocaleSection' => true,'disableInterestsSection' => true,'disableMailingSection' => true,'disableSignatureSection' => true,'extraContentSectionUnfolded' => true,'countryRequired' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'submissionSpecific')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('id' => 'userGroupId','title' => "submission.submit.contributorRole",'list' => true,'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'authorUserGroups','item' => 'userGroup')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if ($this->_tpl_vars['userGroupId'] == $this->_tpl_vars['userGroup']->getId()): ?><?php $this->assign('checked', true); ?><?php else: ?><?php $this->assign('checked', false); ?><?php endif; ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => ((is_array($_tmp='userGroup')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['userGroup']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['userGroup']->getId())),'name' => 'userGroupId','value' => $this->_tpl_vars['userGroup']->getId(),'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroup']->getLocalizedName(),'translate' => false), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "submission.submit.selectPrincipalContact",'id' => 'primaryContact','checked' => $this->_tpl_vars['primaryContact']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "submission.submit.includeInBrowse",'id' => 'includeInBrowse','checked' => $this->_tpl_vars['includeInBrowse']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['submissionId']): ?>
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php endif; ?>
	<?php if ($this->_tpl_vars['gridId']): ?>
		<input type="hidden" name="gridId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php endif; ?>
	<?php if ($this->_tpl_vars['rowId']): ?>
		<input type="hidden" name="rowId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php endif; ?>

	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step2Buttons','submitText' => "common.save"), $this);?>

</form>