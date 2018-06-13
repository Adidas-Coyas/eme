<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $descricao
 * @property string $anexo
 * @property string $created_at
 * @property string $update_at
 * @property int $publicar
 * @property int $id_user
 * @property string $lang
 *
 * @property Comentario[] $comentarios
 * @property Likes[] $likes
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'descricao', 'anexo', 'created_at', 'update_at', 'publicar', 'id_user'], 'required'],
            [['id', 'publicar', 'id_user'], 'integer'],
            [['descricao', 'lang'], 'string'],
            [['created_at', 'update_at'], 'safe'],
            [['title', 'anexo'], 'string', 'max' => 100],
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
            'descricao' => 'Descricao',
            'anexo' => 'Anexo',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'publicar' => 'Publicar',
            'id_user' => 'Id User',
            'lang' => 'Lang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['id_post' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikes()
    {
        return $this->hasMany(Likes::className(), ['id_post' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
