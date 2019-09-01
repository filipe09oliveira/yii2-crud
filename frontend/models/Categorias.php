<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%categoria}}".
 *
 * @property int $id
 * @property string $categoria_livros
 *
 * @property Livros $livros
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%categoria}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoria_livros'], 'required'],
            [['categoria_livros'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoria_livros' => 'Categoria Livros',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CategoriaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoriaQuery(get_called_class());
    }
}
