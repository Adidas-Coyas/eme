<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title_pt
 * @property string $title_en
 * @property string $descricao_pt
 * @property string $descricao_en
 * @property string $midea_pt
 * @property string $midea_en
 * @property string $anexo_pt
 * @property string $anexo_en
 * @property string $created_at
 * @property string $update_at
 * @property int $id_user
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
            [['id', 'title_pt', 'descricao_pt', 'midea_pt', 'anexo_pt', 'created_at', 'update_at', 'id_user'], 'required'],
            [['id', 'id_user'], 'integer'],
            [['descricao_pt', 'descricao_en'], 'string'],
            [['created_at', 'update_at'], 'safe'],
            [['title_pt', 'title_en', 'anexo_pt', 'anexo_en'], 'string', 'max' => 100],
            [['midea_pt', 'midea_en'], 'string', 'max' => 255],
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
            'title_pt' => 'Title Pt',
            'title_en' => 'Title En',
            'descricao_pt' => 'Descricao Pt',
            'descricao_en' => 'Descricao En',
            'midea_pt' => 'Midea Pt',
            'midea_en' => 'Midea En',
            'anexo_pt' => 'Anexo Pt',
            'anexo_en' => 'Anexo En',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'id_user' => 'Id User',
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
