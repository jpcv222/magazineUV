<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:09
         compiled from frontend/objects/monograph_full.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/objects/monograph_full.tpl', 69, false),array('modifier', 'count', 'frontend/objects/monograph_full.tpl', 84, false),array('modifier', 'strip_unsafe_html', 'frontend/objects/monograph_full.tpl', 131, false),array('modifier', 'nl2br', 'frontend/objects/monograph_full.tpl', 236, false),array('modifier', 'strip_tags', 'frontend/objects/monograph_full.tpl', 247, false),array('modifier', 'uniqid', 'frontend/objects/monograph_full.tpl', 247, false),array('function', 'translate', 'frontend/objects/monograph_full.tpl', 78, false),array('function', 'pluck_files', 'frontend/objects/monograph_full.tpl', 162, false),array('function', 'call_hook', 'frontend/objects/monograph_full.tpl', 190, false),array('function', 'url', 'frontend/objects/monograph_full.tpl', 247, false),array('block', 'iterate', 'frontend/objects/monograph_full.tpl', 351, false),)), $this); ?>
<div class="obj_monograph_full">
	<h1 class="title">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

	</h1>

	<div class="row">
		<div class="main_entry">

						<div class="item authors">
				<h2 class="pkp_screen_reader">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authors"), $this);?>

				</h2>

				<?php $this->assign('authors', $this->_tpl_vars['monograph']->getAuthors()); ?>

								<?php if (count($this->_tpl_vars['authors']) < 5): ?>
					<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
						<div class="sub_item">
							<div class="label">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							</div>
							<?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?>
								<div class="value">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

								</div>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['author']->getOrcid()): ?>
								<span class="orcid">
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getOrcid())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getOrcid())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									</a>
								</span>
							<?php endif; ?>
						</div>
					<?php endforeach; endif; unset($_from); ?>

								<?php else: ?>
					<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
												<?php echo ''; ?><?php if ($this->_tpl_vars['author']->getLocalizedAffiliation()): ?><?php echo ''; ?><?php ob_start(); ?><?php echo '<span class="label">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</span>'; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorName', ob_get_contents());ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo '<span class="value">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</span>'; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('authorAffiliation', ob_get_contents());ob_end_clean(); ?><?php echo ''; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorWithAffiliation",'name' => $this->_tpl_vars['authorName'],'affiliation' => $this->_tpl_vars['authorAffiliation']), $this);?><?php echo ''; ?><?php else: ?><?php echo '<span class="label">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?><?php if (! ($this->_foreach['authors']['iteration'] == $this->_foreach['authors']['total'])): ?><?php echo ''; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorListSeparator"), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
			</div>

						<div class="item abstract">
				<h3 class="label">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.synopsis"), $this);?>

				</h3>
				<div class="value">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

				</div>
			</div>

						<?php if (count($this->_tpl_vars['chapters'])): ?>
				<div class="item chapters">
					<h3 class="pkp_screen_reader">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.chapters"), $this);?>

					</h3>
					<ul>
						<?php $_from = $this->_tpl_vars['chapters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['chapter']):
?>
							<?php $this->assign('chapterId', $this->_tpl_vars['chapter']->getId()); ?>
							<li>
								<div class="title">
									<?php echo $this->_tpl_vars['chapter']->getLocalizedTitle(); ?>

									<?php if ($this->_tpl_vars['chapter']->getLocalizedSubtitle() != ''): ?>
										<div class="subtitle">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['chapter']->getLocalizedSubtitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

										</div>
									<?php endif; ?>
								</div>
								<?php $this->assign('chapterAuthors', $this->_tpl_vars['chapter']->getAuthorNamesAsString()); ?>
								<?php if ($this->_tpl_vars['monograph']->getAuthorString() != $this->_tpl_vars['chapterAuthors']): ?>
									<div class="authors">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['chapterAuthors'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									</div>
								<?php endif; ?>


																<?php echo $this->_plugins['function']['pluck_files'][0][0]->smartyPluckFiles(array('assign' => 'chapterFiles','files' => $this->_tpl_vars['availableFiles'],'by' => 'chapter','value' => $this->_tpl_vars['chapterId']), $this);?>

								<?php if (count($this->_tpl_vars['chapterFiles'])): ?>
									<div class="files">

																				<?php $_from = $this->_tpl_vars['publicationFormats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
											<?php echo $this->_plugins['function']['pluck_files'][0][0]->smartyPluckFiles(array('assign' => 'pubFormatFiles','files' => $this->_tpl_vars['chapterFiles'],'by' => 'publicationFormat','value' => $this->_tpl_vars['format']->getId()), $this);?>


											<?php $_from = $this->_tpl_vars['pubFormatFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>

																								<?php $this->assign('useFileName', false); ?>
												<?php if (count($this->_tpl_vars['pubFormatFiles']) > 1): ?>
													<?php $this->assign('useFileName', true); ?>
												<?php endif; ?>

												<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/downloadLink.tpl", 'smarty_include_vars' => array('downloadFile' => $this->_tpl_vars['file'],'monograph' => $this->_tpl_vars['monograph'],'publicationFormat' => $this->_tpl_vars['format'],'currency' => $this->_tpl_vars['currency'],'useFilename' => $this->_tpl_vars['useFileName'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
											<?php endforeach; endif; unset($_from); ?>
										<?php endforeach; endif; unset($_from); ?>
									</div>
								<?php endif; ?>
							</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
			<?php endif; ?>

			<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Catalog::Book::Main"), $this);?>


						<?php $this->assign('hasBiographies', 0); ?>
			<?php $_from = $this->_tpl_vars['monograph']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
					<?php $_from = $this->_tpl_vars['monograph']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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

						<?php if ($this->_tpl_vars['monograph']->getCitations()): ?>
				<div class="item references">
					<h3 class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.citations"), $this);?>

					</h3>
					<div class="value">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getCitations())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

					</div>
				</div>
			<?php endif; ?>

		</div><!-- .main_entry -->

		<div class="entry_details">

						<div class="item cover">
				<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.coverImageTitle",'monographTitle' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedFullTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
" src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','submissionId' => $this->_tpl_vars['monograph']->getId(),'random' => ((is_array($_tmp=$this->_tpl_vars['monograph']->getId())) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))), $this);?>
" />
			</div>

						<?php if (! is_null ( $this->_tpl_vars['sharingCode'] )): ?>
				<div class="item sharing">
					<?php echo $this->_tpl_vars['sharingCode']; ?>

				</div>
			<?php endif; ?>

						<?php echo $this->_plugins['function']['pluck_files'][0][0]->smartyPluckFiles(array('assign' => 'nonChapterFiles','files' => $this->_tpl_vars['availableFiles'],'by' => 'chapter','value' => 0), $this);?>

			<?php if (count($this->_tpl_vars['nonChapterFiles'])): ?>
				<div class="item files">
					<?php $_from = $this->_tpl_vars['publicationFormats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
						<?php $this->assign('publicationFormatId', $this->_tpl_vars['format']->getId()); ?>

												<?php if ($this->_tpl_vars['format']->getRemoteUrl()): ?>
														<div class="pub_format_<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormatId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 pub_format_remote">
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getRemoteURL())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank" class="remote_resource">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

								</a>
							</div>

												<?php else: ?>

														<?php echo $this->_plugins['function']['pluck_files'][0][0]->smartyPluckFiles(array('assign' => 'pubFormatFiles','files' => $this->_tpl_vars['nonChapterFiles'],'by' => 'publicationFormat','value' => $this->_tpl_vars['format']->getId()), $this);?>


														<?php if (count($this->_tpl_vars['pubFormatFiles']) == 1): ?>
								<div class="pub_format_<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormatId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 pub_format_single">
									<?php $_from = $this->_tpl_vars['pubFormatFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
										<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/downloadLink.tpl", 'smarty_include_vars' => array('downloadFile' => $this->_tpl_vars['file'],'monograph' => $this->_tpl_vars['monograph'],'publicationFormat' => $this->_tpl_vars['format'],'currency' => $this->_tpl_vars['currency'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									<?php endforeach; endif; unset($_from); ?>
								</div>

														<?php elseif (count($this->_tpl_vars['pubFormatFiles']) > 1): ?>
								<div class="pub_format_<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormatId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
									<span class="label">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['format']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									</span>
									<span class="value">
										<ul>
											<?php $_from = $this->_tpl_vars['pubFormatFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
												<li>
													<span class="name">
														<?php echo ((is_array($_tmp=$this->_tpl_vars['file']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

													</span>
													<span class="link">
														<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/downloadLink.tpl", 'smarty_include_vars' => array('downloadFile' => $this->_tpl_vars['file'],'monograph' => $this->_tpl_vars['monograph'],'publicationFormat' => $this->_tpl_vars['format'],'currency' => $this->_tpl_vars['currency'],'useFilename' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
													</span>
												</li>
											<?php endforeach; endif; unset($_from); ?>
										</ul>
									</span><!-- .value -->
								</div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['series']): ?>
				<div class="item series">
					<div class="sub_item">
						<div class="label">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "series.series"), $this);?>

						</div>
						<div class="value">
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'series','path' => $this->_tpl_vars['series']->getPath()), $this);?>
">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['series']->getLocalizedFullTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							</a>
						</div>
					</div>
					<?php if ($this->_tpl_vars['series']->getOnlineISSN()): ?>
						<div class="sub_item">
							<div class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.manage.series.onlineIssn"), $this);?>
</div>
							<div class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['series']->getOnlineISSN())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
						</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['series']->getPrintISSN()): ?>
						<div class="sub_item">
							<div class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.manage.series.printIssn"), $this);?>
</div>
							<div class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['series']->getPrintISSN())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

						<?php $this->assign('categories', $this->_tpl_vars['monograph']->getCategories()); ?>
			<?php if (! $this->_tpl_vars['categories']->wasEmpty()): ?>
				<div class="item categories">
					<div class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "catalog.categories"), $this);?>

					</div>
					<div class="value">
						<ul>
							<?php $this->_tag_stack[] = array('iterate', array('from' => 'categories','item' => 'category')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
								<li>
									<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'category','path' => $this->_tpl_vars['category']->getPath()), $this);?>
">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

									</a>
								</li>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
					</div>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['monograph']->getCopyrightYear() && $this->_tpl_vars['monograph']->getLocalizedCopyrightHolder()): ?>
				<div class="item copyright">
					<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightYear' => $this->_tpl_vars['monograph']->getCopyrightYear(),'copyrightHolder' => $this->_tpl_vars['monograph']->getLocalizedCopyrightHolder()), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>

				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['licenseUrl']): ?>
				<div class="item license">
					<?php if ($this->_tpl_vars['ccLicenseBadge']): ?>
						<?php echo $this->_tpl_vars['ccLicenseBadge']; ?>

					<?php else: ?>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['licenseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.license"), $this);?>

						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>

						<?php if (count ( $this->_tpl_vars['publicationFormats'] )): ?>
				<?php $_from = $this->_tpl_vars['publicationFormats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['publicationFormat']):
?>
					<?php if ($this->_tpl_vars['publicationFormat']->getIsApproved()): ?>

						<?php $this->assign('identificationCodes', $this->_tpl_vars['publicationFormat']->getIdentificationCodes()); ?>
						<?php $this->assign('identificationCodes', $this->_tpl_vars['identificationCodes']->toArray()); ?>
						<?php $this->assign('publicationDates', $this->_tpl_vars['publicationFormat']->getPublicationDates()); ?>
						<?php $this->assign('publicationDates', $this->_tpl_vars['publicationDates']->toArray()); ?>
						<?php $this->assign('hasPubId', false); ?>
						<?php if (count($this->_tpl_vars['enabledPubIdTypes'])): ?>
							<?php $_from = $this->_tpl_vars['enabledPubIdTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdType']):
?>
								<?php if ($this->_tpl_vars['publicationFormat']->getStoredPubId($this->_tpl_vars['pubIdType'])): ?>
									<?php break; ?>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>

												<?php if (! $this->_tpl_vars['identificationCodes'] && ! $this->_tpl_vars['publicationDates'] && ! $this->_tpl_vars['hasPubId'] && ! $this->_tpl_vars['publicationFormat']->getPhysicalFormat()): ?>
							<?php continue; ?>
						<?php endif; ?>

						<div class="item publication_format">

														<?php if (count ( $this->_tpl_vars['publicationFormats'] ) > 1): ?>
								<h3 class="pkp_screen_reader">
									<?php $this->assign('publicationFormatName', $this->_tpl_vars['publicationFormat']->getLocalizedName()); ?>
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.publicationFormatDetails",'format' => ((is_array($_tmp=$this->_tpl_vars['publicationFormatName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>

								</h3>

								<div class="sub_item item_heading format">
									<div class="label">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormat']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									</div>
								</div>
							<?php else: ?>
								<h3 class="pkp_screen_reader">
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.miscellaneousDetails"), $this);?>

								</h3>
							<?php endif; ?>


														<?php if ($this->_tpl_vars['identificationCodes']): ?>
								<?php $_from = $this->_tpl_vars['identificationCodes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['identificationCode']):
?>
									<div class="sub_item identification_code">
										<div class="label">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['identificationCode']->getNameForONIXCode())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

										</div>
										<div class="value">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['identificationCode']->getValue())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

										</div>
									</div>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>

														<?php if ($this->_tpl_vars['publicationDates']): ?>
								<?php $_from = $this->_tpl_vars['publicationDates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['publicationDate']):
?>
									<div class="sub_item date">
										<div class="label">
											<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationDate']->getNameForONIXCode())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

										</div>
										<div class="value">
											<?php $this->assign('dates', $this->_tpl_vars['publicationDate']->getReadableDates()); ?>
																						<?php if ($this->_tpl_vars['publicationDate']->isFreeText() || count($this->_tpl_vars['dates']) == 1): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['dates'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

											<?php else: ?>
																								<?php echo ((is_array($_tmp=$this->_tpl_vars['dates'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&mdash;<?php echo ((is_array($_tmp=$this->_tpl_vars['dates'][1])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

											<?php endif; ?>
											<?php if ($this->_tpl_vars['publicationDate']->isHijriCalendar()): ?>
												<div class="hijri">
													<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateHijri"), $this);?>

												</div>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>

														<?php if (count($this->_tpl_vars['enabledPubIdTypes'])): ?>
								<?php $_from = $this->_tpl_vars['enabledPubIdTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdType']):
?>
									<?php $this->assign('storedPubId', $this->_tpl_vars['publicationFormat']->getStoredPubId($this->_tpl_vars['pubIdType'])); ?>
									<?php if ($this->_tpl_vars['storedPubId'] != ''): ?>
										<div class="sub_item pubid <?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormat']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
											<div class="label">
												<?php echo $this->_tpl_vars['pubIdType']; ?>

											</div>
											<div class="value">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['storedPubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

											</div>
										</div>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>

														<?php if ($this->_tpl_vars['publicationFormat']->getPhysicalFormat()): ?>
								<div class="sub_item dimensions">
									<div class="label">
										<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "monograph.publicationFormat.productDimensions"), $this);?>

									</div>
									<div class="value">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormat']->getDimensions())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>

			<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Catalog::Book::Details"), $this);?>


		</div><!-- .details -->
	</div><!-- .row -->

</div><!-- .obj_monograph_full -->