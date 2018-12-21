<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:25:07
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_script', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 10, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 22, false),array('function', 'fbvElement', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 23, false),array('block', 'fbvFormArea', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 16, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 20, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 36, false),array('modifier', 'cat', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/urn/templates/urnSuffixEdit.tpl', 37, false),)), $this); ?>
<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'publicIdentifiersForm','scripts' => $this->_tpl_vars['scripts']), $this);?>


<?php $this->assign('pubObjectType', $this->_tpl_vars['pubIdPlugin']->getPubObjectType($this->_tpl_vars['pubObject'])); ?>
<?php $this->assign('enableObjectURN', $this->_tpl_vars['pubIdPlugin']->getSetting($this->_tpl_vars['currentContext']->getId(),"enable".($this->_tpl_vars['pubObjectType'])."URN")); ?>
<?php if ($this->_tpl_vars['enableObjectURN']): ?>
	<?php $this->assign('storedPubId', $this->_tpl_vars['pubObject']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'pubIdURNFormArea','class' => 'border','title' => "plugins.pubIds.urn.editor.urn")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->assign('formArea', true); ?>
		<?php if ($this->_tpl_vars['pubIdPlugin']->getSetting($this->_tpl_vars['currentContext']->getId(),'urnSuffix') == 'customId' || $this->_tpl_vars['storedPubId']): ?>
			<?php if (empty ( $this->_tpl_vars['storedPubId'] )): ?> 				<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $this->assign('checkNo', $this->_tpl_vars['pubIdPlugin']->getSetting($this->_tpl_vars['currentContext']->getId(),'urnCheckNo')); ?>
					<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.manager.settings.urnSuffix.description"), $this);?>
</p>
					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "plugins.pubIds.urn.manager.settings.urnPrefix",'id' => 'urnPrefix','disabled' => true,'value' => $this->_tpl_vars['pubIdPlugin']->getSetting($this->_tpl_vars['currentContext']->getId(),'urnPrefix'),'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

					<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','label' => "plugins.pubIds.urn.manager.settings.urnSuffix",'id' => 'urnSuffix','value' => $this->_tpl_vars['urnSuffix'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => true), $this);?>

					<?php if ($this->_tpl_vars['checkNo']): ?><?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'button','label' => "plugins.pubIds.urn.editor.addCheckNo",'id' => 'checkNo','inline' => true), $this);?>
<?php endif; ?>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php if ($this->_tpl_vars['canBeAssigned']): ?>
					<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.canBeAssigned"), $this);?>
</p>
					<?php $this->assign('templatePath', $this->_tpl_vars['pubIdPlugin']->getTemplatePath()); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatePath'])."urnAssignCheckBox.tpl", 'smarty_include_vars' => array('pubId' => "",'pubObjectType' => $this->_tpl_vars['pubObjectType'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?>
					<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.customSuffixMissing"), $this);?>
</p>
				<?php endif; ?>
			<?php else: ?> 				<p>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['storedPubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br />
					<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.pubIds.urn.editor.urnObjectType")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['pubObjectType']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['pubObjectType']))), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('translatedObjectType', ob_get_contents());ob_end_clean(); ?>
					<?php ob_start(); ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.assigned",'pubObjectType' => $this->_tpl_vars['translatedObjectType']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('assignedMessage', ob_get_contents());ob_end_clean(); ?>
					<p class="pkp_help"><?php echo $this->_tpl_vars['assignedMessage']; ?>
</p>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['clearPubIdLinkActionURN'],'contextId' => 'publicIdentifiersForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</p>
			<?php endif; ?>
		<?php else: ?> 			<p><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</p>
			<?php if ($this->_tpl_vars['canBeAssigned']): ?>
				<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.canBeAssigned"), $this);?>
</p>
				<?php $this->assign('templatePath', $this->_tpl_vars['pubIdPlugin']->getTemplatePath()); ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatePath'])."urnAssignCheckBox.tpl", 'smarty_include_vars' => array('pubId' => "",'pubObjectType' => $this->_tpl_vars['pubObjectType'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php else: ?>
				<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.urn.editor.patternNotResolved"), $this);?>
</p>
			<?php endif; ?>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>