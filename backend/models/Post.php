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
 * @property string $publicado_at
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
            [['title', 'content', 'anexo', 'id_user'], 'required'],
            [['id', 'publicar', 'id_user'], 'integer'],
            [['content', 'lang'], 'string'],
            [['created_at', 'update_at', 'publicado_at'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['anexo'], 'file', 'extensions' => 'doc, docx, jpg, png, odt, gif'],
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
            'descricao' => 'Descrição',
            'anexo' => 'Capa',
            'created_at' => 'Criado em',
            'update_at' => 'Atualizado em',
            'publicar' => 'Publicar',
            'publicado_at' => 'Publicado em',
            'id_user' => 'Usuario',
            'lang' => 'Lingua',
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
