<?php

/**
 * This is the model class for table "scodobjventascaractextras".
 *
 * The followings are the available columns in table 'scodobjventascaractextras':
 * @property integer $id_cod_obj_venta_car_extra
 * @property integer $id_cod_obj_venta_car
 * @property integer $id_cod_obj_venta_extra
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Scodobjventasextras $idCodObjVentaExtra
 * @property Scodobjventascaract $idCodObjVentaCar
 */
class Scodobjventascaractextras extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scodobjventascaractextras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cod_obj_venta_car, id_cod_obj_venta_extra, observaciones', 'required'),
			array('id_cod_obj_venta_car, id_cod_obj_venta_extra', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cod_obj_venta_car_extra, id_cod_obj_venta_car, id_cod_obj_venta_extra, observaciones', 'safe', 'on'=>'search'),
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
			'idCodObjVentaExtra' => array(self::BELONGS_TO, 'Scodobjventasextras', 'id_cod_obj_venta_extra'),
			'idCodObjVentaCar' => array(self::BELONGS_TO, 'Scodobjventascaract', 'id_cod_obj_venta_car'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cod_obj_venta_car_extra' => 'Id Cod Obj Venta Car Extra',
			'id_cod_obj_venta_car' => 'Id Cod Obj Venta Car',
			'id_cod_obj_venta_extra' => 'Id Cod Obj Venta Extra',
			'observaciones' => 'Observaciones',
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

		$criteria->compare('id_cod_obj_venta_car_extra',$this->id_cod_obj_venta_car_extra);
		$criteria->compare('id_cod_obj_venta_car',$this->id_cod_obj_venta_car);
		$criteria->compare('id_cod_obj_venta_extra',$this->id_cod_obj_venta_extra);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scodobjventascaractextras the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
