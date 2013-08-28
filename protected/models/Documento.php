<?php

/**
 * This is the model class for table "documento".
 *
 * The followings are the available columns in table 'documento':
 * @property integer $iddocumento
 * @property string $nombre
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property DetalleBolsin[] $detalleBolsins
 */
class Documento extends CActiveRecord
{
	public static $estado = array('0'=>'Inactivo','1'=>'Activo');

	public static function getEstado($key=null)
        {
            if ($key !== null)
                return self::$estado[$key];
            return self::$estado;
        }

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Documento the static model class
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
		return 'documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estado', 'required'),
			array('nombre', 'length', 'max'=>150),
			array('estado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iddocumento, nombre, estado', 'safe', 'on'=>'search'),
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
			'detalleBolsins' => array(self::HAS_MANY, 'DetalleBolsin', 'documento_iddocumento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iddocumento' => 'Iddocumento',
			'nombre' => 'Nombre',
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

		$criteria->compare('iddocumento',$this->iddocumento);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getListDocumento ()
    {
            return CHtml::listData(Documento::model()->findAll('estado=1'),'iddocumento','nombre');
    }
}