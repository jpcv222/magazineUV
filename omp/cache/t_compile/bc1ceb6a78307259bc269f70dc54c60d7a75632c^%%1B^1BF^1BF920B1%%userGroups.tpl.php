<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:04:14
         compiled from user/userGroups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'user/userGroups.tpl', 13, false),array('block', 'fbvFormSection', 'user/userGroups.tpl', 16, false),array('function', 'translate', 'user/userGroups.tpl', 15, false),array('function', 'fbvElement', 'user/userGroups.tpl', 47, false),array('modifier', 'assign', 'user/userGroups.tpl', 15, false),)), $this); ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'userGroups','title' => "user.roles",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['currentContext']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.registerAs",'contextName' => $this->_tpl_vars['currentContext']->getLocalizedName()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userGroupSectionLabel') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userGroupSectionLabel'));?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => $this->_tpl_vars['userGroupSectionLabel'],'translate' => false,'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/userGroupSelfRegistration.tpl", 'smarty_include_vars' => array('context' => $this->_tpl_vars['currentContext'],'authorUserGroups' => $this->_tpl_vars['authorUserGroups'],'reviewerUserGroups' => $this->_tpl_vars['reviewerUserGroups'],'readerUserGroups' => $this->_tpl_vars['readerUserGroups'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['showOtherContexts']): ?>
		<?php ob_start(); ?>
			<?php $_from = $this->_tpl_vars['contexts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
				<?php if (! $this->_tpl_vars['currentContext'] || $this->_tpl_vars['context']->getId() != $this->_tpl_vars['currentContext']->getId()): ?>
				<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => $this->_tpl_vars['context']->getLocalizedName(),'list' => true,'translate' => false)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "user/userGroupSelfRegistration.tpl", 'smarty_include_vars' => array('context' => $this->_tpl_vars['context'],'authorUserGroups' => $this->_tpl_vars['authorUserGroups'],'reviewerUserGroups' => $this->_tpl_vars['reviewerUserGroups'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('otherContextContent', ob_get_contents());ob_end_clean(); ?>

		<?php if ($this->_tpl_vars['currentContext']): ?>
			<div id="userGroupExtraFormFields" class="pkp_user_group_other_contexts">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'userGroupExtras','widgetWrapper' => "#userGroupExtraFormFields",'moreDetailsText' => "user.profile.form.showOtherContexts",'lessDetailsText' => "user.profile.form.hideOtherContexts",'extraContent' => $this->_tpl_vars['otherContextContent'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php else: ?>
			<?php echo $this->_tpl_vars['otherContextContent']; ?>

		<?php endif; ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'interests')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'interests','id' => 'interests','interests' => $this->_tpl_vars['interests'],'label' => "user.interests"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>