<?php

return [
    [
        'entry_id' => 1,
        'created' => '2015-06-25 01:02:03',
        'message' => "syntax error, unexpected '123' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$'",
        'code' => 4,
        'file' => '/vagrant/git/yii2-audit/src/views/entry/view.php',
        'line' => 95,
        'trace' => serialize([
            0 => [
                'function' => 'renderFile',
                'type' => '->',
                'class' => 'yii\\base\\View',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/View.php',
                'line' => 149,
                'args' => [],
            ],
            1 => [
                'function' => 'render',
                'type' => '->',
                'class' => 'yii\\base\\View',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/Controller.php',
                'line' => 371,
                'args' => [],
            ],
            2 => [
                'function' => 'render',
                'type' => '->',
                'class' => 'yii\\base\\Controller',
                'file' => '/vagrant/git/yii2-audit/src/controllers/EntryController.php',
                'line' => 66,
                'args' => [],
            ],
            3 => [
                'function' => 'actionView',
                'type' => '->',
                'class' => 'goenergies\\yii2\\audit\\controllers\\EntryController',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/InlineAction.php',
                'line' => 55,
                'args' => [],
            ],
            4 => [
                'function' => 'call_user_func_array',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/InlineAction.php',
                'line' => 55,
                'type' => '::',
                'args' => [],
            ],
            5 => [
                'function' => 'runWithParams',
                'type' => '->',
                'class' => 'yii\\base\\InlineAction',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/Controller.php',
                'line' => 151,
                'args' => [],
            ],
            6 => [
                'function' => 'runAction',
                'type' => '->',
                'class' => 'yii\\base\\Controller',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/Module.php',
                'line' => 455,
                'args' => [],
            ],
            7 => [
                'function' => 'runAction',
                'type' => '->',
                'class' => 'yii\\base\\Module',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/web/Application.php',
                'line' => 84,
                'args' => [],
            ],
            8 => [
                'function' => 'handleRequest',
                'type' => '->',
                'class' => 'yii\\web\\Application',
                'file' => '/vagrant/git/yii2-audit/vendor/yiisoft/yii2/base/Application.php',
                'line' => 375,
                'args' => [],
            ],
            9 => [
                'function' => 'run',
                'type' => '->',
                'class' => 'yii\\base\\Application',
                'file' => '/vagrant/git/yii2-audit/tests/codeception/_app/web/index.php',
                'line' => 12,
                'args' => [],
            ],
        ]),
    ],
];
