<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:19
         compiled from frontend/objects/article_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/objects/article_details.tpl', 68, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/article_details.tpl', 133, false),array('modifier', 'nl2br', 'frontend/objects/article_details.tpl', 133, false),array('modifier', 'date_format', 'frontend/objects/article_details.tpl', 227, false),array('modifier', 'count', 'frontend/objects/article_details.tpl', 233, false),array('function', 'translate', 'frontend/objects/article_details.tpl', 118, false),array('function', 'call_hook', 'frontend/objects/article_details.tpl', 137, false),array('function', 'url', 'frontend/objects/article_details.tpl', 199, false),)), $this); ?>
<article class="obj_article_details">
	<h1 class="page_title">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	</h1>

	<?php if ($this->_tpl_vars['article']->getLocalizedSubtitle()): ?>
		<h2 class="subtitle">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubtitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

		</h2>
	<?php endif; ?>

	<div class="row">
		<div class="main_entry">

			<?php if ($this->_tpl_vars['article']->getAuthors()): ?>
				<ul class="item authors">
					<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
						<li>
							<span class="name">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							</span>
							<?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?>
								<span class="affiliation">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

								</span>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['author']->getOrcid()): ?>
								<span class="orcid">
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getOrcid())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getOrcid())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									</a>
								</span>
							<?php endif; ?>
						</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>

						<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
				<?php if ($this->_tpl_vars['pubIdPlugin']->getPubIdType() != 'doi'): ?>
					<?php continue; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
					<?php $this->assign('pubId', $this->_tpl_vars['article']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
				<?php else: ?>
					<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article'])); ?>				<?php endif; ?>
				<?php if ($this->_tpl_vars['pubId']): ?>
					<?php $this->assign('doiUrl', ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
					<div class="item doi">
						<span class="label">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.readerDisplayName"), $this);?>

						</span>
						<span class="value">
							<a href="<?php echo $this->_tpl_vars['doiUrl']; ?>
">
								<?php echo $this->_tpl_vars['doiUrl']; ?>

							</a>
						</span>
					</div>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

						<?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?>
				<div class="item abstract">
					<h3 class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</h3>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

				</div>
			<?php endif; ?>

			<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Article::Main"), $this);?>


						<?php $this->assign('hasBiographies', 0); ?>
			<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
				<?php if ($this->_tpl_vars['author']->getLocalizedBiography()): ?>
					<?php $this->assign('hasBiographies', $this->_tpl_vars['hasBiographies']+1); ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['hasBiographies']): ?>
				<div class="item author_bios">
					<h3 class="label">
						<?php if ($this->_tpl_vars['hasBiographies'] > 1): ?>
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorBiographies"), $this);?>

						<?php else: ?>
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorBiography"), $this);?>

						<?php endif; ?>
					</h3>
					<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
						<?php if ($this->_tpl_vars['author']->getLocalizedBiography()): ?>
							<div class="sub_item">
								<div class="label">
									<?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?>
										<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorName', ob_get_contents());ob_end_clean(); ?>
										<?php ob_start(); ?><span class="affiliation"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorAffiliation', ob_get_contents());ob_end_clean(); ?>
										<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorWithAffiliation",'name' => $this->_tpl_vars['authorName'],'affiliation' => $this->_tpl_vars['authorAffiliation']), $this);?>

									<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									<?php endif; ?>
								</div>
								<div class="value">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedBiography())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['article']->getCitations()): ?>
				<div class="item references">
					<h3 class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations"), $this);?>

					</h3>
					<div class="value">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCitations())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

					</div>
				</div>
			<?php endif; ?>

		</div><!-- .main_entry -->

		<div class="entry_details">

						<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage() || $this->_tpl_vars['issue']->getLocalizedCoverImage()): ?>
				<div class="item cover_image">
					<div class="sub_item">
						<?php if ($this->_tpl_vars['article']->getLocalizedCoverImage()): ?>
							<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['article']->getLocalizedCoverImageAltText()): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
						<?php else: ?>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
								<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['issue']->getLocalizedCoverImageAltText()): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getLocalizedCoverImageAltText())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
							</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

						<?php $this->assign('galleys', $this->_tpl_vars['article']->getGalleys()); ?>
			<?php if ($this->_tpl_vars['galleys']): ?>
				<div class="item galleys">
					<ul class="value galleys_links">
						<?php $_from = $this->_tpl_vars['galleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
							<li>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/galley_link.tpl", 'smarty_include_vars' => array('parent' => $this->_tpl_vars['article'],'galley' => $this->_tpl_vars['galley'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			<?php endif; ?>

			<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
				<div class="item published">
					<div class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.published"), $this);?>

					</div>
					<div class="value">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

					</div>
				</div>
			<?php endif; ?>

						<?php if (count($this->_tpl_vars['citationPlugins'])): ?>
				<div class="item citation_formats">
										<?php $_from = $this->_tpl_vars['citationPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['citationPlugins'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['citationPlugins']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['citationPlugin']):
        $this->_foreach['citationPlugins']['iteration']++;
?>
						<div class="sub_item citation_display">
							<div class="label">
								<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.howToCite"), $this);?>

							</div>
							<div id="citationOutput" class="value">
								<?php echo $this->_tpl_vars['citationPlugin']->fetchCitation($this->_tpl_vars['article'],$this->_tpl_vars['issue'],$this->_tpl_vars['currentContext']); ?>

							</div>
						</div>
						<?php break; ?>
					<?php endforeach; endif; unset($_from); ?>

										<div class="sub_item citation_format_options">
						<div class="label">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.howToCite.citationFormats"), $this);?>

						</div>
						<div class="value">
							<ul>
								<?php $_from = $this->_tpl_vars['citationPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['citationPlugins'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['citationPlugins']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['citationPlugin']):
        $this->_foreach['citationPlugins']['iteration']++;
?>
									<li class="<?php echo ((is_array($_tmp=$this->_tpl_vars['citationPlugin']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_foreach['citationPlugins']['iteration'] == 1): ?> current<?php endif; ?>">
										<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'cite','path' => $this->_tpl_vars['article']->getBestArticleId()), $this);?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['citationPlugin']->getName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('citationUrl', ob_get_contents());ob_end_clean(); ?>
										<a href="<?php echo $this->_tpl_vars['citationUrl']; ?>
"<?php if (! $this->_tpl_vars['citationPlugin']->isDownloadable()): ?> data-load-citation="true"<?php endif; ?> target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['citationPlugin']->getCitationFormatName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
									</li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>

						<div class="item issue">
				<div class="sub_item">
					<div class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>

					</div>
					<div class="value">
						<a class="title" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
">
							<?php echo $this->_tpl_vars['issue']->getIssueIdentification(); ?>

						</a>
					</div>
				</div>

				<?php if ($this->_tpl_vars['section']): ?>
					<div class="sub_item">
						<div class="label">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>

						</div>
						<div class="value">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

						</div>
					</div>
				<?php endif; ?>
			</div>

									<?php if (! empty ( $this->_tpl_vars['keywords'][$this->_tpl_vars['currentLocale']] )): ?> 
				<div class="item keywords">
					<h3 class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>

					</h3>
					<p>
					<?php $_from = $this->_tpl_vars['keywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keyword']):
?>
						<?php $_from = $this->_tpl_vars['keyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['keywords'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['keywords']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['keywordItem']):
        $this->_foreach['keywords']['iteration']++;
?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['keywordItem'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (! ($this->_foreach['keywords']['iteration'] == $this->_foreach['keywords']['total'])): ?>, <?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php endforeach; endif; unset($_from); ?>
					</p>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['article']->getLocalizedSubject()): ?>
				<div class="item subject">
					<h3 class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>

					</h3>
					<div class="value">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

					</div>
				</div>
			<?php endif; ?>

						<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
				<?php if ($this->_tpl_vars['pubIdPlugin']->getPubIdType() == 'doi'): ?>
					<?php continue; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
					<?php $this->assign('pubId', $this->_tpl_vars['article']->getStoredPubId($this->_tpl_vars['pubIdPlugin']->getPubIdType())); ?>
				<?php else: ?>
					<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article'])); ?>				<?php endif; ?>
				<?php if ($this->_tpl_vars['pubId']): ?>
					<div class="item pubid">
						<div class="label">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

						</div>
						<div class="value">
							<?php if (((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))): ?>
								<a id="pub-id::<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

								</a>
							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['pubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

						<?php if ($this->_tpl_vars['copyright'] || $this->_tpl_vars['licenseUrl']): ?>
				<div class="item copyright">
					<?php if ($this->_tpl_vars['licenseUrl']): ?>
						<?php if ($this->_tpl_vars['ccLicenseBadge']): ?>
							<?php echo $this->_tpl_vars['ccLicenseBadge']; ?>

						<?php else: ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['licenseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="copyright">
								<?php if ($this->_tpl_vars['copyrightHolder']): ?>
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightHolder' => $this->_tpl_vars['copyrightHolder'],'copyrightYear' => $this->_tpl_vars['copyrightYear']), $this);?>

								<?php else: ?>
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.license"), $this);?>

								<?php endif; ?>
							</a>
						<?php endif; ?>
					<?php endif; ?>
					<?php echo $this->_tpl_vars['copyright']; ?>

				</div>
			<?php endif; ?>

			<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Article::Details"), $this);?>


		</div><!-- .entry_details -->
	</div><!-- .row -->

</article>