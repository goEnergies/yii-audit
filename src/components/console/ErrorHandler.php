<?php
/**
 * Console compatible error handler
 */

namespace goenergies\yii2\audit\components\console;

use goenergies\yii2\audit\components\base\ErrorHandlerTrait;

/**
 * ErrorHandler
 * @package goenergies\yii2\audit\components\console
 */
class ErrorHandler extends \yii\console\ErrorHandler
{
    use ErrorHandlerTrait;
}