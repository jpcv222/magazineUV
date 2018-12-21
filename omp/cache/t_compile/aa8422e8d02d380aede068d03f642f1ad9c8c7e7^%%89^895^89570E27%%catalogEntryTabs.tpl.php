<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:25:03
         compiled from controllers/modals/submissionMetadata/catalogEntryTabs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 29, false),array('function', 'translate', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 29, false),array('function', 'counter', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 37, false),array('function', 'call_hook', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 38, false),array('modifier', 'escape', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 41, false),array('modifier', 'concat', 'controllers/modals/submissionMetadata/catalogEntryTabs.tpl', 42, false),)), $this); ?>

<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#newCatalogEntryTabs').pkpHandler(
				'$.pkp.controllers.tab.catalogEntry.CatalogEntryTabHandler',
				{
					<?php if ($this->_tpl_vars['selectedTab']): ?>selected:<?php echo $this->_tpl_vars['selectedTab']; ?>
,<?php endif; ?>
					<?php if ($this->_tpl_vars['selectedFormatId']): ?>selectedFormatId:<?php echo $this->_tpl_vars['selectedFormatId']; ?>
,<?php endif; ?>
					<?php if ($this->_tpl_vars['tabsUrl']): ?>tabsUrl:'<?php echo $this->_tpl_vars['tabsUrl']; ?>
',<?php endif; ?>
					<?php if ($this->_tpl_vars['tabContentUrl']): ?>tabContentUrl:'<?php echo $this->_tpl_vars['tabContentUrl']; ?>
',<?php endif; ?>
					emptyLastTab: true
				});
	});
</script>
<div id="newCatalogEntryTabs" class="pkp_controllers_tab">
	<ul>
		<li>
			<a title="submission" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => 'submission','op' => 'submissionMetadata','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '0'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.catalogEntry.monographMetadata"), $this);?>
</a>
		</li>
		<li>
			<a title="catalog" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => 'catalog','op' => 'catalogMetadata','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '1'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.catalogEntry.catalogMetadata"), $this);?>
</a>
		</li>
		<li>
			<a name="catalog" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => 'identifiers','op' => 'identifiers','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => '2'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.identifiers"), $this);?>
</a>
		</li>
		<?php echo smarty_function_counter(array('start' => 3,'assign' => 'counter'), $this);?>

		<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Controllers::Modals::SubmissionMetadata::CatalogEntryTabs::Tabs"), $this);?>

		<?php $_from = $this->_tpl_vars['publicationFormats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
			<li>
				<a id="publication<?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"
					href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.catalogEntry.CatalogEntryTabHandler",'tab' => ((is_array($_tmp='publication')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['format']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['format']->getId())),'op' => 'publicationMetadata','representationId' => $this->_tpl_vars['format']->getId(),'submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'tabPos' => $this->_tpl_vars['counter']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
			</li>
			<?php echo smarty_function_counter(array(), $this);?>
 		<?php endforeach; endif; unset($_from); ?>
</ul>