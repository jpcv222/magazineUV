<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:10
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/generic/addThis/templates/addThis.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/generic/addThis/templates/addThis.tpl', 14, false),)), $this); ?>
<div class="item addthis">
	<div class="value">
		<!-- AddThis Button BEGIN -->
		<?php if ($this->_tpl_vars['addThisDisplayStyle'] == 'button'): ?>
			<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" style="border:0"/></a>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"></script>
		<?php elseif ($this->_tpl_vars['addThisDisplayStyle'] == 'simple_button'): ?>
			<div class="addthis_toolbox addthis_default_style ">
			<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" class="addthis_button_compact">Share</a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"></script>
		<?php elseif ($this->_tpl_vars['addThisDisplayStyle'] == 'large_toolbox'): ?>
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"></script>
		<?php elseif ($this->_tpl_vars['addThisDisplayStyle'] == 'small_toolbox_with_share'): ?>
			<div class="addthis_toolbox addthis_default_style ">
			<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" class="addthis_button_compact">Share</a>
			<span class="addthis_separator">|</span>
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"></script>
		<?php elseif ($this->_tpl_vars['addThisDisplayStyle'] == 'plus_one_share_counter'): ?>
			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"></script>
		<?php else: ?> 			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=<?php echo ((is_array($_tmp=$this->_tpl_vars['addThisProfileId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"></script>
		<?php endif; ?>
		<!-- AddThis Button END -->
	</div>
</div>