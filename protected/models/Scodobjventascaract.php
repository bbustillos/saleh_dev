<?php

/**
 * This is the model class for table "scodobjventascaract".
 *
 * The followings are the available columns in table 'scodobjventascaract':
 * @property integer $id_cod_obj_venta_car
 * @property integer $id_cod_obj_venta
 * @property integer $id_tipo_bus
 * @property integer $cantidad_pisos
 * @property double $carga_maxima
 * @property string $imagen
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Stipobus $idTipoBus
 * @property Scodobjventas $idCodObjVenta
 */
class Scodobjventascaract extends CActiveRecord implements AjaxResponseInterface
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scodobjventascaract';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cod_obj_venta, id_tipo_bus, cantidad_pisos, carga_maxima, observaciones', 'required'),
			array('id_cod_obj_venta, id_tipo_bus, cantidad_pisos', 'numerical', 'integerOnly'=>true),
			array('carga_maxima', 'numerical'),
			array('imagen', 'file'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cod_obj_venta_car, id_cod_obj_venta, id_tipo_bus, cantidad_pisos, carga_maxima, imagen, observaciones', 'safe', 'on'=>'search'),
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
			'idTipoBus' => array(self::BELONGS_TO, 'Stipobus', 'id_tipo_bus'),
			'idCodObjVenta' => array(self::BELONGS_TO, 'Scodobjventas', 'id_cod_obj_venta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cod_obj_venta_car' => 'Id',
			'id_cod_obj_venta' => 'Id Objeto',
			'id_tipo_bus' => 'Tipo Bus',
			'cantidad_pisos' => 'Pisos',
			'carga_maxima' => 'Carga Maxima',
			'imagen' => 'Imagen',
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

		$criteria->compare('id_cod_obj_venta_car',$this->id_cod_obj_venta_car);
		$criteria->compare('id_cod_obj_venta',$this->id_cod_obj_venta);
		$criteria->compare('id_tipo_bus',$this->id_tipo_bus);
		$criteria->compare('cantidad_pisos',$this->cantidad_pisos);
		$criteria->compare('carga_maxima',$this->carga_maxima);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scodobjventascaract the static model class
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
