<?php

use app\models\Categorias;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LivrosSearch */
/* @var $searchModel app\models\CategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de Livros';

?>
<div class="livros-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <br><br>

        <p>
            <?= Html::a('CADASTRAR UM LIVRO', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('CADASTRAR CATEGORIA', ['categorias/create-categoria'], ['class' => 'btn btn-warning']) ?>
        </p>
    <br><br>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'categoria_livros',
            'descricao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
