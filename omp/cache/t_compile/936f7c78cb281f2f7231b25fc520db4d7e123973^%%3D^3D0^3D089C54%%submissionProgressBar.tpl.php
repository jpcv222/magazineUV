<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:42:36
         compiled from workflow/submissionProgressBar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'workflow/submissionProgressBar.tpl', 34, false),array('function', 'translate', 'workflow/submissionProgressBar.tpl', 35, false),)), $this); ?>
<?php $this->assign('selectedTabIndex', 0); ?>
<?php $_from = $this->_tpl_vars['workflowStages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stage']):
?>
	<?php if ($this->_tpl_vars['stage']['id'] < $this->_tpl_vars['stageId']): ?>
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
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.workflow.WorkflowTabHandler",'op' => 'fetchTab','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stage']['id'],'escape' => false), $this);?>
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