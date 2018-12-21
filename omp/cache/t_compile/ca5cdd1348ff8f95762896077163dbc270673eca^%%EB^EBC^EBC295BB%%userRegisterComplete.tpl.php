<?php /* Smarty version 2.6.25-dev, created on 2018-07-22 05:42:39
         compiled from frontend/pages/userRegisterComplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/userRegisterComplete.tpl', 15, false),array('function', 'url', 'frontend/pages/userRegisterComplete.tpl', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_register_complete">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => $this->_tpl_vars['pageTitle'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<p>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registrationComplete.instructions"), $this);?>

	</p>
	<ul class="registration_complete_actions">
		<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR , ROLE_ID_ASSISTANT , ROLE_ID_REVIEWER ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
			<li class="view_submissions">
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submissions'), $this);?>
">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registrationComplete.manageSubmissions"), $this);?>

				</a>
			</li>
		<?php endif; ?>
		<li class="new_submission">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submission','op' => 'wizard'), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registrationComplete.newSubmission"), $this);?>

			</a>
		</li>
		<li class="edit_profile">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'user','op' => 'profile'), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.editMyProfile"), $this);?>

			</a>
		</li>
		<li class="browse">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registrationComplete.continueBrowsing"), $this);?>

			</a>
		</li>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>