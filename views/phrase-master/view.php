<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PhraseMaster */

$this->title = $model->Phrase_ID;
$this->params['breadcrumbs'][] = ['label' => 'Phrase Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrase-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Phrase_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Phrase_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Phrase_ID',
            'Database_ID',
            'Surah_Number',
            'Phrase_Number',
            'Phrase_Content:ntext',
        ],
    ]) ?>

</div>
