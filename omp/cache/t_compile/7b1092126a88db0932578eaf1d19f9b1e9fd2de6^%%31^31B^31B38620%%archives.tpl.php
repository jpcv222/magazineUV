<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:43:44
         compiled from dashboard/archives.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'dashboard/archives.tpl', 12, false),array('function', 'url', 'dashboard/archives.tpl', 14, false),array('function', 'load_url_in_div', 'dashboard/archives.tpl', 15, false),array('modifier', 'assign', 'dashboard/archives.tpl', 14, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "submissions.md",'section' => 'archives','class' => 'pkp_help_tab'), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.archivedSubmissions.ArchivedSubmissionsListGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'archivedSubmissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'archivedSubmissionsListGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'archivedSubmissionsListGridContainer','url' => $this->_tpl_vars['archivedSubmissionsListGridUrl']), $this);?>
