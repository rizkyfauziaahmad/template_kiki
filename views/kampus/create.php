<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kampus */

$this->title = 'Create Kampus';
$this->params['breadcrumbs'][] = ['label' => 'Kampuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kampus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
