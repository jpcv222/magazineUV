<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:59:11
         compiled from controllers/tab/workflow/review.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/workflow/review.tpl', 12, false),array('function', 'url', 'controllers/tab/workflow/review.tpl', 33, false),array('function', 'translate', 'controllers/tab/workflow/review.tpl', 33, false),array('function', 'load_url_in_div', 'controllers/tab/workflow/review.tpl', 45, false),array('modifier', 'assign', 'controllers/tab/workflow/review.tpl', 44, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow/review.md",'class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#reviewTabs').pkpHandler(
			'$.pkp.controllers.TabHandler',
			{
				<?php $this->assign('roundIndex', $this->_tpl_vars['lastReviewRoundNumber']-1); ?>
				selected: <?php echo $this->_tpl_vars['roundIndex']; ?>
,
				disabled: [<?php echo $this->_tpl_vars['lastReviewRoundNumber']; ?>
]
			}
		);
	});
</script>

<?php if ($this->_tpl_vars['reviewRounds']): ?>
	<div id="reviewTabs" class="pkp_controllers_tab">
		<ul>
			<?php $_from = $this->_tpl_vars['reviewRounds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewRound']):
?>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.workflow.ReviewRoundTabHandler",'op' => $this->_tpl_vars['reviewRoundOp'],'submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['reviewRound']->getStageId(),'reviewRoundId' => $this->_tpl_vars['reviewRound']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.round",'round' => $this->_tpl_vars['reviewRound']->getRound()), $this);?>
</a>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['newRoundAction']): ?>
				<li>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('image' => 'add_item','action' => $this->_tpl_vars['newRoundAction'],'contextId' => 'newRoundTabContainer')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			<?php endif; ?>
		</ul>
	</div>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.queries.QueriesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submission']->getId(),'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'queriesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'queriesGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'queriesGrid','url' => $this->_tpl_vars['queriesGridUrl']), $this);?>

<?php else: ?>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.review.notInitiated"), $this);?>
</p>
<?php endif; ?>
</div>