<?php

/**
 * This is the model class for table "scodobjventasdocs".
 *
 * The followings are the available columns in table 'scodobjventasdocs':
 * @property integer $id_cod_obj_venta_doc
 * @property integer $id_cod_obj_venta
 * @property string $documento
 * @property string $validez
 * @property integer $requerido
 * @property integer $dias_alerta
 *
 * The followings are the available model relations:
 * @property Scodobjventas $idCodObjVenta
 */
class Scodobjventasdocs extends CActiveRecord implements AjaxResponseInterface
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scodobjventasdocs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cod_obj_venta, documento, validez, requerido, dias_alerta', 'required'),
			array('id_cod_obj_venta, requerido, dias_alerta', 'numerical', 'integerOnly'=>true),
			array('documento', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cod_obj_venta_doc, id_cod_obj_venta, documento, validez, requerido, dias_alerta', 'safe', 'on'=>'search'),
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
			'idCodObjVenta' => array(self::BELONGS_TO, 'Scodobjventas', 'id_cod_obj_venta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cod_obj_venta_doc' => 'Id',
			'id_cod_obj_venta' => 'Id Objeto',
			'documento' => 'Documento',
			'validez' => 'Validez',
			'requerido' => 'Requerido',
			'dias_alerta' => 'Días Alerta',
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

		$criteria->compare('id_cod_obj_venta_doc',$this->id_cod_obj_venta_doc);
		$criteria->compare('id_cod_obj_venta',$this->id_cod_obj_venta);
		$criteria->compare('documento',$this->documento,true);
		$criteria->compare('validez',$this->validez,true);
		$criteria->compare('requerido',$this->requerido);
		$criteria->compare('dias_alerta',$this->dias_alerta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scodobjventasdocs the static model class
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
