<?php /* Smarty version 2.6.25-dev, created on 2017-08-12 14:38:30
         compiled from frontend/pages/issueArchive.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/issueArchive.tpl', 14, false),array('function', 'page_info', 'frontend/pages/issueArchive.tpl', 40, false),array('function', 'page_links', 'frontend/pages/issueArchive.tpl', 41, false),array('block', 'iterate', 'frontend/pages/issueArchive.tpl', 31, false),)), $this); ?>
<?php ob_start(); ?>
	<?php if ($this->_tpl_vars['issues']->getPageCount() > 0 && $this->_tpl_vars['issues']->getPage() > 1): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "archive.archivesPageNumber",'pageNumber' => $this->_tpl_vars['issues']->getPage()), $this);?>

	<?php else: ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "archive.archives"), $this);?>

	<?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('pageTitle', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitleTranslated' => $this->_tpl_vars['pageTitle'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_issue_archive">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitle' => $this->_tpl_vars['pageTitle'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if (! $this->_tpl_vars['issues']): ?>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "current.noCurrentIssueDesc"), $this);?>


		<?php else: ?>
		<ul class="issues_archive">
			<?php $this->_tag_stack[] = array('iterate', array('from' => 'issues','item' => 'issue')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<li>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/issue_summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ul>

		<?php if ($this->_tpl_vars['issues']->getPageCount() > 0): ?>
			<div class="cmp_pagination">
				<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['issues']), $this);?>

				<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'issues','name' => 'issues','iterator' => $this->_tpl_vars['issues']), $this);?>

			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>