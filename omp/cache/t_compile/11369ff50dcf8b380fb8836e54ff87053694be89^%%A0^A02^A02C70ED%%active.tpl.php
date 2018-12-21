<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:42:31
         compiled from dashboard/active.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'dashboard/active.tpl', 12, false),array('function', 'url', 'dashboard/active.tpl', 15, false),array('function', 'load_url_in_div', 'dashboard/active.tpl', 16, false),array('modifier', 'assign', 'dashboard/active.tpl', 15, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "submissions.md",'section' => 'active','class' => 'pkp_help_tab'), $this);?>


<!-- Archived submissions grid: Show all archived submissions -->
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.activeSubmissions.ActiveSubmissionsListGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'activeSubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'activeSubmissionsListGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'activeSubmissionsListGridContainer','url' => $this->_tpl_vars['activeSubmissionsListGridUrl']), $this);?>
