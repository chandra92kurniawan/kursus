<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property integer $id_guru
 * @property string $nama_guru
 * @property string $alamat
 * @property string $email
 * @property integer $no_hp
 * @property string $create_by
 * @property string $create_date
 * @property string $update_by
 * @property string $update_date
 * @property integer $id_user
 */
class TblGuru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_guru', 'alamat', 'email', 'no_hp', 'create_by', 'create_date', 'update_by', 'update_date'], 'required'],
            [['alamat'], 'string'],
            [['no_hp', 'id_user'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['nama_guru', 'email', 'create_by', 'update_by'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_guru' => 'Id Guru',
            'nama_guru' => 'Nama Guru',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'no_hp' => 'No Hp',
            'create_by' => 'Create By',
            'create_date' => 'Create Date',
            'update_by' => 'Update By',
            'update_date' => 'Update Date',
            'id_user' => 'Id User',
        ];
    }
}
