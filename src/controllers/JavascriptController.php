<?php

namespace goenergies\yii2\audit\controllers;

use goenergies\yii2\audit\components\web\Controller;
use goenergies\yii2\audit\models\AuditJavascript;
use goenergies\yii2\audit\models\AuditJavascriptSearch;
use Yii;
use yii\web\NotFoundHttpException;

/**
 * JavascriptController
 * @package goenergies\yii2\audit\controllers
 */
class JavascriptController extends Controller
{
    /**
     * Lists all AuditJavascript models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AuditJavascriptSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->get());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel'  => $searchModel,
        ]);
    }

    /**
     * Displays a single AuditJavascript model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = AuditJavascript::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException('The requested javascript does not exist.');
        }
        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
