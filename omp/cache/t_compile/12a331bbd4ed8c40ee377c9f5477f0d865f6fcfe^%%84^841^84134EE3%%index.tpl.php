<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:10:09
         compiled from submission/form/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/form/index.tpl', 23, false),array('function', 'translate', 'submission/form/index.tpl', 24, false),array('modifier', 'json_encode', 'submission/form/index.tpl', 23, false),array('modifier', 'escape', 'submission/form/index.tpl', 33, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "submission.submit.title"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#submitTabs').pkpHandler(
			'$.pkp.pages.submission.SubmissionTabHandler',
			{
				submissionProgress: <?php echo $this->_tpl_vars['submissionProgress']; ?>
,
				selected: <?php echo $this->_tpl_vars['submissionProgress']-1; ?>
,
				cancelUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submissions','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				cancelConfirmText: <?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.cancelSubmission"), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<div id="submitTabs" class="pkp_controllers_tab">
	<ul>
		<?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['step'] => $this->_tpl_vars['stepLocaleKey']):
?>
			<li><a name="step-<?php echo ((is_array($_tmp=$this->_tpl_vars['step'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'step','path' => $this->_tpl_vars['step'],'submissionId' => $this->_tpl_vars['submissionId']), $this);?>
"><?php echo $this->_tpl_vars['step']; ?>
. <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stepLocaleKey']), $this);?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>