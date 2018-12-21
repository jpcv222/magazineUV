<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:42:35
         compiled from workflow/workflow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_unsafe_html', 'workflow/workflow.tpl', 16, false),array('modifier', 'concat', 'workflow/workflow.tpl', 18, false),array('modifier', 'assign', 'workflow/workflow.tpl', 36, false),array('function', 'url', 'workflow/workflow.tpl', 36, false),array('function', 'load_url_in_div', 'workflow/workflow.tpl', 37, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('primaryAuthor', $this->_tpl_vars['submission']->getPrimaryAuthor()); ?><?php echo ''; ?><?php if (! $this->_tpl_vars['primaryAuthor']): ?><?php echo ''; ?><?php $this->assign('authors', $this->_tpl_vars['submission']->getAuthors()); ?><?php echo ''; ?><?php $this->assign('primaryAuthor', $this->_tpl_vars['authors'][0]); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('submissionTitleSafe', ((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?><?php echo ''; ?><?php if ($this->_tpl_vars['primaryAuthor']): ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', ((is_array($_tmp=$this->_tpl_vars['primaryAuthor']->getLastName())) ? $this->_run_mod_handler('concat', true, $_tmp, ", ", $this->_tpl_vars['submissionTitleSafe']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, ", ", $this->_tpl_vars['submissionTitleSafe']))); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['submissionTitleSafe']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('suppressPageTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Initialize JS handler.
	$(function() {
		$('#submissionWorkflow').pkpHandler(
			'$.pkp.pages.workflow.WorkflowHandler'
		);
	});
</script>

<div id="submissionWorkflow" class="pkp_submission_workflow">

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionHeader','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'contextId' => 'submission','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionHeaderUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionHeaderUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionHeaderDiv','url' => $this->_tpl_vars['submissionHeaderUrl'],'class' => 'pkp_page_header'), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'workflowNotification','requestOptions' => $this->_tpl_vars['workflowNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>