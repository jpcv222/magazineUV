<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:44:22
         compiled from controllers/informationCenter/newNoteForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/informationCenter/newNoteForm.tpl', 17, false),array('function', 'url', 'controllers/informationCenter/newNoteForm.tpl', 24, false),array('function', 'csrf', 'controllers/informationCenter/newNoteForm.tpl', 25, false),array('function', 'fbvElement', 'controllers/informationCenter/newNoteForm.tpl', 27, false),array('function', 'fbvFormButtons', 'controllers/informationCenter/newNoteForm.tpl', 29, false),array('block', 'fbvFormSection', 'controllers/informationCenter/newNoteForm.tpl', 26, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Information Center handler.
	$(function() {
		$('#newNoteForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<div id="newNoteContainer">
	<form class="pkp_form" id="newNoteForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveNote','params' => $this->_tpl_vars['linkParams']), $this);?>
" method="post">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "informationCenter.addNote",'for' => 'newNote')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'newNote'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => $this->_tpl_vars['submitNoteText']), $this);?>

	</form>
</div>