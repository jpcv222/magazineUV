<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 15:39:14
         compiled from frontend/objects/monographFile_googleScholar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/objects/monographFile_googleScholar.tpl', 19, false),array('modifier', 'date_format', 'frontend/objects/monographFile_googleScholar.tpl', 53, false),array('modifier', 'to_array', 'frontend/objects/monographFile_googleScholar.tpl', 61, false),array('modifier', 'assign', 'frontend/objects/monographFile_googleScholar.tpl', 61, false),array('modifier', 'String_substr', 'frontend/objects/monographFile_googleScholar.tpl', 66, false),array('function', 'url', 'frontend/objects/monographFile_googleScholar.tpl', 61, false),)), $this); ?>
<?php if ($this->_tpl_vars['genre'] && ! $this->_tpl_vars['genre']->getSupplementary()): ?>

<meta name="gs_meta_revision" content="1.1" />
<?php if ($this->_tpl_vars['series'] && $this->_tpl_vars['series']->getOnlineISSN()): ?>
	<meta name="citation_issn" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['series']->getOnlineISSN())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endif; ?>

<?php $this->assign('identificationCodes', $this->_tpl_vars['publicationFormat']->getIdentificationCodes()); ?>
<?php $_from = $this->_tpl_vars['identificationCodes']->toArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['identificationCode']):
?>
	<?php if ($this->_tpl_vars['identificationCode']->getCode() == '02' || $this->_tpl_vars['identificationCode']->getCode() == '15'): ?>		<meta name="citation_isbn" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['identificationCode']->getValue())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['chapter']): ?>
		<?php $this->assign('authors', $this->_tpl_vars['chapter']->getAuthors()); ?>
<?php else: ?>
		<?php $this->assign('authors', $this->_tpl_vars['monograph']->getAuthors()); ?>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['publishedMonograph']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<meta name="citation_author" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['author']->getMiddleName() != ""): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php $this->assign('affiliation', $this->_tpl_vars['author']->getAffiliation($this->_tpl_vars['currentPress']->getPrimaryLocale())); ?>
	<?php if ($this->_tpl_vars['affiliation']): ?>
		<meta name="citation_author_institution" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['chapter']): ?>
	<meta name="citation_title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['chapter']->getTitle($this->_tpl_vars['currentPress']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php else: ?>
	<meta name="citation_title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getTitle($this->_tpl_vars['currentPress']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endif; ?>

<?php if ($this->_tpl_vars['bestPublicationDate']): ?>
	<meta name="citation_publication_date" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['bestPublicationDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
"/>
<?php endif; ?>

<?php $this->assign('publisher', $this->_tpl_vars['currentPress']->getSetting('publisher')); ?>
<?php if ($this->_tpl_vars['publisher']): ?>
	<meta name="citation_publisher" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endif; ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['publishedMonograph']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['publicationFormat']->getId(), $this->_tpl_vars['submissionFile']->getFileIdAndRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['publicationFormat']->getId(), $this->_tpl_vars['submissionFile']->getFileIdAndRevision()))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'downloadUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'downloadUrl'));?>

<meta name="citation_pdf_url" content="<?php echo $this->_tpl_vars['downloadUrl']; ?>
"/>

<?php $_from = $this->_tpl_vars['submissionKeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keywordLocale'] => $this->_tpl_vars['languageKeywords']):
?>
	<?php $_from = $this->_tpl_vars['languageKeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyword']):
?>
		<meta name="citation_keywords" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['keywordLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>