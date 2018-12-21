<?php /* Smarty version 2.6.25-dev, created on 2018-08-24 22:21:03
         compiled from authorDashboard/authorDashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_unsafe_html', 'authorDashboard/authorDashboard.tpl', 16, false),array('modifier', 'concat', 'authorDashboard/authorDashboard.tpl', 18, false),array('function', 'translate', 'authorDashboard/authorDashboard.tpl', 30, false),array('function', 'url', 'authorDashboard/authorDashboard.tpl', 78, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('primaryAuthor', $this->_tpl_vars['submission']->getPrimaryAuthor()); ?><?php echo ''; ?><?php if (! $this->_tpl_vars['primaryAuthor']): ?><?php echo ''; ?><?php $this->assign('authors', $this->_tpl_vars['submission']->getAuthors()); ?><?php echo ''; ?><?php $this->assign('primaryAuthor', $this->_tpl_vars['authors'][0]); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('submissionTitleSafe', ((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?><?php echo ''; ?><?php if ($this->_tpl_vars['primaryAuthor']): ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', ((is_array($_tmp=$this->_tpl_vars['primaryAuthor']->getLastName())) ? $this->_run_mod_handler('concat', true, $_tmp, ", ", $this->_tpl_vars['submissionTitleSafe']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, ", ", $this->_tpl_vars['submissionTitleSafe']))); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['submissionTitleSafe']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array('suppressPageTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="submissionWorkflow" class="pkp_submission_workflow">

	<div id="submissionHeader" class="pkp_page_header">
		<div class="pkp_page_title">
			<h1 class="pkp_submission_title">
				<span class="pkp_screen_reader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submissionTitle"), $this);?>
</span>
				<?php echo $this->_tpl_vars['submission']->getLocalizedTitle(); ?>

			</h1>
			<div class="pkp_submission_author">
				<span class="pkp_screen_reader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author_s"), $this);?>
</span>
				<?php echo $this->_tpl_vars['submission']->getAuthorString(); ?>

			</div>
			<ul class="pkp_submission_actions">
				<?php if ($this->_tpl_vars['uploadFileAction']): ?>
					<li>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['uploadFileAction'],'contextId' => 'authorDashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					</li>
				<?php endif; ?>
				<li>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['submissionLibraryAction'],'contextId' => 'authorDashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
				<li>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['viewMetadataAction'],'contextId' => 'authorDashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			</ul>
		</div>
	</div>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'authorDashboardNotification','requestOptions' => $this->_tpl_vars['authorDashboardNotificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->assign('selectedTabIndex', 0); ?>
	<?php $_from = $this->_tpl_vars['workflowStages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stage']):
?>
		<?php if ($this->_tpl_vars['stage']['id'] < $this->_tpl_vars['submission']->getStageId()): ?>
			<?php $this->assign('selectedTabIndex', $this->_tpl_vars['selectedTabIndex']+1); ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>

	<script type="text/javascript">
		// Attach the JS file tab handler.
		$(function() {
			$('#stageTabs').pkpHandler(
				'$.pkp.controllers.tab.workflow.WorkflowTabHandler',
				{
					selected: <?php echo $this->_tpl_vars['selectedTabIndex']; ?>
,
					emptyLastTab: true
				}
			);
		});
	</script>
	<div id="stageTabs" class="pkp_controllers_tab">
		<ul>
			<?php $_from = $this->_tpl_vars['workflowStages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stage']):
?>
				<li class="pkp_workflow_<?php echo $this->_tpl_vars['stage']['path']; ?>
 stageId<?php echo $this->_tpl_vars['stage']['id']; ?>
<?php if ($this->_tpl_vars['stage']['statusKey']): ?> initiated<?php endif; ?>">
					<a name="stage-<?php echo $this->_tpl_vars['stage']['path']; ?>
" class="<?php echo $this->_tpl_vars['stage']['path']; ?>
 stageId<?php echo $this->_tpl_vars['stage']['id']; ?>
" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.authorDashboard.AuthorDashboardTabHandler",'op' => 'fetchTab','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stage']['id'],'escape' => false), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stage']['translationKey']), $this);?>

						<?php if ($this->_tpl_vars['stage']['statusKey']): ?>
							<span class="pkp_screen_reader">
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stage']['statusKey']), $this);?>

							</span>
						<?php endif; ?>
					</a>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>