<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:43:32
         compiled from controllers/tab/workflow/editorial.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/tab/workflow/editorial.tpl', 12, false),array('modifier', 'assign', 'controllers/tab/workflow/editorial.tpl', 18, false),array('function', 'help', 'controllers/tab/workflow/editorial.tpl', 15, false),array('function', 'url', 'controllers/tab/workflow/editorial.tpl', 18, false),array('function', 'load_url_in_div', 'controllers/tab/workflow/editorial.tpl', 19, false),)), $this); ?>
<div id="editorial">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => ((is_array($_tmp='editingNotification_')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['submission']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['submission']->getId())),'requestOptions' => $this->_tpl_vars['editingNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow/copyediting.md",'class' => 'pkp_help_tab'), $this);?>


	<div class="pkp_context_sidebar">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'workflow','op' => 'editorDecisionActions','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'copyeditingEditorDecisionsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'copyeditingEditorDecisionsUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'copyeditingEditorDecisionsDiv','url' => $this->_tpl_vars['copyeditingEditorDecisionsUrl'],'class' => 'editorDecisionActions pkp_tab_actions'), $this);?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/workflow/stageParticipants.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

	<div class="pkp_content_panel">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.final.FinalDraftFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'finalDraftFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'finalDraftFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'finalDraftFilesGrid','url' => $this->_tpl_vars['finalDraftFilesGridUrl']), $this);?>


		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>


		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.copyedit.CopyeditFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'copyeditedFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'copyeditedFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'copyeditedFilesGrid','url' => $this->_tpl_vars['copyeditedFilesGridUrl']), $this);?>

	</div>

</div>