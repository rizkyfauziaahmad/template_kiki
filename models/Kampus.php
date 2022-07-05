<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kampus".
 *
 * @property int $id
 * @property string $fakultas
 * @property string $jurusan
 * @property string $akreditasi
 */
class Kampus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kampus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fakultas', 'jurusan', 'akreditasi'], 'required'],
            [['fakultas', 'jurusan', 'akreditasi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fakultas' => 'Fakultas',
            'jurusan' => 'Jurusan',
            'akreditasi' => 'Akreditasi',
        ];
    }
}
