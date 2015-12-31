<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhraseMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phrase Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrase-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phrase Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Phrase_ID',
            'Database_ID',
            'Surah_Number',
            'Phrase_Number',
            'Phrase_Content:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>