<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:25:07
         compiled from controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 15, false),array('modifier', 'concat', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 25, false),array('modifier', 'assign', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 48, false),array('function', 'url', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 23, false),array('function', 'csrf', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 24, false),array('function', 'translate', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 34, false),array('function', 'load_url_in_div', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 49, false),array('function', 'fbvElement', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 82, false),array('function', 'fbvFormButtons', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 105, false),array('block', 'fbvFormArea', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 44, false),array('block', 'fbvFormSection', 'controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl', 45, false),)), $this); ?>
<?php ob_start(); ?>publicationMetadataEntryForm-<?php echo $this->_tpl_vars['representationId']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('publicationFormId', ob_get_contents());ob_end_clean(); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
').pkpHandler(
			'$.pkp.controllers.modals.catalogEntry.form.PublicationFormatMetadataFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
</script>
<form class="pkp_form" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveForm'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => ((is_array($_tmp=$this->_tpl_vars['publicationFormId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-notification") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-notification")),'requestOptions' => $this->_tpl_vars['notificationRequestOptions'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="tabPos" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['tabPos'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="representationId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['representationId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="tab" value="publication" />

	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.publicationFormat.formatMetadata"), $this);?>
</h3>

	<?php if (! $this->_tpl_vars['pubObject']->getRemoteURL()): ?>
		<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
			<?php $this->assign('pubIdMetadataFile', $this->_tpl_vars['pubIdPlugin']->getPubIdMetadataFile()); ?>
			<?php $this->assign('canBeAssigned', $this->_tpl_vars['pubIdPlugin']->canBeAssigned($this->_tpl_vars['pubObject'])); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pubIdMetadataFile']), 'smarty_include_vars' => array('pubObject' => $this->_tpl_vars['pubObject'],'canBeAssigned' => $this->_tpl_vars['canBeAssigned'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'productIdentifier')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- Product Identification Codes -->
			<?php $this->assign('divId', ((is_array($_tmp=((is_array($_tmp='identificationCodeGridContainer')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['representationId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['representationId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.IdentificationCodeGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'identGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'identGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['divId'],'url' => $this->_tpl_vars['identGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'salesRights')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- Sales rights and regions -->
			<?php $this->assign('divId', ((is_array($_tmp=((is_array($_tmp='salesRightsGridContainer')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['representationId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['representationId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.SalesRightsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'salesGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'salesGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['divId'],'url' => $this->_tpl_vars['salesGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'marketRegions')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- Market regions -->
			<?php $this->assign('divId', ((is_array($_tmp=((is_array($_tmp='marketsGridContainer')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['representationId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['representationId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.MarketsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'marketsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'marketsGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['divId'],'url' => $this->_tpl_vars['marketsGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'publicationDates')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<!-- Product Publication/Embargo dates -->
			<?php $this->assign('divId', ((is_array($_tmp=((is_array($_tmp='publicationDateGridContainer')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['representationId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['representationId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationDateGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'dateGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'dateGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['divId'],'url' => $this->_tpl_vars['dateGridUrl']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'productComposition','class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'productCompositionCode','title' => "monograph.publicationFormat.productComposition",'required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['productCompositionCodes'],'selected' => $this->_tpl_vars['productCompositionCode'],'translate' => false,'id' => 'productCompositionCode','required' => 'true','defaultValue' => "",'defaultLabel' => "",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "monograph.publicationFormat.productFormDetailCode",'from' => $this->_tpl_vars['productFormDetailCodes'],'selected' => $this->_tpl_vars['productFormDetailCode'],'translate' => false,'id' => 'productFormDetailCode','defaultValue' => "",'defaultLabel' => "",'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'productAvailability','title' => "monograph.publicationFormat.productAvailability",'class' => 'border')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'productAvailability','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['productAvailabilityCodes'],'required' => 'true','selected' => $this->_tpl_vars['productAvailabilityCode'],'translate' => false,'id' => 'productAvailabilityCode'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'imprintFormArea','title' => "monograph.publicationFormat.imprint")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'imprint')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','name' => 'imprint','id' => 'imprint','value' => $this->_tpl_vars['imprint'],'maxlength' => '255'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if ($this->_tpl_vars['isPhysicalFormat']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/catalogEntry/form/physicalPublicationFormat.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif (! $this->_tpl_vars['remoteURL']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'publicationMetadataFormSubmit','submitText' => "common.save"), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>