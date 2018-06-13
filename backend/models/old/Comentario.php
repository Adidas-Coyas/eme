<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentario".
 *
 * @property int $id
 * @property string $autor
 * @property string $comentario
 * @property string $created_at
 * @property string $updated_at
 * @property int $respondeu
 * @property int $id_post
 *
 * @property Post $post
 */
class Comentario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comentario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['autor', 'comentario', 'created_at', 'updated_at', 'id_post'], 'required'],
            [['comentario'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['respondeu', 'id_post'], 'integer'],
            [['autor'], 'string', 'max' => 50],
            [['id_post'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['id_post' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'autor' => 'Autor',
            'comentario' => 'Comentario',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'respondeu' => 'Respondeu',
            'id_post' => 'Id Post',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'id_post']);
    }
}
