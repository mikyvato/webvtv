<?php

/**
 * This is the model class for table "destinatario".
 *
 * The followings are the available columns in table 'destinatario':
 * @property integer $iddestinatario
 * @property string $descripcion
 * @property integer $recFactura
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property DetalleBolsin[] $detalleBolsins
 */
class Destinatario extends CActiveRecord
{
	public static $recFactura = array('0'=>'No','1'=>'Si');
	public static $estado = array('0'=>'Inactivo','1'=>'Activo');

	public static function getEstado($key=null)
        {
            if ($key !== null)
                return self::$estado[$key];
            return self::$estado;
        }

    public static function getRecFactura($key=null)
        {
            if ($key !== null)
                return self::$recFactura[$key];
            return self::$recFactura;
        }
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Destinatario the static model class
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
		return 'destinatario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion', 'required'),
			array('recFactura, estado', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iddestinatario, descripcion, recFactura, estado', 'safe', 'on'=>'search'),
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
			'detalleBolsins' => array(self::HAS_MANY, 'DetalleBolsin', 'destinatario_iddestinatario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddestinatario' => 'Iddestinatario',
			'descripcion' => 'Descripcion',
			'recFactura' => 'Recibe Factura',
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

		$criteria->compare('iddestinatario',$this->iddestinatario);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('recFactura',$this->recFactura);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getListDestinatario ()
    {
            return CHtml::listData(Destinatario::model()->findAll('estado=1'),'iddestinatario','descripcion');
    }

    public static function getListDestinatarioRecFac ()
    {
            return CHtml::listData(Destinatario::model()->findAll('recFactura=1'),'iddestinatario','descripcion');
    }
}