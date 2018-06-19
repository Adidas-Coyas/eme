<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicos".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $icon
 * @property string $lang
 */
class Servicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'icon'], 'required'],
            [['descricao', 'lang'], 'string'],
            [['nome'], 'string', 'max' => 50],
            [['icon'], 'file', 'extensions' => 'jpg, jpeg, png, gif'],
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
            'icon' => 'Icon',
            'lang' => 'Lingua',
        ];
    }
}
