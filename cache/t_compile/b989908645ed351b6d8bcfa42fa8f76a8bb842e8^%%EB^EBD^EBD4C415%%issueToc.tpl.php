<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 16:12:14
         compiled from controllers/grid/issues/issueToc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/grid/issues/issueToc.tpl', 10, false),array('function', 'url', 'controllers/grid/issues/issueToc.tpl', 18, false),array('function', 'load_url_in_div', 'controllers/grid/issues/issueToc.tpl', 19, false),array('modifier', 'assign', 'controllers/grid/issues/issueToc.tpl', 18, false),)), $this); ?>
<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "issue-management.md#edit-issue-toc",'class' => 'pkp_help_tab'), $this);?>

<script>
	$(function() {
		// Attach the form handler.
		$('#issueTocForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.toc.TocGridHandler",'op' => 'fetchGrid','issueId' => $this->_tpl_vars['issue']->getId(),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'issueTocGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'issueTocGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'issueTocGridContainer','url' => $this->_tpl_vars['issueTocGridUrl']), $this);?>
