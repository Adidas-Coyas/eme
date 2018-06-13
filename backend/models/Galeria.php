<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galeria".
 *
 * @property int $id
 * @property string $title
 * @property string $conteudo
 * @property string $descricao
 * @property int $id_user
 *
 * @property User $user
 */
class Galeria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galeria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'conteudo', 'descricao', 'id_user'], 'required'],
            [['id', 'id_user'], 'integer'],
            [['descricao'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['conteudo'], 'string', 'max' => 150],
            [['id'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'conteudo' => 'Conteudo',
            'descricao' => 'Descricao',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
