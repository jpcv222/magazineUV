<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:59:26
         compiled from controllers/informationCenter/submissionHistory.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/informationCenter/submissionHistory.tpl', 11, false),array('function', 'url', 'controllers/informationCenter/submissionHistory.tpl', 13, false),array('function', 'load_url_in_div', 'controllers/informationCenter/submissionHistory.tpl', 14, false),array('modifier', 'assign', 'controllers/informationCenter/submissionHistory.tpl', 13, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow.md",'section' => "editorial-history",'class' => 'pkp_help_tab'), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('params' => $this->_tpl_vars['gridParameters'],'router' => @ROUTE_COMPONENT,'component' => "grid.eventLog.SubmissionEventLogGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionHistoryGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionHistoryGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionHistoryGridContainer','url' => $this->_tpl_vars['submissionHistoryGridUrl']), $this);?>
