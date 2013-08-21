<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $created_at
 * @property string $last_login
 * @property string $username
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Bolsin[] $bolsins
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, username, password', 'required'),
			array('nombre, apellido, email', 'length', 'max'=>120),
			array('username', 'length', 'max'=>40),
			array('password', 'length', 'max'=>180),
			array('created_at, last_login', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUsuario, nombre, apellido, email, created_at, last_login, username, password', 'safe', 'on'=>'search'),
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
			'bolsins' => array(self::HAS_MANY, 'Bolsin', 'usuario_idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'email' => 'Email',
			'created_at' => 'Created At',
			'last_login' => 'Last Login',
			'username' => 'Username',
			'password' => 'Password',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	//FUNCION PARA LISTAR EL COMBO
    public static function getList()
    {
        return CHtml::listData(Usuarios::model()->findAll(),'id_usuario', 'username');
    }


	public function validatePassword($password)
    {
    	return $this->hashPassword($password)===$this->password;
    }

  	public function hashPassword($password)
  	{
    	return $password;
  	}
}