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
            [['title', 'conteudo', 'descricao', 'created_at', 'id_user'], 'required'],
            [['id', 'id_user'], 'integer'],
            [['descricao'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 50],
            //[['conteudo'], 'string', 'max' => 150], 
            [['conteudo'], 'file', 'extensions' => 'jpg, png, gif'],
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
            'title' => 'Titulo',
            'conteudo' => 'Imagem',
            'descricao' => 'Descricao',
            'id_user' => 'Usuario',
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
