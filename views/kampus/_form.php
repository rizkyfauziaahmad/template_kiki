<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kampus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kampus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akreditasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
