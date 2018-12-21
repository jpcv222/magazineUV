<?php /* Smarty version 2.6.25-dev, created on 2018-05-29 10:18:17
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 24, false),array('function', 'plugin_url', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 35, false),array('function', 'csrf', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 43, false),array('function', 'fbvFormButtons', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 54, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 71, false),array('function', 'load_url_in_div', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 72, false),array('modifier', 'json_encode', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 35, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 71, false),array('block', 'fbvFormArea', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 44, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/importexport/native/templates/index.tpl', 49, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.native.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#importExportTabs').pkpHandler('$.pkp.controllers.TabHandler');
		$('#importExportTabs').tabs('option', 'cache', true);
	});
</script>
<div id="importExportTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="#import-tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.import"), $this);?>
</a></li>
		<li><a href="#export-tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.export"), $this);?>
</a></li>
	</ul>
	<div id="import-tab">
		<script type="text/javascript">
			$(function() {
				// Attach the form handler.
				$('#importXmlForm').pkpHandler('$.pkp.controllers.form.FileUploadFormHandler',
					{
						$uploader: $('#plupload'),
							uploaderOptions: {
								uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['plugin_url'][0][0]->pluginUrl(array('path' => 'uploadImportXML','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
								baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

							}
					}
				);
			});
		</script>
		<form id="importXmlForm" class="pkp_form" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->pluginUrl(array('path' => 'importBounce'), $this);?>
" method="post">
			<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

			<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'importForm')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />

				<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "plugins.importexport.native.import.instructions")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

				<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "plugins.importexport.native.import",'hideCancel' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</form>
	</div>
	<div id="export-tab">
		<?php if (! $this->_tpl_vars['currentContext']->getSetting('publisher') || ! $this->_tpl_vars['currentContext']->getSetting('location') || ! $this->_tpl_vars['currentContext']->getSetting('codeType') || ! $this->_tpl_vars['currentContext']->getSetting('codeValue')): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.native.onix30.pressMissingFields"), $this);?>

		<?php endif; ?>
		<script type="text/javascript">
			$(function() {
				// Attach the form handler.
				$('#exportXmlForm').pkpHandler('$.pkp.controllers.form.FormHandler');
			});
		</script>
		<form id="exportXmlForm" class="pkp_form" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->pluginUrl(array('path' => 'export'), $this);?>
" method="post">
			<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

			<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'exportForm')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.submissions.exportableSubmissions.ExportableSubmissionsListGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionsListGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionsListGridUrl'));?>

				<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionsListGridContainer','url' => $this->_tpl_vars['submissionsListGridUrl']), $this);?>

				<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "plugins.importexport.native.export",'hideCancel' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</form>
	</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>