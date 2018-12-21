<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:38
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//articleGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//articleGalley.tpl', 10, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//articleGalley.tpl', 13, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//articleGalley.tpl', 13, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//articleGalley.tpl', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']))),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'xmlUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'xmlUrl'));?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pluginTemplatePath'])."/display.tpl", 'smarty_include_vars' => array('xmlUrl' => $this->_tpl_vars['xmlUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>