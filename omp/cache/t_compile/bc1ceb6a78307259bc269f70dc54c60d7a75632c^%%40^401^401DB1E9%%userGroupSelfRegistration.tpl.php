<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:04:14
         compiled from user/userGroupSelfRegistration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fbvElement', 'user/userGroupSelfRegistration.tpl', 21, false),)), $this); ?>
<?php $this->assign('contextId', $this->_tpl_vars['context']->getId()); ?>
<?php $_from = $this->_tpl_vars['readerUserGroups'][$this->_tpl_vars['contextId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroup']):
?>
	<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
	<?php if (in_array ( $this->_tpl_vars['userGroup']->getId() , $this->_tpl_vars['userGroupIds'] )): ?>
		<?php $this->assign('checked', true); ?>
	<?php else: ?>
		<?php $this->assign('checked', false); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['userGroup']->getPermitSelfRegistration()): ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "readerGroup-".($this->_tpl_vars['userGroupId']),'name' => "readerGroup[".($this->_tpl_vars['userGroupId'])."]",'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroup']->getLocalizedName(),'translate' => false), $this);?>

	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['authorUserGroups'][$this->_tpl_vars['contextId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroup']):
?>
	<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
	<?php if (in_array ( $this->_tpl_vars['userGroup']->getId() , $this->_tpl_vars['userGroupIds'] )): ?>
		<?php $this->assign('checked', true); ?>
	<?php else: ?>
		<?php $this->assign('checked', false); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['userGroup']->getPermitSelfRegistration()): ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "authorGroup-".($this->_tpl_vars['userGroupId']),'name' => "authorGroup[".($this->_tpl_vars['userGroupId'])."]",'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroup']->getLocalizedName(),'translate' => false), $this);?>

	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['reviewerUserGroups'][$this->_tpl_vars['contextId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroup']):
?>
	<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
	<?php if (in_array ( $this->_tpl_vars['userGroup']->getId() , $this->_tpl_vars['userGroupIds'] )): ?>
		<?php $this->assign('checked', true); ?>
	<?php else: ?>
		<?php $this->assign('checked', false); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['userGroup']->getPermitSelfRegistration()): ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => "reviewerGroup-".($this->_tpl_vars['userGroupId']),'name' => "reviewerGroup[".($this->_tpl_vars['userGroupId'])."]",'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['userGroup']->getLocalizedName(),'translate' => false), $this);?>

	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>