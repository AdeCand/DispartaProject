<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rekap_akomodasi".
 *
 * @property int $id_akomodasi
 * @property int $nama_akomodasi
 * @property string $kecamatan
 * @property string $bulan
 * @property int $minggu
 * @property string $jenis_wisatawan
 * @property int $jumlah
 * @property int $total
 */
class RekapAkomodasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_akomodasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_akomodasi', 'kecamatan', 'bulan', 'minggu', 'jenis_wisatawan', 'jumlah', 'total'], 'required'],
            [['nama_akomodasi', 'minggu', 'jumlah', 'total'], 'integer'],
            [['kecamatan', 'bulan'], 'string', 'max' => 50],
            [['jenis_wisatawan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_akomodasi' => 'Id Akomodasi',
            'nama_akomodasi' => 'Nama Akomodasi',
            'kecamatan' => 'Kecamatan',
            'bulan' => 'Bulan',
            'minggu' => 'Minggu',
            'jenis_wisatawan' => 'Jenis Wisatawan',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }
}
