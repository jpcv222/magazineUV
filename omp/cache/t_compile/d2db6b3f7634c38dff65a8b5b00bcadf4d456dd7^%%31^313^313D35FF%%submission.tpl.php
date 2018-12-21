<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:43:48
         compiled from controllers/tab/workflow/submission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/workflow/submission.tpl', 12, false),array('function', 'url', 'controllers/tab/workflow/submission.tpl', 15, false),array('function', 'load_url_in_div', 'controllers/tab/workflow/submission.tpl', 16, false),array('modifier', 'assign', 'controllers/tab/workflow/submission.tpl', 15, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow/submission.md",'class' => 'pkp_help_tab'), $this);?>


<div class="pkp_context_sidebar">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'workflow','op' => 'editorDecisionActions','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'contextId' => 'submission','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionEditorDecisionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionEditorDecisionsUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionEditorDecisionsDiv','url' => $this->_tpl_vars['submissionEditorDecisionsUrl'],'class' => 'pkp_tab_actions'), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/workflow/stageParticipants.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div class="pkp_content_panel">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.EditorSubmissionDetailsFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionFilesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionFilesGridDiv','url' => $this->_tpl_vars['submissionFilesGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>

</div>