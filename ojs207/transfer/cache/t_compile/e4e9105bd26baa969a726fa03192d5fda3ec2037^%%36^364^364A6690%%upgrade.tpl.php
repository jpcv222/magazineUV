<?php /* Smarty version 2.6.25-dev, created on 2017-08-12 12:35:06
         compiled from install/upgrade.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/upgrade.tpl', 13, false),array('function', 'url', 'install/upgrade.tpl', 15, false),array('function', 'fbvElement', 'install/upgrade.tpl', 28, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "installer.upgradeApplication")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="pkp_page_content pkp_page_upgrade">
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.upgradeInstructions",'version' => $this->_tpl_vars['version']->getVersionString(false),'baseUrl' => $this->_tpl_vars['baseUrl']), $this);?>


	<form class="pkp_form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'installUpgrade'), $this);?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if ($this->_tpl_vars['isInstallError']): ?>
			<p>
				<span class="pkp_form_error"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.installErrorsOccurred"), $this);?>
:</span>
				<ul class="pkp_form_error_list">
					<li><?php if ($this->_tpl_vars['dbErrorMsg']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.error.databaseError",'error' => $this->_tpl_vars['dbErrorMsg']), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['errorMsg']), $this);?>
<?php endif; ?></li>
				</ul>
			</p>
		<?php endif; ?>

		<div class="formButtons">
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('class' => 'inline','type' => 'submit','id' => 'installButton','label' => "installer.upgradeApplication"), $this);?>

		</div>

	</form>
</div><!-- .pkp_page_upgrade -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>