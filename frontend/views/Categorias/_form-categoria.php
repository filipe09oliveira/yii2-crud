<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <br><br><br><br>
    <?= $form->field($model, 'categoria_livros')->textInput(['maxlength' => true]) ?>

    <br><br><br><br>
    <div class="form-group">
        <?= Html::submitButton('CADASTRAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
