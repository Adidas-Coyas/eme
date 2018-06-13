<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contatos".
 *
 * @property int $id
 * @property int $telemovel
 * @property int $telefone
 * @property string $email
 * @property int $fax
 * @property string $localizacao
 * @property string $descricao_pt
 * @property string $lang
 */
class Contatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['telemovel', 'telefone', 'email', 'fax', 'localizacao'], 'required'],
            [['telemovel', 'telefone', 'fax'], 'integer'],
            [['localizacao', 'lang'], 'string'],
            [['email'], 'string', 'max' => 80],
            [['descricao_pt'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'telemovel' => 'Telemovel',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'fax' => 'Fax',
            'localizacao' => 'Localizacao',
            'descricao_pt' => 'Descricao Pt',
            'lang' => 'Lang',
        ];
    }
}
