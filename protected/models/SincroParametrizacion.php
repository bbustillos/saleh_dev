<?php

/**
 * This is the model class for table "sincro_parametrizacion".
 *
 * The followings are the available columns in table 'sincro_parametrizacion':
 * @property integer $id
 * @property string $nombre_tabla
 * @property string $campos_det
 */
class SincroParametrizacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sincro_parametrizacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tabla, campos_det', 'required'),
			array('nombre_tabla', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_tabla, campos_det', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nombre_tabla' => 'Nombre Tabla',
			'campos_det' => 'Campos Deteterminados',
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
		$criteria->compare('nombre_tabla',$this->nombre_tabla,true);
		$criteria->compare('campos_det',$this->campos_det,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SincroParametrizacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Permite obtener la informacion relacionada a la configuracion seleccionada
	 **/
	public function obtenerConfiguracion($nombreConfig){
		$modelConfiguraciones = new TablaConfiguraciones();
		$sConfiguracion = $modelConfiguraciones->find('nombre_config=:nombre_config', 
								array(':nombre_config'=>$nombreConfig)
							);
		$aConfiguracion = json_decode($sConfiguracion->parametros);
		return $aConfiguracion;
	}

	/**
	 * Permite verificar si la vista del boton de sincronizacion es visible
	 **/
	public function validarVistaSincronizacion($aConfiguracion, $paginaActual){
		$sPermitir = false;
		if (Yii::app()->user->isGuest || (in_array($paginaActual, $aConfiguracion->vistas))) {
			$sPermitir = false;
		} else
			$sPermitir = true;
		return $sPermitir;
	}

}
