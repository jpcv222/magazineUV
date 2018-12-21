<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:48:04
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 12, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 27, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 12, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 12, false),array('modifier', 'count', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 18, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 21, false),array('modifier', 'truncate', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 21, false),array('modifier', 'date_format', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 24, false),array('modifier', 'capitalize', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/apa//citation.tpl', 26, false),)), $this); ?>
<?php if ($this->_tpl_vars['galley']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId()))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php endif; ?>

<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 1, "") : smarty_modifier_truncate($_tmp, 1, "")); ?>
.<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, &amp; <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

(<?php if ($this->_tpl_vars['article']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>).
<?php echo $this->_tpl_vars['article']->getLocalizedTitle(); ?>
.
<em><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedName())) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
<?php if ($this->_tpl_vars['issue']): ?>, <?php if ($this->_tpl_vars['issue']->getShowVolume()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?></em><?php if ($this->_tpl_vars['issue']->getNumber() && $this->_tpl_vars['issue']->getShowNumber()): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)<?php endif; ?><?php else: ?></em><?php endif; ?><?php if ($this->_tpl_vars['article']->getPages()): ?>, <?php echo $this->_tpl_vars['article']->getPages(); ?>
<?php endif; ?>.
<?php if ($this->_tpl_vars['article']->getStoredPubId('doi')): ?>doi:<?php echo $this->_tpl_vars['article']->getStoredPubId('doi'); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.citationFormats.apa.retrieved",'retrievedDate' => ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatLong']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatLong'])),'url' => $this->_tpl_vars['articleUrl']), $this);?>
<?php endif; ?>