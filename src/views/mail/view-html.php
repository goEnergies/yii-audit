<?php

/** @var View $this */
/** @var AuditMail $model */

use goenergies\yii2\audit\models\AuditMail;
use yii\web\View;
use yii\helpers\Html;

$this->title                   = Yii::t('audit', 'Mail #{id}', ['id' => $model->id]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('audit', 'Audit'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('audit', 'Mails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = '#' . $model->id;


//echo Yii::$app->formatter->asHtml($model->html);

if (class_exists('\PhpMimeMailParser\Parser')) {
    $parser = new \PhpMimeMailParser\Parser();
    $parser->setText($model->data);
    echo $parser->getMessageBody('htmlEmbedded');
} else {
    echo Html::tag('pre', $model->data) . Html::tag('br') . 'Please install php-mime-mail-parser for better functionality';
}
