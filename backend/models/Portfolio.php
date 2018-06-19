<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $foto
 * @property string $lang
 * @property string $created_at
 * @property string $updated_at
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'foto', 'created_at'], 'required'],
            [['descricao', 'lang'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nome'], 'string', 'max' => 50],
            [['foto'], 'file', 'extensions' => 'png, jpg, gif'],
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
            'foto' => 'Foto',
            'lang' => 'Lingua',
            'created_at' => 'Criado em',
            'updated_at' => 'Atualizado em',
        ];
    }
}
