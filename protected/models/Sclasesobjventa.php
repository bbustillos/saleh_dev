<?php

/**
 * This is the model class for table "sclasesobjventa".
 *
 * The followings are the available columns in table 'sclasesobjventa':
 * @property integer $id_clase_obj_venta
 * @property string $desc_clase_obj_venta
 * @property string $real_fict_clase_obj_venta
 * @property string $diario_validar
 */
class Sclasesobjventa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sclasesobjventa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desc_clase_obj_venta, real_fict_clase_obj_venta, diario_validar', 'required'),
			array('desc_clase_obj_venta, diario_validar', 'length', 'max'=>255),
			array('real_fict_clase_obj_venta', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_clase_obj_venta, desc_clase_obj_venta, real_fict_clase_obj_venta, diario_validar', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_clase_obj_venta' => 'Id',
			'desc_clase_obj_venta' => 'Descripción',
			'real_fict_clase_obj_venta' => 'Real/Ficticio',
			'diario_validar' => 'Diario a Validar',
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

		$criteria->compare('id_clase_obj_venta',$this->id_clase_obj_venta);
		$criteria->compare('desc_clase_obj_venta',$this->desc_clase_obj_venta,true);
		$criteria->compare('real_fict_clase_obj_venta',$this->real_fict_clase_obj_venta,true);
		$criteria->compare('diario_validar',$this->diario_validar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sclasesobjventa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
