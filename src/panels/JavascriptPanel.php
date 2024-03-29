<?php

namespace goenergies\yii2\audit\panels;

use goenergies\yii2\audit\components\panels\Panel;
use goenergies\yii2\audit\components\panels\RendersSummaryChartTrait;
use goenergies\yii2\audit\models\AuditJavascript;
use goenergies\yii2\audit\models\AuditJavascriptSearch;
use Yii;
use yii\grid\GridViewAsset;

/**
 * JavascriptPanel
 * @package goenergies\yii2\audit\panels
 */
class JavascriptPanel extends Panel
{
    use RendersSummaryChartTrait;

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return \Yii::t('audit', 'Javascripts');
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return $this->getName() . ' <small>(' . count($this->_model->javascripts) . ')</small>';
    }

    /**
     * @inheritdoc
     */
    public function hasEntryData($entry)
    {
        return count($entry->javascripts) > 0;
    }

    /**
     * @inheritdoc
     */
    public function getDetail()
    {
        $searchModel = new AuditJavascriptSearch();
        $params = \Yii::$app->request->getQueryParams();
        $params['AuditJavascriptSearch']['entry_id'] = $params['id'];
        $dataProvider = $searchModel->search($params);

        return \Yii::$app->view->render('panels/javascript/detail', [
            'panel'        => $this,
            'dataProvider' => $dataProvider,
            'searchModel'  => $searchModel,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getIndexUrl()
    {
        return ['javascript/index'];
    }

    /**
     * @inheritdoc
     */
    protected function getChartModel()
    {
        return AuditJavascript::className();
    }

    /**
     * @inheritdoc
     */
    public function getChart()
    {
        return \Yii::$app->view->render('panels/mail/chart', [
            'panel' => $this,
            'chartData' => $this->getChartData()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function registerAssets($view)
    {
        GridViewAsset::register($view);
    }

    /**
     * @inheritdoc
     */
    public function cleanup($maxAge = null)
    {
        $maxAge = $maxAge !== null ? $maxAge : $this->maxAge;
        if ($maxAge === null)
            return false;
        return AuditJavascript::deleteAll([
            '<=', 'created', date('Y-m-d 23:59:59', strtotime("-$maxAge days"))
        ]);
    }

}