<?php /* Smarty version 2.6.25-dev, created on 2018-12-21 07:55:55
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 11, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 13, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 15, false),array('function', 'load_header', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 17, false),array('function', 'load_stylesheet', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 18, false),array('function', 'load_script', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 19, false),array('function', 'call_hook', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/pdfJsViewer/templates//display.tpl', 80, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pageTitle",'title' => $this->_tpl_vars['title']), $this);?>
</title>

	<?php echo $this->_plugins['function']['load_header'][0][0]->smartyLoadHeader(array('context' => 'frontend','headers' => $this->_tpl_vars['headers']), $this);?>

	<?php echo $this->_plugins['function']['load_stylesheet'][0][0]->smartyLoadStylesheet(array('context' => 'frontend','stylesheets' => $this->_tpl_vars['stylesheets']), $this);?>

	<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend','scripts' => $this->_tpl_vars['scripts']), $this);?>

</head>
<body class="pkp_page_<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 pkp_op_<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedOp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">

		<header class="header_view">

		<a href="<?php echo $this->_tpl_vars['parentUrl']; ?>
" class="return">
			<span class="pkp_screen_reader">
				<?php if ($this->_tpl_vars['parent'] instanceOf Issue): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.return"), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.return"), $this);?>

				<?php endif; ?>
			</span>
		</a>

		<a href="<?php echo $this->_tpl_vars['parentUrl']; ?>
" class="title">
			<?php echo $this->_tpl_vars['title']; ?>

		</a>

		<a href="<?php echo $this->_tpl_vars['pdfUrl']; ?>
" class="download" download>
			<span class="label">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.download"), $this);?>

			</span>
			<span class="pkp_screen_reader">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.downloadPdf"), $this);?>

			</span>
		</a>

	</header>

	<script type="text/javascript" src="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/pdf.js/build/pdf.js"></script>
	<script type="text/javascript">
		<?php echo '
			$(document).ready(function() {
				PDFJS.workerSrc=\''; ?>
<?php echo $this->_tpl_vars['pluginUrl']; ?>
/pdf.js/build/pdf.worker.js<?php echo '\';
				PDFJS.getDocument('; ?>
'<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
'<?php echo ').then(function(pdf) {
					// Using promise to fetch the page
					pdf.getPage(1).then(function(page) {
						var pdfCanvasContainer = $(\'#pdfCanvasContainer\');
						var canvas = document.getElementById(\'pdfCanvas\');
						canvas.height = pdfCanvasContainer.height();
						canvas.width = pdfCanvasContainer.width()-2; // 1px border each side
						var viewport = page.getViewport(canvas.width / page.getViewport(1.0).width);
						var context = canvas.getContext(\'2d\');
						var renderContext = {
							canvasContext: context,
							viewport: viewport
						};
						page.render(renderContext);
					});
				});
			});
		'; ?>

	</script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/pdf.js/web/viewer.js"></script>

	<div id="pdfCanvasContainer">
		<iframe src="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/pdf.js/web/viewer.html?file=<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" width="100%" height="100%" style="min-height: 500px;" allowfullscreen webkitallowfullscreen></iframe>
	</div>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</body>
</html>