<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipa".
 *
 * @property int $id
 * @property string $nome
 * @property string $foto
 * @property string $sobre_pt
 * @property string $sobre_en
 */
class Equipa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'foto', 'sobre_pt'], 'required'],
            [['sobre_pt', 'sobre_en'], 'string'],
            [['nome'], 'string', 'max' => 50],
            [['foto'], 'string', 'max' => 100],
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
            'foto' => 'Foto',
            'sobre_pt' => 'Sobre Pt',
            'sobre_en' => 'Sobre En',
        ];
    }
}
