<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:45
         compiled from core:submission/submissionMetadataFormFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'core:submission/submissionMetadataFormFields.tpl', 13, false),array('block', 'fbvFormArea', 'core:submission/submissionMetadataFormFields.tpl', 18, false),array('function', 'translate', 'core:submission/submissionMetadataFormFields.tpl', 14, false),array('function', 'fbvElement', 'core:submission/submissionMetadataFormFields.tpl', 21, false),array('function', 'call_hook', 'core:submission/submissionMetadataFormFields.tpl', 75, false),)), $this); ?>
<?php if ($this->_tpl_vars['coverageEnabled'] || $this->_tpl_vars['typeEnabled'] || $this->_tpl_vars['sourceEnabled'] || $this->_tpl_vars['rightsEnabled'] || $this->_tpl_vars['languagesEnabled'] || $this->_tpl_vars['subjectEnabled'] || $this->_tpl_vars['keywordsEnabled'] || $this->_tpl_vars['agenciesEnabled'] || $this->_tpl_vars['referencesEnabled']): ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.metadata")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<p class="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.metadataDescription"), $this);?>
</p>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['coverageEnabled'] || $this->_tpl_vars['typeEnabled'] || $this->_tpl_vars['sourceEnabled'] || $this->_tpl_vars['rightsEnabled']): ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'additionalDublinCore')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['coverageEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "submission.coverage",'for' => 'coverage')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => true,'name' => 'coverage','id' => 'coverage','value' => $this->_tpl_vars['coverage'],'maxlength' => '255','readonly' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['typeEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'type','title' => "common.type")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "submission.type.tip",'multilingual' => true,'name' => 'type','id' => 'type','value' => $this->_tpl_vars['type'],'maxlength' => '255','readonly' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['sourceEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.source",'for' => 'source')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "submission.source.tip",'multilingual' => true,'name' => 'source','id' => 'source','value' => $this->_tpl_vars['source'],'maxlength' => '255','readonly' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['rightsEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.rights",'for' => 'rights')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "submission.rights.tip",'multilingual' => true,'name' => 'rights','id' => 'rights','value' => $this->_tpl_vars['rights'],'maxlength' => '255','readonly' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['languagesEnabled'] || $this->_tpl_vars['subjectEnabled'] || $this->_tpl_vars['keywordsEnabled'] || $this->_tpl_vars['agenciesEnabled'] || $this->_tpl_vars['referencesEnabled'] || $this->_tpl_vars['disciplinesEnabled']): ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'tagitFields','title' => "submission.submit.metadataForm")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['languagesEnabled']): ?>
			<?php echo $this->_tpl_vars['languagesField']; ?>

		<?php endif; ?>
		<?php if ($this->_tpl_vars['subjectEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "common.subjects")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'keyword','id' => 'subjects','multilingual' => true,'current' => $this->_tpl_vars['subjects'],'disabled' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['disciplinesEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "search.discipline")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'keyword','id' => 'disciplines','multilingual' => true,'current' => $this->_tpl_vars['disciplines'],'disabled' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['keywordsEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "common.keywords")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'keyword','id' => 'keywords','multilingual' => true,'current' => $this->_tpl_vars['keywords'],'disabled' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['agenciesEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.supportingAgencies")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'keyword','id' => 'agencies','multilingual' => true,'current' => $this->_tpl_vars['agencies'],'disabled' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['referencesEnabled']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "submission.citations")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'citations','value' => $this->_tpl_vars['citations'],'disabled' => $this->_tpl_vars['readOnly']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Submission::SubmissionMetadataForm::AdditionalMetadata"), $this);?>
