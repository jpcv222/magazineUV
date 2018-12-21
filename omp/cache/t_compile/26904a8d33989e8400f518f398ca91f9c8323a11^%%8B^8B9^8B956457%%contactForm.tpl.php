<?php /* Smarty version 2.6.25-dev, created on 2018-08-16 20:32:19
         compiled from user/contactForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'user/contactForm.tpl', 12, false),array('function', 'url', 'user/contactForm.tpl', 21, false),array('function', 'csrf', 'user/contactForm.tpl', 22, false),array('function', 'fbvElement', 'user/contactForm.tpl', 27, false),array('function', 'fbvFormButtons', 'user/contactForm.tpl', 49, false),array('function', 'translate', 'user/contactForm.tpl', 51, false),array('block', 'fbvFormSection', 'user/contactForm.tpl', 26, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "user-profile.md",'class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#contactForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="contactForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveContact'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'contactFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.email",'id' => 'email','value' => $this->_tpl_vars['email'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'required' => true), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.phone",'name' => 'phone','id' => 'phone','value' => $this->_tpl_vars['phone'],'maxlength' => '24','size' => $this->_tpl_vars['fbvStyles']['size']['SMALL']), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "user.affiliation",'multilingual' => 'true','name' => 'affiliation','id' => 'affiliation','value' => $this->_tpl_vars['affiliation'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','label' => "common.mailingAddress",'name' => 'mailingAddress','id' => 'mailingAddress','rich' => true,'value' => $this->_tpl_vars['mailingAddress'],'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE']), $this);?>

		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "common.country",'name' => 'country','id' => 'country','required' => true,'defaultLabel' => "",'defaultValue' => "",'from' => $this->_tpl_vars['countries'],'selected' => $this->_tpl_vars['country'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php if (count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.workingLanguages",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
				<?php if ($this->_tpl_vars['userLocales'] && in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?>
					<?php $this->assign('checked', true); ?>
				<?php else: ?>
					<?php $this->assign('checked', false); ?>
				<?php endif; ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','name' => "userLocales[]",'id' => "userLocales-".($this->_tpl_vars['localeKey']),'value' => $this->_tpl_vars['localeKey'],'checked' => $this->_tpl_vars['checked'],'label' => $this->_tpl_vars['localeName'],'translate' => false), $this);?>

			<?php endforeach; endif; unset($_from); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => "common.save"), $this);?>


	<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</form>