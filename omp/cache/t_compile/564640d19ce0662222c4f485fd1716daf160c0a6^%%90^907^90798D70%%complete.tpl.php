<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:20:43
         compiled from submission/form/complete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/form/complete.tpl', 10, false),array('function', 'url', 'submission/form/complete.tpl', 19, false),)), $this); ?>
<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.submissionComplete"), $this);?>
</h2>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.submissionCompleteThanks",'contextName' => $this->_tpl_vars['context']->getLocalizedName()), $this);?>
</p>
<div class="separator"></div>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.description"), $this);?>
</p>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.forNow"), $this);?>
</p>

<ul class="plain">
	<li><a href=<?php echo $this->_tpl_vars['reviewSubmissionUrl']; ?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.review"), $this);?>
</a></li>
	<li><a href=<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submission','op' => 'wizard'), $this);?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.create"), $this);?>
</a></li>
	<li><a href=<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'submissions','anchor' => 'submissions'), $this);?>
><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.submit.whatNext.return"), $this);?>
</a></li>
</ul>