<?php

/**
 * This is the model class for table "detalleBolsin".
 *
 * The followings are the available columns in table 'detalleBolsin':
 * @property integer $iddetalleBolsin
 * @property integer $bolsin_idbolsin
 * @property integer $destinatario_iddestinatario
 * @property integer $documento_iddocumento
 * @property integer $factura_idfactura
 * @property string $observacion
 *
 * The followings are the available model relations:
 * @property Bolsin $bolsinIdbolsin
 * @property Destinatario $destinatarioIddestinatario
 * @property Documento $documentoIddocumento
 * @property Factura $facturaIdfactura
 */
class DetalleBolsin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetalleBolsin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalleBolsin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bolsin_idbolsin, destinatario_iddestinatario, documento_iddocumento', 'required'),
			array('bolsin_idbolsin, destinatario_iddestinatario, documento_iddocumento, factura_idfactura', 'numerical', 'integerOnly'=>true),
			array('observacion', 'length', 'max'=>220),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iddetalleBolsin, bolsin_idbolsin, destinatario_iddestinatario, documento_iddocumento, factura_idfactura, observacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bolsinIdbolsin' => array(self::BELONGS_TO, 'Bolsin', 'bolsin_idbolsin'),
			'destinatarioIddestinatario' => array(self::BELONGS_TO, 'Destinatario', 'destinatario_iddestinatario'),
			'documentoIddocumento' => array(self::BELONGS_TO, 'Documento', 'documento_iddocumento'),
			'facturaIdfactura' => array(self::BELONGS_TO, 'Factura', 'factura_idfactura'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddetalleBolsin' => 'Iddetalle Bolsin',
			'bolsin_idbolsin' => 'Bolsin Idbolsin',
			'destinatario_iddestinatario' => 'Destinatario Iddestinatario',
			'documento_iddocumento' => 'Documento Iddocumento',
			'factura_idfactura' => 'Factura Idfactura',
			'observacion' => 'Observacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('iddetalleBolsin',$this->iddetalleBolsin);
		$criteria->compare('bolsin_idbolsin',$this->bolsin_idbolsin);
		$criteria->compare('destinatario_iddestinatario',$this->destinatario_iddestinatario);
		$criteria->compare('documento_iddocumento',$this->documento_iddocumento);
		$criteria->compare('factura_idfactura',$this->factura_idfactura);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}