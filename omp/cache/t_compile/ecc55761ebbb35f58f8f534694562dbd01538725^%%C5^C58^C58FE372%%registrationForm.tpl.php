<?php /* Smarty version 2.6.25-dev, created on 2018-05-05 00:01:06
         compiled from frontend/components/registrationForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/registrationForm.tpl', 21, false),array('function', 'html_options', 'frontend/components/registrationForm.tpl', 79, false),array('modifier', 'escape', 'frontend/components/registrationForm.tpl', 33, false),)), $this); ?>
<fieldset class="identity">
	<legend>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile"), $this);?>

	</legend>
	<div class="fields">
		<div class="first_name">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.firstName"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="text" name="firstName" id="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="40" required>
			</label>
		</div>
		<div class="middle_name">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.middleName"), $this);?>

				</span>
				<input type="text" name="middleName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="40">
			</label>
		</div>
		<div class="last_name">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.lastName"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="text" name="lastName" id="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="40" required>
			</label>
		</div>
		<div class="affiliation">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.affiliation"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="text" name="affiliation[<?php echo ((is_array($_tmp=$this->_tpl_vars['primaryLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]" id="affiliation" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'][$this->_tpl_vars['primaryLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" required>
			</label>
		</div>
		<div class="country">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.country"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<select name="country" id="country" required>
					<option></option>
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country']), $this);?>

				</select>
			</label>
		</div>
	</div>
</fieldset>

<fieldset class="login">
	<legend>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login"), $this);?>

	</legend>
	<div class="fields">
		<div class="email">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="text" name="email" id="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="90" required>
			</label>
		</div>
		<div class="username">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="text" name="username" id="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="32" required>
			</label>
		</div>
		<div class="password">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.password"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="password" name="password" id="password" password="true" maxlength="32" required>
			</label>
		</div>
		<div class="password">
			<label>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.repeatPassword"), $this);?>

					<span class="required">*</span>
					<span class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.required"), $this);?>

					</span>
				</span>
				<input type="password" name="password2" id="password2" password="true" maxlength="32" required>
			</label>
		</div>
	</div>
</fieldset>