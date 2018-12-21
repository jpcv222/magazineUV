<?php /* Smarty version 2.6.25-dev, created on 2018-08-24 22:21:04
         compiled from controllers/tab/authorDashboard/submission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/authorDashboard/submission.tpl', 10, false),array('function', 'load_url_in_div', 'controllers/tab/authorDashboard/submission.tpl', 11, false),array('modifier', 'assign', 'controllers/tab/authorDashboard/submission.tpl', 10, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.AuthorSubmissionDetailsFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionFilesGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionFilesGridDiv','url' => $this->_tpl_vars['submissionFilesGridUrl']), $this);?>


<div id="documentsContent">
	<!-- Display queries grid -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => @WORKFLOW_STAGE_ID_SUBMISSION,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>

</div>