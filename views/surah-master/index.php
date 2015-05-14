<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SurahMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Surah Masters');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surah-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Surah Master'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'headerRowOptions' => [
        	'style' =>'	align: right;'     				
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Surah_Number',
            'Surah_Name',
            [
            	'attribute' => 'Description',
            	'format' => 'text',
            	'label' => 'Description',
            	'contentOptions' => [
            		'style'=>'	font-size: 30px;
  								font-family: me_quran, Traditional Arabic;
  								font-weight: bold;
  								text-align: right;
  								width: 50%'
  					],
            ],

            ['class' => 'yii\grid\ActionColumn'
            ],
        ],
    ]); ?>

</div>
