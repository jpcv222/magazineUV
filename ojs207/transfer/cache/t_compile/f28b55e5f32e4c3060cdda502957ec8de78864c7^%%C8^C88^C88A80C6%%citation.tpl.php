<?php /* Smarty version 2.6.25-dev, created on 2017-08-12 13:57:01
         compiled from file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 14, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 20, false),array('modifier', 'mb_upper', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 20, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 26, false),array('modifier', 'default', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 27, false),array('modifier', 'abnt_date_format', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 28, false),array('modifier', 'lower', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 28, false),array('modifier', 'abnt_date_format_with_day', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 32, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 31, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/transfer/plugins/citationFormats/abnt//citation.tpl', 32, false),)), $this); ?>
<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
<?php $this->assign('location', $this->_tpl_vars['citationPlugin']->getLocalizedLocation($this->_tpl_vars['journal'])); ?>
<?php if ($this->_tpl_vars['authorCount'] <= 3): ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
		<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
		<?php $this->assign('middleName', $this->_tpl_vars['author']->getMiddleName()); ?>
		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('mb_upper', true, $_tmp) : PKPString::strtoupper($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['middleName']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>; <?php endif; ?><?php endforeach; endif; unset($_from); ?>.
<?php else: ?>
	<?php $this->assign('firstName', $this->_tpl_vars['authors'][0]->getFirstName()); ?>
	<?php $this->assign('middleName', $this->_tpl_vars['authors'][0]->getMiddleName()); ?>
	<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['authors'][0]->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('mb_upper', true, $_tmp) : PKPString::strtoupper($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['middleName']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?> et al.
<?php endif; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>
.
<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong>, <?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['location'])) ? $this->_run_mod_handler('default', true, $_tmp, "[S.l.]") : smarty_modifier_default($_tmp, "[S.l.]")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['issue']): ?><?php if ($this->_tpl_vars['issue']->getShowVolume()): ?>, v. <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['issue']->getShowNumber()): ?>, n. <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php endif; ?>
<?php if ($this->_tpl_vars['article']->getPages()): ?>, p. <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>, <?php if ($this->_tpl_vars['article']->getDatePublished()): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('abnt_date_format', true, $_tmp) : $this->_plugins['modifier']['abnt_date_format'][0][0]->abntDateFormat($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('abnt_date_format', true, $_tmp) : $this->_plugins['modifier']['abnt_date_format'][0][0]->abntDateFormat($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>.
<?php if ($this->_tpl_vars['currentJournal']->getSetting('onlineIssn')): ?>ISSN <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('onlineIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.
<?php elseif ($this->_tpl_vars['currentJournal']->getSetting('printIssn')): ?>ISSN <?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getSetting('printIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
. <?php endif; ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('articleUrl', ob_get_contents());ob_end_clean(); ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.citationFormats.abnt.retrieved",'retrievedDate' => ((is_array($_tmp=time())) ? $this->_run_mod_handler('abnt_date_format_with_day', true, $_tmp) : $this->_plugins['modifier']['abnt_date_format_with_day'][0][0]->abntDateFormatWithDay($_tmp)),'url' => $this->_tpl_vars['articleUrl']), $this);?>

<?php if ($this->_tpl_vars['article']->getStoredPubId('doi')): ?>doi: <a href="https://doi.org/<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getStoredPubId('doi'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">https://doi.org/<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getStoredPubId('doi'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>. <?php endif; ?>