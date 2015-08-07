<?php

/**
 * This is the model class for table "scodobjventasdatos".
 *
 * The followings are the available columns in table 'scodobjventasdatos':
 * @property integer $id
 * @property integer $id_cod_obj_venta
 * @property string $modelo
 * @property string $numero_chasis
 * @property string $marca
 * @property integer $color_id
 * @property string $numero_motor
 *
 * The followings are the available model relations:
 * @property Scolor $color
 * @property Scodobjventas $idCodObjVenta
 */
class Scodobjventasdatos extends CActiveRecord implements AjaxResponseInterface
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scodobjventasdatos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cod_obj_venta, modelo, numero_chasis, marca, color_id, numero_motor', 'required'),
			array('id_cod_obj_venta, color_id', 'numerical', 'integerOnly'=>true),
			array('modelo, numero_chasis, marca, numero_motor', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_cod_obj_venta, modelo, numero_chasis, marca, color_id, numero_motor', 'safe', 'on'=>'search'),
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
			'color' => array(self::BELONGS_TO, 'Scolor', 'color_id'),
			'idCodObjVenta' => array(self::BELONGS_TO, 'Scodobjventas', 'id_cod_obj_venta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_cod_obj_venta' => 'Id Objeto',
			'modelo' => 'Modelo',
			'numero_chasis' => 'Numero Chasis',
			'marca' => 'Marca',
			'color_id' => 'Color',
			'numero_motor' => 'Numero Motor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_cod_obj_venta',$this->id_cod_obj_venta);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('numero_chasis',$this->numero_chasis,true);
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('color_id',$this->color_id);
		$criteria->compare('numero_motor',$this->numero_motor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scodobjventasdatos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getResponseData()
	{
		return $this->getAttributes();
	}
}
