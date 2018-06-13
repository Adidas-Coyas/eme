<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projetos".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $lang
 */
class Projetos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projetos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao'], 'required'],
            [['descricao', 'lang'], 'string'],
            [['nome'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'lang' => 'Lang',
        ];
    }
}
