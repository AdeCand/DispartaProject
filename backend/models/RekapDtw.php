<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rekap_dtw".
 *
 * @property int $id_dtw
 * @property string $nama_destinasi
 * @property int $kecamatan
 * @property string $bulan
 * @property int $minggu
 * @property string $jenis_wisatawan
 * @property int $jumlah
 * @property int $total
 */
class RekapDtw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_dtw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_destinasi', 'kecamatan', 'bulan', 'minggu', 'jenis_wisatawan', 'jumlah', 'total'], 'required'],
            [['kecamatan', 'minggu', 'jumlah', 'total'], 'integer'],
            [['nama_destinasi'], 'string', 'max' => 50],
            [['bulan'], 'string', 'max' => 10],
            [['jenis_wisatawan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dtw' => 'Id Dtw',
            'nama_destinasi' => 'Nama Destinasi',
            'kecamatan' => 'Kecamatan',
            'bulan' => 'Bulan',
            'minggu' => 'Minggu',
            'jenis_wisatawan' => 'Jenis Wisatawan',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }
}
