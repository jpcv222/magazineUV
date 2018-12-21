<?php /* Smarty version 2.6.25-dev, created on 2018-05-19 05:15:34
         compiled from frontend/pages/userLostPassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/userLostPassword.tpl', 16, false),array('function', 'url', 'frontend/pages/userLostPassword.tpl', 18, false),array('function', 'csrf', 'frontend/pages/userLostPassword.tpl', 19, false),array('modifier', 'escape', 'frontend/pages/userLostPassword.tpl', 36, false),array('modifier', 'assign', 'frontend/pages/userLostPassword.tpl', 45, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "user.login.resetPassword")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_lost_password">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "user.login.resetPassword")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.resetPasswordInstructions"), $this);?>
</p>

	<form class="cmp_form lost_password" id="lostPasswordForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'requestResetPassword'), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php if ($this->_tpl_vars['error']): ?>
			<div class="pkp_form_error">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['error']), $this);?>

			</div>
		<?php endif; ?>

		<fieldset class="fields">
			<div class="email">
				<label>
					<span class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registeredEmail"), $this);?>

						<span class="required">*</span>
						<span class="pkp_screen_reader">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

						</span>
					</span>
					<input type="text" name="email" id="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" required>
				</label>
			</div>
			<div class="buttons">
				<button class="submit" type="submit">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.resetPassword"), $this);?>

				</button>

				<?php if (! $this->_tpl_vars['disableUserReg']): ?>
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register','source' => $this->_tpl_vars['source']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'registerUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'registerUrl'));?>

					<a href="<?php echo $this->_tpl_vars['registerUrl']; ?>
" class="register">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registerNewAccount"), $this);?>

					</a>
				<?php endif; ?>
			</div>
		</fieldset>

	</form>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>