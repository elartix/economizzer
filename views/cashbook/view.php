<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cashbook */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lançamento'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cashbook-view">

    <h2>#<?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a(Yii::t('app', 'Alterar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Excluir'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Tem certeza que deseja excluir?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'type.desc_type',
            'category.desc_category',
            'value',
            'description',
            'date',
            'is_pending',
            'attachment',
            'inc_datetime',
            'edit_datetime',
        ],
    ]) ?>

</div>