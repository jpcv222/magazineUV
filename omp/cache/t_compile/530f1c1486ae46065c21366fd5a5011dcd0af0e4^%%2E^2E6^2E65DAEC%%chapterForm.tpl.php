<?php /* Smarty version 2.6.25-dev, created on 2018-09-07 02:27:49
         compiled from controllers/grid/users/chapter/form/chapterForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/users/chapter/form/chapterForm.tpl', 21, false),array('function', 'csrf', 'controllers/grid/users/chapter/form/chapterForm.tpl', 22, false),array('function', 'fbvElement', 'controllers/grid/users/chapter/form/chapterForm.tpl', 29, false),array('function', 'load_url_in_div', 'controllers/grid/users/chapter/form/chapterForm.tpl', 39, false),array('function', 'fbvFormButtons', 'controllers/grid/users/chapter/form/chapterForm.tpl', 48, false),array('function', 'translate', 'controllers/grid/users/chapter/form/chapterForm.tpl', 50, false),array('modifier', 'escape', 'controllers/grid/users/chapter/form/chapterForm.tpl', 23, false),array('modifier', 'assign', 'controllers/grid/users/chapter/form/chapterForm.tpl', 38, false),array('block', 'fbvFormSection', 'controllers/grid/users/chapter/form/chapterForm.tpl', 28, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Information Center handler.
	$(function() {
		$('#editChapterForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler'
		);
	});
</script>

<form class="pkp_form" id="editChapterForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.chapter.ChapterGridHandler",'op' => 'updateChapter'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="chapterId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['chapterId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'chapterFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.title",'for' => 'title','required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','name' => 'title','id' => 'title','value' => $this->_tpl_vars['title'],'maxlength' => '255','multilingual' => true,'required' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "metadata.property.displayName.subTitle",'for' => 'subTitle')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','name' => 'subtitle','id' => 'subtitle','value' => $this->_tpl_vars['subtitle'],'maxlength' => '255','multilingual' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!--  Chapter Contributors -->
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.users.ChapterAuthorListbuilderHandler",'op' => 'fetch','submissionId' => $this->_tpl_vars['submissionId'],'chapterId' => $this->_tpl_vars['chapterId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'chapterAuthorUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'chapterAuthorUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'chapterAuthorContainer','url' => $this->_tpl_vars['chapterAuthorUrl']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!-- Chapter Files -->
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "listbuilder.files.ChapterFilesListbuilderHandler",'op' => 'fetch','submissionId' => $this->_tpl_vars['submissionId'],'chapterId' => $this->_tpl_vars['chapterId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'chapterFilesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'chapterFilesUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'chapterFilesContainer','url' => $this->_tpl_vars['chapterFilesUrl']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>