<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kampus */

$this->title = 'Update Kampus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kampuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kampus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
