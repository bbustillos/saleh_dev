<?php

/**
 * This is the model class for table "sproyecto".
 *
 * The followings are the available columns in table 'sproyecto':
 * @property integer $id_proyecto
 * @property string $id_empresa
 * @property integer $id_sucursal
 * @property string $visible
 * @property string $descripcion_proyecto
 * @property string $no_contrato
 * @property string $resolucion
 * @property string $no_licitacion
 * @property string $contratante
 * @property string $garantia
 * @property string $scontratista
 * @property string $dpto
 * @property string $lugar
 * @property string $encargado
 * @property string $fecha_inicial
 * @property integer $vencimiento
 * @property string $supervisor
 * @property string $moneda
 * @property double $monto
 * @property double $tipo_cambio
 * @property string $historial
 * @property string $por_defecto
 * @property string $estado
 * @property string $cambia
 * @property string $motivos_i
 * @property string $motivos_e
 */
class Sproyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sproyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('historial, motivos_i, motivos_e', 'required'),
			array('id_sucursal, vencimiento', 'numerical', 'integerOnly'=>true),
			array('monto, tipo_cambio', 'numerical'),
			array('id_empresa', 'length', 'max'=>10),
			array('visible, lugar, motivos_i, motivos_e', 'length', 'max'=>100),
			array('descripcion_proyecto', 'length', 'max'=>60),
			array('no_contrato, no_licitacion, por_defecto', 'length', 'max'=>30),
			array('resolucion', 'length', 'max'=>50),
			array('contratante, scontratista, encargado, supervisor', 'length', 'max'=>40),
			array('garantia, moneda, estado, cambia', 'length', 'max'=>1),
			array('dpto', 'length', 'max'=>2),
			array('fecha_inicial', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proyecto, id_empresa, id_sucursal, visible, descripcion_proyecto, no_contrato, resolucion, no_licitacion, contratante, garantia, scontratista, dpto, lugar, encargado, fecha_inicial, vencimiento, supervisor, moneda, monto, tipo_cambio, historial, por_defecto, estado, cambia, motivos_i, motivos_e', 'safe', 'on'=>'search'),
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
			'id_proyecto' => 'Id Proyecto',
			'id_empresa' => 'Id Empresa',
			'id_sucursal' => 'Id Sucursal',
			'visible' => 'Visible',
			'descripcion_proyecto' => 'Descripcion Proyecto',
			'no_contrato' => 'No Contrato',
			'resolucion' => 'Resolucion',
			'no_licitacion' => 'No Licitacion',
			'contratante' => 'Contratante',
			'garantia' => 'Garantia',
			'scontratista' => 'Scontratista',
			'dpto' => 'Dpto',
			'lugar' => 'Lugar',
			'encargado' => 'Encargado',
			'fecha_inicial' => 'Fecha Inicial',
			'vencimiento' => 'Vencimiento',
			'supervisor' => 'Supervisor',
			'moneda' => 'Moneda',
			'monto' => 'Monto',
			'tipo_cambio' => 'Tipo Cambio',
			'historial' => 'Historial',
			'por_defecto' => 'Por Defecto',
			'estado' => 'Estado',
			'cambia' => 'Cambia',
			'motivos_i' => 'Motivos I',
			'motivos_e' => 'Motivos E',
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

		$criteria->compare('id_proyecto',$this->id_proyecto);
		$criteria->compare('id_empresa',$this->id_empresa,true);
		$criteria->compare('id_sucursal',$this->id_sucursal);
		$criteria->compare('visible',$this->visible,true);
		$criteria->compare('descripcion_proyecto',$this->descripcion_proyecto,true);
		$criteria->compare('no_contrato',$this->no_contrato,true);
		$criteria->compare('resolucion',$this->resolucion,true);
		$criteria->compare('no_licitacion',$this->no_licitacion,true);
		$criteria->compare('contratante',$this->contratante,true);
		$criteria->compare('garantia',$this->garantia,true);
		$criteria->compare('scontratista',$this->scontratista,true);
		$criteria->compare('dpto',$this->dpto,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('encargado',$this->encargado,true);
		$criteria->compare('fecha_inicial',$this->fecha_inicial,true);
		$criteria->compare('vencimiento',$this->vencimiento);
		$criteria->compare('supervisor',$this->supervisor,true);
		$criteria->compare('moneda',$this->moneda,true);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('tipo_cambio',$this->tipo_cambio);
		$criteria->compare('historial',$this->historial,true);
		$criteria->compare('por_defecto',$this->por_defecto,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cambia',$this->cambia,true);
		$criteria->compare('motivos_i',$this->motivos_i,true);
		$criteria->compare('motivos_e',$this->motivos_e,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sproyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
