<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:58:38
         compiled from controllers/tab/settings/languages/languages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/languages/languages.tpl', 12, false),array('function', 'url', 'controllers/tab/settings/languages/languages.tpl', 15, false),array('function', 'load_url_in_div', 'controllers/tab/settings/languages/languages.tpl', 16, false),array('modifier', 'assign', 'controllers/tab/settings/languages/languages.tpl', 15, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'website','class' => 'pkp_help_tab'), $this);?>


<?php if (in_array ( ROLE_ID_SITE_ADMIN , ( array ) $this->_tpl_vars['userRoles'] ) && ! $this->_tpl_vars['multipleContexts']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.admin.languages.AdminLanguageGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'languagesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'languagesUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'languageGridContainer','url' => $this->_tpl_vars['languagesUrl']), $this);?>

<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.languages.ManageLanguageGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'languagesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'languagesUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'languageGridContainer','url' => $this->_tpl_vars['languagesUrl']), $this);?>

<?php endif; ?>