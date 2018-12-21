<?php /* Smarty version 2.6.25-dev, created on 2018-06-13 14:19:56
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnAssign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnAssign.tpl', 14, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnAssign.tpl', 16, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnAssign.tpl', 17, false),)), $this); ?>

<?php $this->assign('pubObjectType', $this->_tpl_vars['pubIdPlugin']->getPubObjectType($this->_tpl_vars['pubObject'])); ?>
<?php $this->assign('enableObjectURN', $this->_tpl_vars['pubIdPlugin']->getSetting($this->_tpl_vars['currentContext']->getId(),"enable".($this->_tpl_vars['pubObjectType'])."URN")); ?>
<?php if ($this->_tpl_vars['enableObjectURN']): ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'pubIdURNFormArea','class' => 'border','title' => "plugins.pubIds.urn.editor.urn")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['pubObject']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.assignURN.assigned",'pubId' => $this->_tpl_vars['pubObject']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())), $this);?>
</p>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php else: ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'])); ?>
		<?php if (! $this->_tpl_vars['canBeAssigned']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php if (! $this->_tpl_vars['pubId']): ?>
					<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.assignURN.emptySuffix"), $this);?>
</p>
				<?php else: ?>
					<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.assignURN.pattern",'pubId' => $this->_tpl_vars['pubId']), $this);?>
</p>
				<?php endif; ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php else: ?>
			<?php $this->assign('templatePath', $this->_tpl_vars['pubIdPlugin']->getTemplatePath()); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatePath'])."urnAssignCheckBox.tpl", 'smarty_include_vars' => array('pubId' => $this->_tpl_vars['pubId'],'pubObjectType' => $this->_tpl_vars['pubObjectType'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>