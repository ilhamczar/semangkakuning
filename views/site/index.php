<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhraseMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Quran');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrase-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
            	'attribute' => 'Phrase_Content',
            	'format' => 'text',
            	'label' => 'Phrase Content',
            	'contentOptions' => [
            		'style'=>'	font-family: me_quran;
  								font-weight: bold;
  								text-align: right;
  								width: 70%'
  					],
            ],
        ],
    ]); ?>

</div>
