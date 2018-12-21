<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 15:39:14
         compiled from frontend/pages/viewFile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/pages/viewFile.tpl', 18, false),array('function', 'translate', 'frontend/pages/viewFile.tpl', 25, false),array('function', 'load_header', 'frontend/pages/viewFile.tpl', 27, false),array('function', 'load_stylesheet', 'frontend/pages/viewFile.tpl', 28, false),array('function', 'load_script', 'frontend/pages/viewFile.tpl', 57, false),array('function', 'call_hook', 'frontend/pages/viewFile.tpl', 58, false),array('modifier', 'assign', 'frontend/pages/viewFile.tpl', 18, false),array('modifier', 'replace', 'frontend/pages/viewFile.tpl', 21, false),array('modifier', 'escape', 'frontend/pages/viewFile.tpl', 23, false),)), $this); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['publishedMonograph']->getBestId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'parentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'parentUrl'));?>


<!DOCTYPE html>
<html lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.viewableFile.title",'type' => ((is_array($_tmp=$this->_tpl_vars['publicationFormat']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)),'title' => ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
</title>

	<?php echo $this->_plugins['function']['load_header'][0][0]->smartyLoadHeader(array('context' => 'frontend','headers' => $this->_tpl_vars['headers']), $this);?>

	<?php echo $this->_plugins['function']['load_stylesheet'][0][0]->smartyLoadStylesheet(array('context' => 'frontend','stylesheets' => $this->_tpl_vars['stylesheets']), $this);?>

</head>
<body class="pkp_page_<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 pkp_op_<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedOp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">

		<header class="header_viewable_file">

		<a href="<?php echo $this->_tpl_vars['parentUrl']; ?>
" class="return">
			<span class="pkp_screen_reader">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.viewableFile.return",'monographTitle' => ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>

			</span>
		</a>

		<span class="title">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</span>

		<?php if ($this->_tpl_vars['downloadUrl']): ?>
			<a href="<?php echo $this->_tpl_vars['downloadUrl']; ?>
" class="download" download>
				<span class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.download"), $this);?>

				</span>
			</a>
		<?php endif; ?>

	</header>

	<?php echo $this->_tpl_vars['viewableFileContent']; ?>


	<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend','scripts' => $this->_tpl_vars['scripts']), $this);?>

	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>


</body>
</html>