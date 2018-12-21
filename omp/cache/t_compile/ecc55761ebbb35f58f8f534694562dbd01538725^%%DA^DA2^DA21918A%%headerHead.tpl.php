<?php /* Smarty version 2.6.25-dev, created on 2018-05-05 00:01:06
         compiled from frontend/components/headerHead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/components/headerHead.tpl', 11, false),array('modifier', 'strip_tags', 'frontend/components/headerHead.tpl', 15, false),array('modifier', 'default', 'frontend/components/headerHead.tpl', 17, false),array('function', 'load_header', 'frontend/components/headerHead.tpl', 22, false),array('function', 'load_stylesheet', 'frontend/components/headerHead.tpl', 23, false),)), $this); ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="AMX SOFT |  AMX-SOFTWARE.COM">
	<title>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitleTranslated'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

				<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 'index') : smarty_modifier_default($_tmp, 'index')) != 'index' && $this->_tpl_vars['currentContext'] && $this->_tpl_vars['currentContext']->getLocalizedName()): ?>
			| <?php echo $this->_tpl_vars['currentContext']->getLocalizedName(); ?>

		<?php endif; ?>
	</title>

	<?php echo $this->_plugins['function']['load_header'][0][0]->smartyLoadHeader(array('context' => 'frontend'), $this);?>

	<?php echo $this->_plugins['function']['load_stylesheet'][0][0]->smartyLoadStylesheet(array('context' => 'frontend'), $this);?>

	<link rel="stylesheet" href="http://revistas.univalle.edu.co/public/site/font-awesome-470/css/font-awesome.min.css">
</head>