<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:35:32
         compiled from controllers/modals/submissionMetadata/selectMonograph.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 14, false),array('function', 'url', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 22, false),array('function', 'fbvElement', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 41, false),array('modifier', 'json_encode', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 22, false),array('modifier', 'translate', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 41, false),array('modifier', 'to_array', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 41, false),array('block', 'fbvFormArea', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 39, false),array('block', 'fbvFormSection', 'controllers/modals/submissionMetadata/selectMonograph.tpl', 40, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "catalog.md#new-catalog-entry",'class' => 'pkp_help_modal'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler. (Triggers selectMonograph event.)
		$('#selectMonographForm').pkpHandler(
			'$.pkp.controllers.form.DropdownHandler',
			{
				getOptionsUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'getSubmissions','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
				eventName: 'selectMonograph'
			}
		);
		// Attach the containing div handler. (Consumes selectMonograph event.)
		$('#selectMonographContainer').pkpHandler(
			'$.pkp.controllers.modals.submissionMetadata.MonographlessCatalogEntryHandler',
			{
				metadataFormUrlTemplate: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "modals.submissionMetadata.CatalogEntryHandler",'op' => 'fetch','submissionId' => 'MONOGRAPH_ID','stageId' => 'STAGE_ID','escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<div id="selectMonographContainer">

	<form class="pkp_form" id="selectMonographForm">
		<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'monographSelectForm')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','class' => 'noStyling','id' => 'monographSelect','from' => ((is_array($_tmp=((is_array($_tmp="submission.select")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp)))) ? $this->_run_mod_handler('to_array', true, $_tmp) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp)),'translate' => false), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</form>

	<div id="metadataFormContainer">
	</div>
</div>