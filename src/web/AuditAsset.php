<?php

namespace goenergies\yii2\audit\web;

use yii\web\AssetBundle;

/**
 * AuditAsset
 * @package goenergies\yii2\audit\assets
 */
class AuditAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/goenergies/yii-audit/src/web/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/audit.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
