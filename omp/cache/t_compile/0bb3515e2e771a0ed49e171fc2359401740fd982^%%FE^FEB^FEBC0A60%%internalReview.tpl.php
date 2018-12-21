<?php /* Smarty version 2.6.25-dev, created on 2018-08-24 22:21:30
         compiled from controllers/tab/authorDashboard/internalReview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/authorDashboard/internalReview.tpl', 15, false),array('function', 'load_url_in_div', 'controllers/tab/authorDashboard/internalReview.tpl', 16, false),array('function', 'translate', 'controllers/tab/authorDashboard/internalReview.tpl', 18, false),array('modifier', 'assign', 'controllers/tab/authorDashboard/internalReview.tpl', 15, false),)), $this); ?>

<?php if ($this->_tpl_vars['submission']->getStageId() >= @WORKFLOW_STAGE_ID_INTERNAL_REVIEW && ! $this->_tpl_vars['reviewRounds']->wasEmpty()): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "authorDashboard/reviewRoundTab.tpl", 'smarty_include_vars' => array('reviewRounds' => $this->_tpl_vars['reviewRounds'],'reviewRoundTabsId' => 'internalReviewRoundTabs','lastReviewRoundNumber' => $this->_tpl_vars['lastReviewRoundNumber'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!-- Display queries grid -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => @WORKFLOW_STAGE_ID_INTERNAL_REVIEW,'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>

<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.stageNotInitiated"), $this);?>

<?php endif; ?>