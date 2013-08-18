<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $idproveedor
 * @property string $nombre
 * @property string $telefono
 * @property string $email
 * @property string $observacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Factura[] $facturas
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
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
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('nombre, observacion', 'length', 'max'=>220),
			array('telefono', 'length', 'max'=>80),
			array('email', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idproveedor, nombre, telefono, email, observacion, estado', 'safe', 'on'=>'search'),
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
			'facturas' => array(self::HAS_MANY, 'Factura', 'proveedor_idproveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproveedor' => 'Idproveedor',
			'nombre' => 'Nombre',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'observacion' => 'Observacion',
			'estado' => 'Estado',
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

		$criteria->compare('idproveedor',$this->idproveedor);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}