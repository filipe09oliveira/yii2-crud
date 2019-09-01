<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Categorias';

?>
<div class="categoria-lista">

    <h1><?= Html::encode($this->title) ?></h1>

    <br><br>

    <p>
        <?= Html::a('CADASTRAR UM LIVRO', ['livros/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('CADASTRAR CATEGORIA', ['categorias/create-categoria'], ['class' => 'btn btn-warning']) ?>
    </p>
    <br><br>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'categoria_livros',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
