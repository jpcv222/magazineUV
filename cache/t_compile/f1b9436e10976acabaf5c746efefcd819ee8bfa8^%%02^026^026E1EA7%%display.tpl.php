<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:38
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//display.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/lensGalley/templates//display.tpl', 17, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['jQueryUrl']; ?>
"></script>
<script src="<?php echo $this->_tpl_vars['pluginLensPath']; ?>
/lens.js"></script>
<script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/javascript"><?php echo '

	var linkElement = document.createElement("link");
	linkElement.rel = "stylesheet";
	linkElement.href = "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pluginLensPath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
<?php echo '/lens.css"; //Replace here
	document.head.appendChild(linkElement);
	
	replace_images  = '; ?>
<?php echo $this->_tpl_vars['replaceImages']; ?>
<?php echo ';
	translate  = '; ?>
<?php echo $this->_tpl_vars['translationStrings']; ?>
<?php echo ';

	
	$(document).ready(function(){
		var app = new Lens({
			document_url: "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['xmlUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
<?php echo '"
		});
		app.start();
		window.app = app;
	});
'; ?>
</script>