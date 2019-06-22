<?php

namespace goenergies\yii2\audit\panels;

use goenergies\yii2\audit\components\panels\DataStoragePanelTrait;
use Yii;

/**
 * ConfigPanel
 * @package goenergies\yii2\audit\panels
 */
class ConfigPanel extends \yii\debug\panels\ConfigPanel
{
    use DataStoragePanelTrait;

    /**
     * @return string
     */
    public function getDetail()
    {
        return Yii::$app->view->render('@yii/debug/views/default/panels/config/detail', [
            'panel' => $this,
        ]);
    }

}