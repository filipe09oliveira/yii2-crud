<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categorias */


$this->title = 'Cadastro de Categoria de Livros';

?>
<div class="categorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-categoria', [
        'model' => $model,
    ]) ?>

</div>
