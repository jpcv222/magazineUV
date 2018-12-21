<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 16:12:23
         compiled from controllers/modals/submissionMetadata/issueEntryTabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/modals/submissionMetadata/issueEntryTabs.tpl', 28, false),array('function', 'translate', 'controllers/modals/submissionMetadata/issueEntryTabs.tpl', 28, false),)), $this); ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#newIssueEntryTabs').pkpHandler(
				'$.pkp.controllers.tab.issueEntry.IssueEntryTabHandler',
				{
					<?php if ($this->_tpl_vars['selectedTab']): ?>selected:<?php echo $this->_tpl_vars['selectedTab']; ?>
,<?php endif; ?>
					<?php if ($this->_tpl_vars['tabsUrl']): ?>tabsUrl:'<?php echo $this->_tpl_vars['tabsUrl']; ?>
',<?php endif; ?>
					<?php if ($this->_tpl_vars['tabContentUrl']): ?>tabContentUrl:'<?php echo $this->_tpl_vars['tabContentUrl']; ?>
',<?php endif; ?>
					emptyLastTab: true
				});
	});
</script>
<div id="newIssueEntryTabs">
	<ul>
		<li>
			<a name="submission" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.issueEntry.IssueEntryTabHandler",'tab' => 'submission','op' => 'submissionMetadata','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '0'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.issueEntry.submissionMetadata"), $this);?>
</a>
		</li>
		<li>
			<a name="catalog" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.issueEntry.IssueEntryTabHandler",'tab' => 'identifiers','op' => 'identifiers','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '1'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.identifiers"), $this);?>
</a>
		</li>
</ul>