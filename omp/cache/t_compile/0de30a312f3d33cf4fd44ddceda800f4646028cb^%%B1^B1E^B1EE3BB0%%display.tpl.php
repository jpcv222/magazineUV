<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 15:39:14
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/viewableFiles/pdfJsViewer/templates/display.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/viewableFiles/pdfJsViewer/templates/display.tpl', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/monographFile_dublinCore.tpl", 'smarty_include_vars' => array('monograph' => $this->_tpl_vars['publishedMonograph'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/monographFile_googleScholar.tpl", 'smarty_include_vars' => array('monograph' => $this->_tpl_vars['publishedMonograph'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="viewable_file_frame">
    <iframe class="viewable_file_frame" src="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/pdf.js/web/viewer.html?file=<?php echo ((is_array($_tmp=$this->_tpl_vars['downloadUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" allowfullscreen webkitallowfullscreen></iframe>
</div>