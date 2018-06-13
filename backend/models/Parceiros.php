<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parceiros".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao_pt
 * @property string $descricao_en
 * @property string $logo
 */
class Parceiros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parceiros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'logo'], 'required'],
            [['descricao_pt', 'descricao_en'], 'string'],
            [['nome'], 'string', 'max' => 50],
            [['logo'], 'string', 'max' => 100],
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
            'descricao_pt' => 'Descricao Pt',
            'descricao_en' => 'Descricao En',
            'logo' => 'Logo',
        ];
    }
}
