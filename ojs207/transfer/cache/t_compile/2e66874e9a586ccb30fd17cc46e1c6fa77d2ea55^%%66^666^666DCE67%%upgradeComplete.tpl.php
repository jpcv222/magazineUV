<?php /* Smarty version 2.6.25-dev, created on 2017-08-12 12:51:01
         compiled from install/upgradeComplete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'install/upgradeComplete.tpl', 14, false),array('modifier', 'escape', 'install/upgradeComplete.tpl', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('pageTitle' => "installer.upgradeApplication")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="pkp_page_content pkp_page_upgrade_complete">
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.upgradeComplete",'version' => $this->_tpl_vars['newVersion']->getVersionString(false)), $this);?>


	<?php if (! empty ( $this->_tpl_vars['notes'] )): ?>
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.releaseNotes"), $this);?>
</h4>
		<?php $_from = $this->_tpl_vars['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['note']):
?>
			<p><pre style="font-size: 125%"><?php echo ((is_array($_tmp=$this->_tpl_vars['note'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</pre></p>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['writeConfigFailed']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.overwriteConfigFileInstructions"), $this);?>


		<form class="pkp_form" action="#">
			<p>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "installer.contentsOfConfigFile"), $this);?>
:<br />
				<textarea name="config" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width"><?php echo ((is_array($_tmp=$this->_tpl_vars['configFileContents'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
			</p>
		</form>
	<?php endif; ?>
</div><!-- .pkp_page_upgrade_complete -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>