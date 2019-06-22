<?php
/**
 * Error handler version for web based modules
 */

namespace goenergies\yii2\audit\components\web;

use goenergies\yii2\audit\components\base\ErrorHandlerTrait;

/**
 * ErrorHandler
 * @package goenergies\yii2\audit\components\web
 */
class ErrorHandler extends \yii\web\ErrorHandler
{
    use ErrorHandlerTrait;
}