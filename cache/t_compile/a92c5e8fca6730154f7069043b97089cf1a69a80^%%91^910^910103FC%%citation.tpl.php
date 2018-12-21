<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:29
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 12, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 12, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 12, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 17, false),array('modifier', 'date_format', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 20, false),array('modifier', 'strip_tags', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 26, false),array('modifier', 'replace', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/endNote//citation.tpl', 28, false),)), $this); ?>
<?php if ($this->_tpl_vars['galley']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId()))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'articleUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'articleUrl'));?>

<?php endif; ?>
<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
%A <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
%D <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?>
%D <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>

<?php else: ?>
%D <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endif; ?>
%T <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

%K <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

%X <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "\n", ' ') : smarty_modifier_replace($_tmp, "\n", ' ')))) ? $this->_run_mod_handler('replace', true, $_tmp, "\r", ' ') : smarty_modifier_replace($_tmp, "\r", ' ')); ?>

%U <?php echo $this->_tpl_vars['articleUrl']; ?>

%J <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

%0 Journal Article
<?php if ($this->_tpl_vars['article']->getStoredPubId('doi')): ?>%R <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getStoredPubId('doi'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endif; ?>
<?php if (count ( $this->_tpl_vars['article']->getPageArray() ) > 0): ?>%P <?php $_from = $this->_tpl_vars['article']->getPageArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pages'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pages']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['range']):
        $this->_foreach['pages']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['range'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['range'][1]): ?>-<?php echo ((is_array($_tmp=$this->_tpl_vars['range'][1])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (! ($this->_foreach['pages']['iteration'] == $this->_foreach['pages']['total'])): ?>,<?php endif; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['issue']->getShowVolume()): ?>%V <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['issue']->getShowNumber()): ?>%N <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['currentJournal']->getSetting('onlineIssn')): ?>%@ <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('onlineIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php elseif ($this->_tpl_vars['currentJournal']->getSetting('printIssn')): ?>%@ <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('printIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
%8 <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

<?php endif; ?>
