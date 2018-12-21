<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:52:35
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 11, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 12, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 14, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 25, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 12, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 19, false),array('function', 'call_hook', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/htmlArticleGalley//display.tpl', 33, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pageTitle",'title' => $this->_tpl_vars['article']->getLocalizedTitle()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/headerHead.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="pkp_page_<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedPage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 pkp_op_<?php echo ((is_array($_tmp=$this->_tpl_vars['requestedOp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">

		<header class="header_view">

		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this);?>
" class="return">
			<span class="pkp_screen_reader">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.return"), $this);?>

			</span>
		</a>

		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId()))), $this);?>
" class="title">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</a>
	</header>

	<div id="htmlContainer">
		<iframe name="htmlFrame" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId())),'inline' => true), $this);?>
" allowfullscreen webkitallowfullscreen></iframe>
	</div>
	<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</body>
</html>