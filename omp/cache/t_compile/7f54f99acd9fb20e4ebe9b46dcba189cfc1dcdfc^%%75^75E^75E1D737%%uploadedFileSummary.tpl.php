<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:19
         compiled from controllers/wizard/fileUpload/form/uploadedFileSummary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/wizard/fileUpload/form/uploadedFileSummary.tpl', 16, false),array('modifier', 'lower', 'controllers/wizard/fileUpload/form/uploadedFileSummary.tpl', 38, false),array('function', 'translate', 'controllers/wizard/fileUpload/form/uploadedFileSummary.tpl', 18, false),array('function', 'fbvElement', 'controllers/wizard/fileUpload/form/uploadedFileSummary.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/wizard/fileUpload/form/uploadedFileSummary.tpl', 21, false),)), $this); ?>
<div class="pkp_uploadedFile_summary">
	<div class="filename" data-pkp-editable="true">
		<div class="display" data-pkp-editable-view="display">
			<span data-pkp-editable-displays="name">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

			</span>
			<a href="#" class="pkpEditableToggle edit"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>
		</div>
		<div class="input" data-pkp-editable-view="input">
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.form.name",'required' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'name','value' => $this->_tpl_vars['submissionFile']->getName(null),'multilingual' => true,'maxlength' => '255','required' => true), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
	</div>

	<div class="details">
		<?php if (is_a ( $this->_tpl_vars['submissionFile'] , 'SubmissionArtworkFile' )): ?>
			<span class="pixels">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dimensionsPixels",'width' => $this->_tpl_vars['submissionFile']->getWidth(),'height' => $this->_tpl_vars['submissionFile']->getHeight()), $this);?>

			</span>

			<span class="print">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dimensionsInches",'width' => $this->_tpl_vars['submissionFile']->getPhysicalWidth(300),'height' => $this->_tpl_vars['submissionFile']->getPhysicalHeight(300),'dpi' => 300), $this);?>

			</span>
		<?php endif; ?>

		<span class="type <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submissionFile']->getExtension())) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submissionFile']->getExtension())) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</span>

		<span class="file_size">
			<?php echo $this->_tpl_vars['submissionFile']->getNiceFileSize(); ?>

		</span>
	</div>
</div>