<?php return array (
  'crontab' => 
  array (
    0 => 
    array (
      'className' => 'plugins.generic.usageStats.UsageStatsLoader',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
        0 => 'autoStage',
      ),
    ),
    1 => 
    array (
      'className' => 'lib.pkp.classes.task.ReviewReminder',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
  ),
  'enabled' => true,
); ?>