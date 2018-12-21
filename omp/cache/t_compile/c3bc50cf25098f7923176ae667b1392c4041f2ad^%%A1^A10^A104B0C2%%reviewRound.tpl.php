<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 03:59:57
         compiled from workflow/reviewRound.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'workflow/reviewRound.tpl', 12, false),array('modifier', 'assign', 'workflow/reviewRound.tpl', 16, false),array('function', 'url', 'workflow/reviewRound.tpl', 16, false),array('function', 'load_url_in_div', 'workflow/reviewRound.tpl', 17, false),)), $this); ?>
<div class="pkp_panel_wrapper">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => ((is_array($_tmp='reviewRoundNotification_')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'requestOptions' => $this->_tpl_vars['reviewRoundNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div class="pkp_context_sidebar">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'workflow','op' => 'editorDecisionActions','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'contextId' => ((is_array($_tmp="reviewRoundTab-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewDecisionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewDecisionsUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp="reviewDecisionsDiv-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'url' => $this->_tpl_vars['reviewDecisionsUrl'],'class' => 'pkp_tab_actions'), $this);?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/workflow/stageParticipants.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

	<div class="pkp_content_panel">

				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.EditorReviewFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewFileSelectionGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewFileSelectionGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp="reviewFileSelection-round_")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'url' => $this->_tpl_vars['reviewFileSelectionGridUrl']), $this);?>


				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.reviewer.ReviewerGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewersGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewersGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp="reviewersGrid-round_")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'url' => $this->_tpl_vars['reviewersGridUrl']), $this);?>


				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.WorkflowReviewRevisionsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'revisionsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'revisionsGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp="revisionsGrid-round_")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['reviewRoundId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['reviewRoundId'])),'url' => $this->_tpl_vars['revisionsGridUrl']), $this);?>

	</div>
</div>