<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:06:48
         compiled from controllers/grid/settings/series/form/seriesForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/series/form/seriesForm.tpl', 20, false),array('function', 'csrf', 'controllers/grid/settings/series/form/seriesForm.tpl', 34, false),array('function', 'translate', 'controllers/grid/settings/series/form/seriesForm.tpl', 46, false),array('function', 'fbvElement', 'controllers/grid/settings/series/form/seriesForm.tpl', 53, false),array('function', 'load_url_in_div', 'controllers/grid/settings/series/form/seriesForm.tpl', 86, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/series/form/seriesForm.tpl', 109, false),array('modifier', 'json_encode', 'controllers/grid/settings/series/form/seriesForm.tpl', 20, false),array('modifier', 'assign', 'controllers/grid/settings/series/form/seriesForm.tpl', 46, false),array('modifier', 'escape', 'controllers/grid/settings/series/form/seriesForm.tpl', 47, false),array('block', 'fbvFormArea', 'controllers/grid/settings/series/form/seriesForm.tpl', 37, false),array('block', 'fbvFormSection', 'controllers/grid/settings/series/form/seriesForm.tpl', 38, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#seriesForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				publishChangeEvents: ['updateSidebar'],
				$uploader: $('#plupload'),
				uploaderOptions: {
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadImage','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
,
					filters: {
						mime_types : [
							{ title : "Image files", extensions : "jpg,jpeg,png" }
						]
					}
				}
			}
		);
	});
</script>

<form class="pkp_form" id="seriesForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.series.SeriesGridHandler",'op' => 'updateSeries','seriesId' => $this->_tpl_vars['seriesId']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'seriesFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "monograph.coverImage")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />

	<?php if ($this->_tpl_vars['image']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.currentCoverImage"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'altTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'altTitle'));?>

		<img class="pkp_helpers_container_center" height="<?php echo $this->_tpl_vars['image']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['image']['thumbnailWidth']; ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'thumbnail','type' => 'series','id' => $this->_tpl_vars['seriesId']), $this);?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'seriesInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="pkp_helpers_clear">
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title','title' => "common.prefix",'inline' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "common.prefixAndTitle.tip",'type' => 'text','multilingual' => true,'name' => 'prefix','id' => 'prefix','value' => $this->_tpl_vars['prefix']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title','title' => "common.title",'inline' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => true,'name' => 'title','id' => 'title','value' => $this->_tpl_vars['title'],'required' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'subtitle','title' => "common.subtitle")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('label' => "common.subtitle.tip",'type' => 'text','multilingual' => true,'name' => 'subtitle','id' => 'subtitle','value' => $this->_tpl_vars['subtitle'],'maxlength' => '255'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.description",'for' => 'description')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		 	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => true,'id' => 'description','value' => $this->_tpl_vars['description'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'restricted','value' => 1,'label' => "manager.series.restricted",'checked' => $this->_tpl_vars['restricted']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "catalog.manage.series.issn",'description' => "manager.setup.issnDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'onlineIssn','label' => "catalog.manage.series.onlineIssn",'value' => $this->_tpl_vars['onlineIssn'],'maxlength' => '16','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'printIssn','label' => "catalog.manage.series.printIssn",'value' => $this->_tpl_vars['printIssn'],'maxlength' => '16','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "catalog.sortBy",'description' => "catalog.sortBy.seriesDescription",'for' => 'sortOption')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'sortOption','from' => $this->_tpl_vars['sortOptions'],'selected' => $this->_tpl_vars['sortOption'],'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<input type="hidden" name="seriesId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['seriesId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
		<?php if ($this->_tpl_vars['categoryCount'] > 0): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'context')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<div id="seriesCategoriesContainer">
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.settings.CategoriesListbuilderHandler",'op' => 'fetch','sectionId' => $this->_tpl_vars['seriesId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'seriesCategoriesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'seriesCategoriesUrl'));?>

					<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'seriesCategoriesContainer','url' => $this->_tpl_vars['seriesCategoriesUrl']), $this);?>

				</div>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'context')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if ($this->_tpl_vars['seriesEditorCount'] > 0): ?>				<div id="seriesEditorsContainer">
					<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.settings.SubEditorsListbuilderHandler",'op' => 'fetch','sectionId' => $this->_tpl_vars['seriesId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'seriesEditorsUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'seriesEditorsUrl'));?>

					<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'seriesEditorsContainer','url' => $this->_tpl_vars['seriesEditorsUrl']), $this);?>

				</div>
			<?php endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php ob_start(); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'series','path' => 'Path'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sampleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sampleUrl'));?>

			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.series.urlWillBe",'sampleUrl' => $this->_tpl_vars['sampleUrl']), $this);?>

		<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('instruct', ob_get_contents());ob_end_clean(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "series.path",'required' => true,'for' => 'path')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'path','label' => $this->_tpl_vars['instruct'],'subLabelTranslate' => false,'value' => $this->_tpl_vars['path'],'maxlength' => '32'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>