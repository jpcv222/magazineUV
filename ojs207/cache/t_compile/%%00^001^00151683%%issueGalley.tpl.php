<?php /* Smarty version 2.6.26, created on 2017-08-17 14:07:57
         compiled from issue/issueGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'issue/issueGalley.tpl', 11, false),array('function', 'translate', 'issue/issueGalley.tpl', 12, false),array('modifier', 'to_array', 'issue/issueGalley.tpl', 11, false),array('modifier', 'assign', 'issue/issueGalley.tpl', 11, false),array('modifier', 'escape', 'issue/issueGalley.tpl', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewFile','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pdfUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pdfUrl'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'article.pdf.pluginMissing'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'noPluginText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'noPluginText'));?>

<script type="text/javascript"><!--<?php echo '
	$(document).ready(function(){
		if ($.browser.webkit) { // PDFObject does not correctly work with safari\'s built-in PDF viewer
			var embedCode = "<object id=\'pdfObject\' type=\'application/pdf\' data=\''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '\' width=\'99%\' height=\'99%\'><div id=\'pluginMissing\'>'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['noPluginText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '</div></object>";
			$("#inlinePdf").html(embedCode);
			if($("#pluginMissing").is(":hidden")) {
				$(\'#fullscreenShow\').show();
				$("#inlinePdf").resizable({ containment: \'parent\', handles: \'se\' });
			} else { // Chrome Mac hides the embed object, obscuring the text.  Reinsert.
				$("#inlinePdf").html(\''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['noPluginText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '\');
			}
		} else {
			var success = new PDFObject({ url: "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '" }).embed("inlinePdf");
			if (success) {
				// PDF was embedded; enable fullscreen mode and the resizable widget
				$(\'#fullscreenShow\').show();
				$("#inlinePdfResizer").resizable({ containment: \'parent\', handles: \'se\' });
			}
		}
	});
'; ?>

// -->
</script>
<div id="inlinePdfResizer">
	<div id="inlinePdf" class="ui-widget-content">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.pluginMissing"), $this);?>

	</div>
</div>
<p>
		<a class="action" target="_parent" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.download"), $this);?>
</a>
	<a class="action" href="#" id="fullscreenShow"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fullscreen"), $this);?>
</a>
	<a class="action" href="#" id="fullscreenHide"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fullscreenOff"), $this);?>
</a>
</p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>