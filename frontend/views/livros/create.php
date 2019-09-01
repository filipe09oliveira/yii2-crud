<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Livros */

$this->title = 'Cadastro de Livros';

?>
<div class="livros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <br><br><br><br><br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
