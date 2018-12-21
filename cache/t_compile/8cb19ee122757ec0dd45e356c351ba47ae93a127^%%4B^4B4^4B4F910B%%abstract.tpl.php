<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:49:35
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/jatsParser/templates/abstract.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/jatsParser/templates/abstract.tpl', 14, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/jatsParser/templates/abstract.tpl', 19, false),array('modifier', 'nl2br', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/jatsParser/templates/abstract.tpl', 19, false),)), $this); ?>

<div class="panwrap abstract">
    <div class="section">
        <h2 class="title">
            <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>

        </h2>
    </div>
    <div class="forpan">
        <div class="panel-body">
            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        </div>
    </div>
</div>