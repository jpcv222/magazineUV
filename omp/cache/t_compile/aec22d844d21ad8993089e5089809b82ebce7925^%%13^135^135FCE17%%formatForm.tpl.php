<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:45:36
         compiled from controllers/grid/catalogEntry/form/formatForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/grid/catalogEntry/form/formatForm.tpl', 20, false),array('modifier', 'escape', 'controllers/grid/catalogEntry/form/formatForm.tpl', 28, false),array('function', 'url', 'controllers/grid/catalogEntry/form/formatForm.tpl', 26, false),array('function', 'csrf', 'controllers/grid/catalogEntry/form/formatForm.tpl', 27, false),array('function', 'fbvElement', 'controllers/grid/catalogEntry/form/formatForm.tpl', 32, false),array('function', 'fbvFormButtons', 'controllers/grid/catalogEntry/form/formatForm.tpl', 45, false),array('function', 'translate', 'controllers/grid/catalogEntry/form/formatForm.tpl', 47, false),array('block', 'fbvFormArea', 'controllers/grid/catalogEntry/form/formatForm.tpl', 30, false),array('block', 'fbvFormSection', 'controllers/grid/catalogEntry/form/formatForm.tpl', 31, false),)), $this); ?>
<?php if ($this->_tpl_vars['remoteURL']): ?>
	<?php $this->assign('remoteRepresentation', true); ?>
<?php else: ?>
	<?php $this->assign('remoteRepresentation', false); ?>
<?php endif; ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#addPublicationFormatForm').pkpHandler('$.pkp.controllers.grid.representations.form.RepresentationFormHandler',
			{
				remoteRepresentation: <?php echo ((is_array($_tmp=$this->_tpl_vars['remoteRepresentation'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<form class="pkp_form" id="addPublicationFormatForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.catalogEntry.PublicationFormatGridHandler",'op' => 'updateFormat'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="representationId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['representationId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'addFormat','class' => 'border','title' => "grid.catalogEntry.publicationFormatDetails")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'title')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => 'true','id' => 'name','label' => "common.name",'value' => $this->_tpl_vars['name'],'multilingual' => 'true','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "grid.catalogEntry.publicationFormatType",'from' => $this->_tpl_vars['entryKeys'],'selected' => $this->_tpl_vars['entryKey'],'id' => 'entryKey','translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'publicationFormat','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "grid.catalogEntry.physicalFormat",'id' => 'isPhysicalFormat','checked' => $this->_tpl_vars['isPhysicalFormat']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'remotelyHostedContent','list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','label' => "grid.catalogEntry.remotelyHostedContent",'id' => 'remotelyHostedContent'), $this);?>

			<div id="remote" style="display:none">
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'remoteURL','label' => "grid.catalogEntry.remoteURL",'value' => $this->_tpl_vars['remoteURL']), $this);?>

			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>