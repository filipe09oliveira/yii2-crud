<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%livros}}".
 *
 * @property int $id
 * * @property string $categoria_livros
 * @property string $nome
 */

class Livros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%livros}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'categoria_livros'], 'required'],
            [['nome', 'descricao', 'categoria_livros'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()

    {
        return [
            'id' => 'Livro ID',
            'nome' => 'Nome do Livro',
            'categoria_livros' => 'Categoria',
            'descricao' => 'Descricao do livro',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LivrosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LivrosQuery(get_called_class());
    }

}
