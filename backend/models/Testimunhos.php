<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimunhos".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $lang
 */
class Testimunhos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimunhos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'foto'], 'required'],
            [['descricao', 'lang'], 'string'],
            [['nome'], 'string', 'max' => 50],
            [['foto'], 'file', 'extensions' => 'png, jpeg, git, jpg'],
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
            'lang' => 'Linguagem',
        ];
    }
}
