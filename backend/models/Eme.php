<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eme".
 *
 * @property int $id
 * @property string $sobre
 * @property string $missao
 * @property string $lang
 */
class Eme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sobre', 'missao', 'lang'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sobre' => 'Sobre',
            'missao' => 'Missao',
            'lang' => 'Lang',
        ];
    }
}
