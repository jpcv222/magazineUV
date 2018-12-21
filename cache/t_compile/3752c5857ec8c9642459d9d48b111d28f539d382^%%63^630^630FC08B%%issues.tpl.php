<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 16:12:09
         compiled from manageIssues/issues.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manageIssues/issues.tpl', 23, false),array('function', 'help', 'manageIssues/issues.tpl', 27, false),array('function', 'url', 'manageIssues/issues.tpl', 28, false),array('function', 'load_url_in_div', 'manageIssues/issues.tpl', 29, false),array('modifier', 'assign', 'manageIssues/issues.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "editor.navigation.issues"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#issuesTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="issuesTabs">
	<ul>
		<li><a name="futureIssues" href="#futureIssuesDiv"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
		<li><a name="backIssues" href="#backIssuesDiv"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
	</ul>
	<div id="futureIssuesDiv">
		<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "issue-management.md",'class' => 'pkp_help_tab'), $this);?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.issues.FutureIssueGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'futureIssuesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'futureIssuesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'futureIssuesGridContainer','url' => $this->_tpl_vars['futureIssuesGridUrl']), $this);?>

	</div>
	<div id="backIssuesDiv">
		<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "issue-management.md",'class' => 'pkp_help_tab'), $this);?>

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.issues.BackIssueGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'backIssuesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'backIssuesGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'backIssuesGridContainer','url' => $this->_tpl_vars['backIssuesGridUrl']), $this);?>

	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>