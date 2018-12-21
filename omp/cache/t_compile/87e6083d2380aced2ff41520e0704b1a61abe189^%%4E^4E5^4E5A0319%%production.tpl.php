<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:42:37
         compiled from controllers/tab/workflow/production.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/workflow/production.tpl', 14, false),array('function', 'url', 'controllers/tab/workflow/production.tpl', 23, false),array('function', 'load_url_in_div', 'controllers/tab/workflow/production.tpl', 24, false),array('modifier', 'assign', 'controllers/tab/workflow/production.tpl', 23, false),array('modifier', 'uniqid', 'controllers/tab/workflow/production.tpl', 30, false),)), $this); ?>

<div id="production">

		<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow/production.md",'class' => 'pkp_help_tab'), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'productionNotification','requestOptions' => $this->_tpl_vars['productionNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<div class="pkp_context_sidebar">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/workflow/stageParticipants.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>

	<div class="pkp_content_panel">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.productionReady.ProductionReadyFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'productionReadyFilesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'productionReadyFilesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'productionReadyFilesGridDiv','url' => $this->_tpl_vars['productionReadyFilesGridUrl']), $this);?>


		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>


		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'representationsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'representationsGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => ((is_array($_tmp='formatsGridContainer')) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)),'url' => $this->_tpl_vars['representationsGridUrl']), $this);?>

	</div>
</div>