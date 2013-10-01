<?php

/**
 * This is the model class for table "factura".
 *
 * The followings are the available columns in table 'factura':
 * @property integer $idfactura
 * @property string $numero
 * @property string $fecha
 * @property string $monto
 * @property string $observacion
 * @property integer $estado
 * @property integer $proveedor_idproveedor
 *
 * The followings are the available model relations:
 * @property DetalleBolsin[] $detalleBolsins
 * @property Proveedor $proveedorIdproveedor
 */

class Factura extends CActiveRecord
{
	public static $estado = array('0'=>'Inactivo','1'=>'Activo');
	public static $tipo = array('A'=>'Tipo A','B'=>'Tipo B','C'=>'Tipo C','D'=>'Tipo D','E'=>'Tipo E','F'=>'Tipo F');

	public static function getEstado($key=null)
        {
            if ($key !== null)
                return self::$estado[$key];
            return self::$estado;
        }

    public static function getTipo($key=null)
        {
            if ($key !== null)
                return self::$tipo[$key];
            return self::$tipo;
        }

    /**
	* Return the date based on the formar type. 
	* @param date format dd/mm/YY  
	* @return date in format yyyy/mm/dd	
	*/
	public function dateUpdate($date,$type)
	{
		if ($type == 1){
			$dia = substr($date,0,2);
			$mes = substr($date,3,2);
			$anio = substr($date,-4,4);
		
			$var = $anio."-".$mes."-".$dia;
		}

		if ($type == 2){
			$anio = substr($date,0,4);
			$mes = substr($date,5,2);
			$dia = substr($date,-2,2);

			$var = $dia."/".$mes."/".$anio;
		}
		
		return $var;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Factura the static model class
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
		return 'factura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, fecha, proveedor_idproveedor', 'required'),
			array('estado, proveedor_idproveedor', 'numerical', 'integerOnly'=>true),
			array('tipo', 'length', 'max'=>1),
			array('numero', 'length', 'max'=>80),
			array('monto', 'length', 'max'=>12),
			array('observacion', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idfactura, numero, fecha, monto, observacion, estado, proveedor_idproveedor', 'safe', 'on'=>'search'),
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
			'detalleBolsins' => array(self::HAS_MANY, 'DetalleBolsin', 'factura_idfactura'),
			'proveedorIdproveedor' => array(self::BELONGS_TO, 'Proveedor', 'proveedor_idproveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idfactura' => 'Idfactura',
			'numero' => 'Numero',
			'tipo' => 'Tipo de Fac',
			'fecha' => 'Fecha',
			'monto' => 'Monto',
			'observacion' => 'Observacion',
			'estado' => 'Estado',
			'proveedor_idproveedor' => 'Proveedor Idproveedor',
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

		$criteria->compare('idfactura',$this->idfactura);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('proveedor_idproveedor',$this->proveedor_idproveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getListFactura ()
    {
            return CHtml::listData(Factura::model()->findAll('estado=1'),'idfactura','numero');
    }
}