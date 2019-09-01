<?php

use yii\helpers\Html;use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Livros */

$this->title = 'Utualizar livro de ID: ' . $model->id;

?>

<div class="livros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <br><br><br><br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
