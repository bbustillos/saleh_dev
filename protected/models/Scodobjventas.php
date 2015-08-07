<?php

/**
 * This is the model class for table "scodobjventas".
 *
 * The followings are the available columns in table 'scodobjventas':
 * @property integer $id_cod_obj_venta
 * @property string $desc_cod_obj_venta
 * @property integer $id_clase_obj_venta
 * @property integer $doc_requeridos
 * @property string $placa_cod
 * @property string $interno_cod
 * @property integer $id_proyecto
 * @property integer $id_persona
 * @property integer $activo_cod_obj_venta
 *
 * The followings are the available model relations:
 * @property Sclasesobjventa $idClaseObjVenta
 */
class Scodobjventas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scodobjventas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_cod_obj_venta, id_clase_obj_venta, doc_requeridos, placa_cod, interno_cod, id_proyecto, id_persona, activo_cod_obj_venta', 'required'),
			array('id_clase_obj_venta, doc_requeridos, id_proyecto, id_persona, activo_cod_obj_venta', 'numerical', 'integerOnly'=>true),
			array('desc_cod_obj_venta', 'length', 'max'=>999),
			array('placa_cod, interno_cod', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cod_obj_venta, desc_cod_obj_venta, id_clase_obj_venta, doc_requeridos, placa_cod, interno_cod, id_proyecto, id_persona, activo_cod_obj_venta', 'safe', 'on'=>'search'),
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
			'idClaseObjVenta' => array(self::BELONGS_TO, 'Sclasesobjventa', 'id_clase_obj_venta'),
			'idPersona' => array(self::BELONGS_TO, 'spersona', 'id_persona'),
			'idProyecto' => array(self::BELONGS_TO, 'sproyecto', 'id_proyecto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cod_obj_venta' => 'Id',
			'desc_cod_obj_venta' => 'Descripción',
			'id_clase_obj_venta' => 'Clase',
			'doc_requeridos' => 'Documentos Requeridos',
			'placa_cod' => 'Placa',
			'interno_cod' => 'Interno',
			'id_proyecto' => 'Proyecto',
			'id_persona' => 'Propietario',
			'activo_cod_obj_venta' => 'Activo/Inactivo',
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

		$criteria->compare('id_cod_obj_venta',$this->id_cod_obj_venta);
		$criteria->compare('desc_cod_obj_venta',$this->desc_cod_obj_venta,true);
		$criteria->compare('id_clase_obj_venta',$this->id_clase_obj_venta);
		$criteria->compare('doc_requeridos',$this->doc_requeridos);
		$criteria->compare('placa_cod',$this->placa_cod,true);
		$criteria->compare('interno_cod',$this->interno_cod,true);
		$criteria->compare('id_proyecto',$this->id_proyecto);
		$criteria->compare('id_persona',$this->id_persona);
		$criteria->compare('activo_cod_obj_venta',$this->activo_cod_obj_venta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scodobjventas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
