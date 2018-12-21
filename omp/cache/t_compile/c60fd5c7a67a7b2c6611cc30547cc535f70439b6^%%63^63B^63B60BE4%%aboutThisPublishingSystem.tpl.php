<?php /* Smarty version 2.6.25-dev, created on 2018-05-24 05:27:20
         compiled from frontend/pages/aboutThisPublishingSystem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/aboutThisPublishingSystem.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "about.aboutThisPublishingSystem")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_about_publishing_system">
	<h1 class="page_title">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>

	</h1>

	<p>
		<?php if ($this->_tpl_vars['currentPress']): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutOMPPress",'ompVersion' => $this->_tpl_vars['appVersion']), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutOMPSite",'ompVersion' => $this->_tpl_vars['appVersion']), $this);?>

		<?php endif; ?>
	</p>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>