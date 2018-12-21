<?php /* Smarty version 2.6.25-dev, created on 2018-05-05 00:01:06
         compiled from frontend/components/registrationFormContexts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/registrationFormContexts.tpl', 27, false),)), $this); ?>

<?php if (! $this->_tpl_vars['currentContext']): ?>

		<fieldset name="contexts">
		<legend>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.contextsPrompt"), $this);?>

		</legend>
		<div class="fields">
			<div id="contextOptinGroup" class="context_optin">
				<ul class="contexts">
					<?php $_from = $this->_tpl_vars['contexts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['context']):
?>
						<?php $this->assign('contextId', $this->_tpl_vars['context']->getId()); ?>
						<li class="context">
							<div class="name">
								<?php echo $this->_tpl_vars['context']->getLocalizedName(); ?>

							</div class="name">
							<fieldset class="roles">
								<legend>
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.register.otherContextRoles"), $this);?>

								</legend>
								<?php $_from = $this->_tpl_vars['readerUserGroups'][$this->_tpl_vars['contextId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroup']):
?>
									<?php if ($this->_tpl_vars['userGroup']->getPermitSelfRegistration()): ?>
										<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
										<label>
											<input type="checkbox" name="readerGroup[<?php echo $this->_tpl_vars['userGroupId']; ?>
]"<?php if (in_array ( $this->_tpl_vars['userGroupId'] , $this->_tpl_vars['userGroupIds'] )): ?> checked="checked"<?php endif; ?>>
											<?php echo $this->_tpl_vars['userGroup']->getLocalizedName(); ?>

										</label>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<?php $_from = $this->_tpl_vars['authorUserGroups'][$this->_tpl_vars['contextId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroup']):
?>
									<?php if ($this->_tpl_vars['userGroup']->getPermitSelfRegistration()): ?>
										<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
										<label>
											<input type="checkbox" name="authorGroup[<?php echo $this->_tpl_vars['userGroupId']; ?>
]"<?php if (in_array ( $this->_tpl_vars['userGroupId'] , $this->_tpl_vars['userGroupIds'] )): ?> checked="checked"<?php endif; ?>>
											<?php echo $this->_tpl_vars['userGroup']->getLocalizedName(); ?>

										</label>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<?php $_from = $this->_tpl_vars['reviewerUserGroups'][$this->_tpl_vars['contextId']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userGroup']):
?>
									<?php if ($this->_tpl_vars['userGroup']->getPermitSelfRegistration()): ?>
										<?php $this->assign('userGroupId', $this->_tpl_vars['userGroup']->getId()); ?>
										<label>
											<input type="checkbox" name="reviewerGroup[<?php echo $this->_tpl_vars['userGroupId']; ?>
]"<?php if (in_array ( $this->_tpl_vars['userGroupId'] , $this->_tpl_vars['userGroupIds'] )): ?> checked="checked"<?php endif; ?>>
											<?php echo $this->_tpl_vars['userGroup']->getLocalizedName(); ?>

										</label>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							</fieldset>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
	</fieldset>
<?php endif; ?>