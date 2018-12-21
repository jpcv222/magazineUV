<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:07:19
         compiled from controllers/grid/settings/category/form/categoryForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/category/form/categoryForm.tpl', 20, false),array('function', 'csrf', 'controllers/grid/settings/category/form/categoryForm.tpl', 34, false),array('function', 'translate', 'controllers/grid/settings/category/form/categoryForm.tpl', 39, false),array('function', 'fbvElement', 'controllers/grid/settings/category/form/categoryForm.tpl', 42, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/category/form/categoryForm.tpl', 77, false),array('modifier', 'json_encode', 'controllers/grid/settings/category/form/categoryForm.tpl', 20, false),array('modifier', 'assign', 'controllers/grid/settings/category/form/categoryForm.tpl', 51, false),array('modifier', 'escape', 'controllers/grid/settings/category/form/categoryForm.tpl', 73, false),array('block', 'fbvFormArea', 'controllers/grid/settings/category/form/categoryForm.tpl', 37, false),array('block', 'fbvFormSection', 'controllers/grid/settings/category/form/categoryForm.tpl', 41, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#categoryForm').pkpHandler(
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

<form class="pkp_form" id="categoryForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.category.CategoryCategoryGridHandler",'op' => 'updateCategory','categoryId' => $this->_tpl_vars['categoryId']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'categoryFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'categoryDetails')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.category.categoryDetails"), $this);?>
</h3>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.category.name",'for' => 'name','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => 'true','name' => 'name','value' => $this->_tpl_vars['name'],'id' => 'name','required' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.category.parentCategory",'for' => 'context')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'parentId','from' => $this->_tpl_vars['rootCategories'],'selected' => $this->_tpl_vars['parentId'],'translate' => false,'disabled' => $this->_tpl_vars['cannotSelectChild']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.category.path",'required' => true,'for' => 'path')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php ob_start(); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'category','path' => 'path','required' => true), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sampleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sampleUrl'));?>

				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.category.urlWillBe",'sampleUrl' => $this->_tpl_vars['sampleUrl']), $this);?>

			<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('instruct', ob_get_contents());ob_end_clean(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'path','value' => $this->_tpl_vars['path'],'maxlength' => '32','label' => $this->_tpl_vars['instruct'],'subLabelTranslate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.category.description",'for' => 'context')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => 'true','id' => 'description','value' => $this->_tpl_vars['description'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "catalog.sortBy",'description' => "catalog.sortBy.categoryDescription",'for' => 'sortOption')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'sortOption','from' => $this->_tpl_vars['sortOptions'],'selected' => $this->_tpl_vars['sortOption'],'translate' => false), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "monograph.coverImage")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if ($this->_tpl_vars['image']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.currentCoverImage"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'altTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'altTitle'));?>

				<img class="pkp_helpers_container_center" height="<?php echo $this->_tpl_vars['image']['thumbnailHeight']; ?>
" width="<?php echo $this->_tpl_vars['image']['thumbnailWidth']; ?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'thumbnail','type' => 'category','id' => $this->_tpl_vars['categoryId']), $this);?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>

		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>


	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>