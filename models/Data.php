<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $nama
 * @property string $jurusan
 * @property string $umur
 * @property string $alamat
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jurusan', 'umur', 'alamat'], 'required'],
            [['nama', 'jurusan', 'umur', 'alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
            'umur' => 'Umur',
            'alamat' => 'Alamat',
        ];
    }
}
