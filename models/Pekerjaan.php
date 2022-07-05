<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property int $id
 * @property string $nama
 * @property string $umur
 * @property string $pekerjaan
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'umur', 'pekerjaan'], 'required'],
            [['nama', 'umur', 'pekerjaan'], 'string', 'max' => 100],
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
            'umur' => 'Umur',
            'pekerjaan' => 'Pekerjaan',
        ];
    }
}
