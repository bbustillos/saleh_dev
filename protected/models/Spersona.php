<?php

/**
 * This is the model class for table "spersona".
 *
 * The followings are the available columns in table 'spersona':
 * @property string $id_persona
 * @property string $id_empresa
 * @property integer $id_sucursal
 * @property string $tipo
 * @property integer $cod_cargo
 * @property string $multi_suc
 * @property string $nro_documento_identidad
 * @property string $email_persona
 * @property string $nombres_persona
 * @property string $paterno_persona
 * @property string $materno_persona
 * @property string $direccion_persona
 * @property string $fono_persona
 * @property string $celular_persona
 * @property string $autoriza_carga_pts
 * @property string $autoriza_traspaso
 * @property string $observaciones
 * @property string $e_susuario
 * @property string $fecha_nacimiento
 * @property string $fecha_ingreso
 * @property string $fecha_salida
 * @property integer $limite_credito
 * @property string $pts_iniciales
 * @property string $login
 * @property string $password
 * @property integer $cod_nivel
 * @property string $expirable
 * @property integer $dias_expiracion
 * @property string $fecultcad_ambio
 * @property integer $cantidad_ingreso
 * @property integer $cantidad_salida
 * @property string $max_ptos
 * @property string $ingreso_externo
 * @property string $nomimg
 * @property integer $id_tipo
 * @property string $fecha
 * @property string $upload
 * @property string $estado
 * @property string $cambia
 * @property string $maqvir
 */
class Spersona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'spersona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sucursal, cod_cargo, limite_credito, cod_nivel, dias_expiracion, cantidad_ingreso, cantidad_salida, id_tipo', 'numerical', 'integerOnly'=>true),
			array('id_empresa, celular_persona, pts_iniciales', 'length', 'max'=>10),
			array('tipo, multi_suc, autoriza_carga_pts, autoriza_traspaso, e_susuario, expirable, ingreso_externo, upload, estado, cambia', 'length', 'max'=>1),
			array('nro_documento_identidad, fono_persona, password', 'length', 'max'=>30),
			array('email_persona', 'length', 'max'=>50),
			array('nombres_persona, paterno_persona, materno_persona', 'length', 'max'=>20),
			array('direccion_persona, nomimg', 'length', 'max'=>100),
			array('observaciones', 'length', 'max'=>255),
			array('login', 'length', 'max'=>15),
			array('max_ptos', 'length', 'max'=>6),
			array('maqvir', 'length', 'max'=>2),
			array('fecha_nacimiento, fecha_ingreso, fecha_salida, fecultcad_ambio, fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_persona, id_empresa, id_sucursal, tipo, cod_cargo, multi_suc, nro_documento_identidad, email_persona, nombres_persona, paterno_persona, materno_persona, direccion_persona, fono_persona, celular_persona, autoriza_carga_pts, autoriza_traspaso, observaciones, e_susuario, fecha_nacimiento, fecha_ingreso, fecha_salida, limite_credito, pts_iniciales, login, password, cod_nivel, expirable, dias_expiracion, fecultcad_ambio, cantidad_ingreso, cantidad_salida, max_ptos, ingreso_externo, nomimg, id_tipo, fecha, upload, estado, cambia, maqvir', 'safe', 'on'=>'search'),
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
			'id_persona' => 'Id Persona',
			'id_empresa' => 'Id Empresa',
			'id_sucursal' => 'Id Sucursal',
			'tipo' => 'Tipo',
			'cod_cargo' => 'Cod Cargo',
			'multi_suc' => 'Multi Suc',
			'nro_documento_identidad' => 'Nro Documento Identidad',
			'email_persona' => 'Email Persona',
			'nombres_persona' => 'Nombres Persona',
			'paterno_persona' => 'Paterno Persona',
			'materno_persona' => 'Materno Persona',
			'direccion_persona' => 'Direccion Persona',
			'fono_persona' => 'Fono Persona',
			'celular_persona' => 'Celular Persona',
			'autoriza_carga_pts' => 'Autoriza Carga Pts',
			'autoriza_traspaso' => 'Autoriza Traspaso',
			'observaciones' => 'Observaciones',
			'e_susuario' => 'E Susuario',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'fecha_ingreso' => 'Fecha Ingreso',
			'fecha_salida' => 'Fecha Salida',
			'limite_credito' => 'Limite Credito',
			'pts_iniciales' => 'Pts Iniciales',
			'login' => 'Login',
			'password' => 'Password',
			'cod_nivel' => 'Cod Nivel',
			'expirable' => 'Expirable',
			'dias_expiracion' => 'Dias Expiracion',
			'fecultcad_ambio' => 'Fecultcad Ambio',
			'cantidad_ingreso' => 'Cantidad Ingreso',
			'cantidad_salida' => 'Cantidad Salida',
			'max_ptos' => 'Max Ptos',
			'ingreso_externo' => 'Ingreso Externo',
			'nomimg' => 'Nomimg',
			'id_tipo' => 'Id Tipo',
			'fecha' => 'Fecha',
			'upload' => 'Upload',
			'estado' => 'Estado',
			'cambia' => 'Cambia',
			'maqvir' => 'Maqvir',
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

		$criteria->compare('id_persona',$this->id_persona,true);
		$criteria->compare('id_empresa',$this->id_empresa,true);
		$criteria->compare('id_sucursal',$this->id_sucursal);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('cod_cargo',$this->cod_cargo);
		$criteria->compare('multi_suc',$this->multi_suc,true);
		$criteria->compare('nro_documento_identidad',$this->nro_documento_identidad,true);
		$criteria->compare('email_persona',$this->email_persona,true);
		$criteria->compare('nombres_persona',$this->nombres_persona,true);
		$criteria->compare('paterno_persona',$this->paterno_persona,true);
		$criteria->compare('materno_persona',$this->materno_persona,true);
		$criteria->compare('direccion_persona',$this->direccion_persona,true);
		$criteria->compare('fono_persona',$this->fono_persona,true);
		$criteria->compare('celular_persona',$this->celular_persona,true);
		$criteria->compare('autoriza_carga_pts',$this->autoriza_carga_pts,true);
		$criteria->compare('autoriza_traspaso',$this->autoriza_traspaso,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('e_susuario',$this->e_susuario,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('limite_credito',$this->limite_credito);
		$criteria->compare('pts_iniciales',$this->pts_iniciales,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('cod_nivel',$this->cod_nivel);
		$criteria->compare('expirable',$this->expirable,true);
		$criteria->compare('dias_expiracion',$this->dias_expiracion);
		$criteria->compare('fecultcad_ambio',$this->fecultcad_ambio,true);
		$criteria->compare('cantidad_ingreso',$this->cantidad_ingreso);
		$criteria->compare('cantidad_salida',$this->cantidad_salida);
		$criteria->compare('max_ptos',$this->max_ptos,true);
		$criteria->compare('ingreso_externo',$this->ingreso_externo,true);
		$criteria->compare('nomimg',$this->nomimg,true);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('upload',$this->upload,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cambia',$this->cambia,true);
		$criteria->compare('maqvir',$this->maqvir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Spersona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * getPersonalNombreCompleto Permite obtener el Nombre Completo del Personal
	 * @return [type] [description]
	 */
	public function getPersonaNombreCompleto ()
	{
		return $this->nombres_persona.' '.$this->paterno_persona.' '.$this->materno_persona;
	}
}
