<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:30
         compiled from frontend/pages/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/pages/search.tpl', 25, false),array('function', 'csrf', 'frontend/pages/search.tpl', 26, false),array('function', 'translate', 'frontend/pages/search.tpl', 32, false),array('function', 'html_select_date', 'frontend/pages/search.tpl', 46, false),array('function', 'page_info', 'frontend/pages/search.tpl', 86, false),array('function', 'page_links', 'frontend/pages/search.tpl', 87, false),array('modifier', 'escape', 'frontend/pages/search.tpl', 34, false),array('block', 'iterate', 'frontend/pages/search.tpl', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "common.search")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_search">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "common.search")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<form class="cmp_form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'search'), $this);?>
">
		<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


				<div class="search_input">
			<label class="pkp_screen_reader" for="query">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchFor"), $this);?>

			</label>
			<input type="text" id="query" name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="query" placeholder="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
		</div>

		<fieldset class="search_advanced">
			<legend>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.advancedFilters"), $this);?>

			</legend>
			<div class="date_range">
				<div class="from">
					<label class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateFrom"), $this);?>

					</label>
					<?php echo smarty_function_html_select_date(array('prefix' => 'dateFrom','time' => $this->_tpl_vars['dateFrom'],'start_year' => $this->_tpl_vars['yearStart'],'end_year' => $this->_tpl_vars['yearEnd'],'year_empty' => "",'month_empty' => "",'day_empty' => "",'field_order' => 'YMD'), $this);?>

				</div>
				<div class="to">
					<label class="label">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateTo"), $this);?>

					</label>
					<?php echo smarty_function_html_select_date(array('prefix' => 'dateTo','time' => $this->_tpl_vars['dateTo'],'start_year' => $this->_tpl_vars['yearStart'],'end_year' => $this->_tpl_vars['yearEnd'],'year_empty' => "",'month_empty' => "",'day_empty' => "",'field_order' => 'YMD'), $this);?>

				</div>
			</div>
			<div class="author">
				<label class="label" for="authors">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.author"), $this);?>

				</label>
				<input type="text" for="authors" name="authors" value="<?php echo $this->_tpl_vars['authors']; ?>
">
			</div>
		</fieldset>

		<div class="submit">
			<button class="submit" type="submit"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
</button>
		</div>
	</form>

		<div class="search_results">
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/article_summary.tpl", 'smarty_include_vars' => array('article' => $this->_tpl_vars['result']['publishedArticle'],'showDatePublished' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>

		<?php if ($this->_tpl_vars['results']->wasEmpty()): ?>
		<?php if ($this->_tpl_vars['error']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/notification.tpl", 'smarty_include_vars' => array('type' => 'error','message' => ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/notification.tpl", 'smarty_include_vars' => array('type' => 'notice','messageKey' => "search.noResults")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>

		<?php else: ?>
		<div class="cmp_pagination">
			<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>

			<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'results','iterator' => $this->_tpl_vars['results'],'name' => 'search','query' => $this->_tpl_vars['query'],'searchJournal' => $this->_tpl_vars['searchJournal'],'authors' => $this->_tpl_vars['authors'],'title' => $this->_tpl_vars['title'],'abstract' => $this->_tpl_vars['abstract'],'galleyFullText' => $this->_tpl_vars['galleyFullText'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'indexTerms' => $this->_tpl_vars['indexTerms'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'orderBy' => $this->_tpl_vars['orderBy'],'orderDir' => $this->_tpl_vars['orderDir']), $this);?>

		</div>
	<?php endif; ?>
</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>