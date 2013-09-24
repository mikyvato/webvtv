<?php

/**
 * This is the model class for table "bolsin".
 *
 * The followings are the available columns in table 'bolsin':
 * @property integer $idbolsin
 * @property string $fecha
 * @property string $observacion
 * @property integer $estado
 * @property integer $usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdUsuario
 * @property DetalleBolsin[] $detalleBolsins
 */
class Bolsin extends CActiveRecord
{
	public static $estado = array('0'=>'Anulado','1'=>'Activo','2'=>'Enviado');

	public static function getEstado($key=null)
        {
            if ($key !== null)
                return self::$estado[$key];
            return self::$estado;
        }
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bolsin the static model class
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
		return 'bolsin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, usuario_idUsuario', 'required'),
			array('estado, usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('observacion', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idbolsin, fecha, observacion, estado, usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idUsuario'),
			'detalleBolsins' => array(self::HAS_MANY, 'DetalleBolsin', 'bolsin_idbolsin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbolsin' => 'Idbolsin',
			'fecha' => 'Fecha',
			'observacion' => 'Observacion',
			'estado' => 'Estado',
			'usuario_idUsuario' => 'Usuario Responsable',
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

		$criteria->compare('idbolsin',$this->idbolsin);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('usuario_idUsuario',$this->usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}