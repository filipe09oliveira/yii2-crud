<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categorias */

$this->title = 'Atualizar Categoria de ID: ' . $model->id;
?>
<div class="categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-categoria', [
        'model' => $model,
    ]) ?>

</div>
