<?php

use app\models\Categorias;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Livros */
/* @var $model app\models\Categorias */
/* @var $form yii\widgets\ActiveForm */

$model1 = new \app\models\Categorias;
?>

<div class="livros-form">



    <?php $form = ActiveForm::begin(); ?>

    <div class="form-row">
        <div class="form-group col-md-6">
            <?= $form->field($model, 'nome')-> label('Nome do Livro') ?>
        </div>

        <div class="form-group col-md-6">
            <?= $form->field($model, 'categoria_livros')-> dropDownList(ArrayHelper::map(Categorias::find()->all(),'categoria_livros', 'categoria_livros'), ['prompt' => '--- Selecione uma Categoria ---']) ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-12">
            <?= $form->field($model, 'descricao')-> label('Descrição do Livro') ?>
        </div>
    </div>


    <br><br><br>

    <div class="form-group col-md-6">
        <?= Html::submitButton('CADASTAR', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
