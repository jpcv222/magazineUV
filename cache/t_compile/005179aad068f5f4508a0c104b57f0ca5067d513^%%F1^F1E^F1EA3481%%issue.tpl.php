<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 16:12:14
         compiled from controllers/grid/issues/issue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/issues/issue.tpl', 18, false),array('function', 'translate', 'controllers/grid/issues/issue.tpl', 18, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editIssueTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="editIssueTabs">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'issueToc','issueId' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'editIssueData','issueId' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.issueData"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'issueGalleys','issueId' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.galleys"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'identifiers','issueId' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.identifiers"), $this);?>
</a></li>
	</ul>
</div>