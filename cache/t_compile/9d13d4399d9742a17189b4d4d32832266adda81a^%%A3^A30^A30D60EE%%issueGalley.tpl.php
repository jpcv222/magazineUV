<?php /* Smarty version 2.6.25-dev, created on 2018-12-21 07:55:55
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//issueGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//issueGalley.tpl', 10, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//issueGalley.tpl', 10, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//issueGalley.tpl', 10, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']))),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pdfUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pdfUrl'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'parentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'parentUrl'));?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pluginTemplatePath'])."/display.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['issue']->getIssueSeries(),'parentUrl' => $this->_tpl_vars['parentUrl'],'pdfUrl' => $this->_tpl_vars['pdfUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>