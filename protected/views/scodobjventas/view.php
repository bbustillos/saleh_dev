<?php
$this->breadcrumbs=array(
	'Codificador Objeto de Ventas'=>array('index'),
	$model->id_cod_obj_venta,
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
	array('label'=>'Actualizar','url'=>array('update','id'=>$model->id_cod_obj_venta)),
	array('label'=>'Eliminar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cod_obj_venta),'confirm'=>'Está seguro que desea eliminar este item?')),
	array('label'=>'Administración','url'=>array('admin')),
	array('label'=>'Adjuntar Datos','url'=>array('/scodobjventasdatos/create', 'id_cod_obj_venta'=>$model->id_cod_obj_venta)),
	array('label'=>'Adjuntar Documentos','url'=>array('/scodobjventasdocs/create', 'id_cod_obj_venta'=>$model->id_cod_obj_venta)),
	array('label'=>'Adjuntar Características','url'=>array('/scodobjventascaract/create', 'id_cod_obj_venta'=>$model->id_cod_obj_venta)),
	array('template'=>'<a id="id_modal_asientos" href="#modalAsientos" data-toggle="modal">Configurar Asientos</a>')
);

// print_r(var_dump($this->menu)); die;
?>
<?php $baseUrlActual = Yii::app()->request->baseUrl; ?>
<link rel="stylesheet" href="<?php echo $baseUrlActual; ?>/css/asientos.css">
<h3>Codificador Objeto de Ventas</h3>
<h4>Vista #<?php echo $model->id_cod_obj_venta; ?></h4>

<div id="baseUrlActual" style="display: none;"><?php echo $baseUrlActual; ?></div>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'type'=>'striped bordered condensed',
	'attributes'=>array(
		'id_cod_obj_venta',
		'desc_cod_obj_venta',
		array(
			'name'=>'id_clase_obj_venta',
			'value'=>$model->idClaseObjVenta->desc_clase_obj_venta,
		),
		array(
			'name'=>'doc_requeridos',
			'value'=>($model->doc_requeridos==1)?"Si":"No",
		),
		'placa_cod',
		'interno_cod',
		array(
			'name'=>'id_proyecto',
			'value'=>$model->idPersona->personaNombreCompleto,
		),
		array(
			'name'=>'id_persona',
			'value'=>$model->idProyecto->descripcion_proyecto,
		),
		array(
			'name'=>'activo_cod_obj_venta',
			'value'=>($model->activo_cod_obj_venta==1)?"Activo":"Inactivo",
		),
	),
)); ?>

<!-- Obtener informacion de los demas modelos Datos, Documentos y Caracteristicas -->
<?php $dataProviderDatos = Scodobjventasdatos::model()->search(array('id_cod_obj_venta'=>$model->id_cod_obj_venta)); ?>
<?php $dataProviderDocum = Scodobjventasdocs::model()->search(array('id_cod_obj_venta'=>$model->id_cod_obj_venta)); ?>
<?php $dataProviderCarac = Scodobjventascaract::model()->search(array('id_cod_obj_venta'=>$model->id_cod_obj_venta)); ?>


<h4>Datos Generales</h4>
<?php if ($dataProviderDatos->itemCount > 0): ?>
	<?php $this->widget('bootstrap.widgets.TbGridView',array(
		'id'=>'scodobjventasdatos-grid',
		'type'=>'striped bordered condensed',
		'dataProvider'=>$dataProviderDatos,
		'enableSorting'=>false,
		'summaryText'=>false,
		'columns'=>array(
			'modelo',
			'numero_chasis',
			'marca',
			array(
				'name'=>'Color',
				'value'=>'$data->color->color_descripcion',
			),
			'numero_motor',
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{update} {delete}',
				'deleteConfirmation'=>'Está seguro que desea eliminar este item?',
				'buttons'=>array(
					'update'=>array(
						'label'=>'Actualizar',
						'url'=>'Yii::app()->createUrl("scodobjventasdatos/update", array("id"=>$data->id))',
					),
					'delete'=>array(
						'label'=>'Eliminar',
						'url'=>'Yii::app()->createUrl("scodobjventasdatos/delete", array("id"=>$data->id))',
					),
				),
			),
		),
	)); ?>

<?php else: ?>
	<h5>No existen datos para este objeto</h5>
<?php endif; ?>

<h4>Documentos Adjuntos</h4>
<?php if ($dataProviderDocum->itemCount >0): ?>
	<?php $this->widget('bootstrap.widgets.TbGridView',array(
		'id'=>'scodobjventasdocs-grid',
		'type'=>'striped bordered condensed',
		'dataProvider'=>$dataProviderDocum,
		'enableSorting'=>false,
		'summaryText'=>false,
		'columns'=>array(
			'documento',
			'validez',
			array(
				'name'=>'requerido',
				'value'=>'($data->requerido==1)?"Si":"No"'
			),
			'dias_alerta',
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{update} {delete}',
				'deleteConfirmation'=>'Está seguro que desea eliminar este item?',
				'buttons'=>array(
					'update'=>array(
						'label'=>'Actualizar',
						'url'=>'Yii::app()->createUrl("scodobjventasdocs/update", array("id"=>$data->id_cod_obj_venta_doc))',
					),
					'delete'=>array(
						'label'=>'Eliminar',
						'url'=>'Yii::app()->createUrl("scodobjventasdocs/delete", array("id"=>$data->id_cod_obj_venta_doc))',
					),
				),
			),
		),
	)); ?>
<?php else: ?>
	<h5>No existen documentos para este objeto</h5>
<?php endif; ?>

<h4>Caratacter&iacute;sticas</h4>
<?php if ($dataProviderCarac->itemCount >0): ?>
	<?php $this->widget('bootstrap.widgets.TbGridView',array(
		'id'=>'scodobjventascaract-grid',
		'type'=>'striped bordered condensed',
		'dataProvider'=>$dataProviderCarac,
		'enableSorting'=>false,
		'summaryText'=>false,
		'columns'=>array(
			array(
				'name'=>'id_tipo_bus',
				'value'=>'$data->idTipoBus->desc_tipo_bus',
			),
			'carga_maxima',
			'observaciones',
			array(
				'name'=>'imagen',
				'header'=>'Imagen',
				'type'=>'raw',
				'value'=>'CHtml::link($data->imagen, array("scodobjventascaract/download", "nombre"=>$data->imagen, "objeto"=>$data->id_cod_obj_venta))',
				'htmlOptions'=>array('width'=>'40'),
			),
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{update} {delete}',
				'deleteConfirmation'=>'Está seguro que desea eliminar este item?',
				'buttons'=>array(
					'update'=>array(
						'label'=>'Actualizar',
						'url'=>'Yii::app()->createUrl("scodobjventascaract/update", array("id"=>$data->id_cod_obj_venta_car))',
					),
					'delete'=>array(
						'label'=>'Eliminar',
						'url'=>'Yii::app()->createUrl("scodobjventascaract/delete", array("id"=>$data->id_cod_obj_venta_car))',
					),
				),
			),
		),
	)); ?>

<?php else: ?>
	<h5>No existen caracter&iacute;sticas para este objeto</h5>
<?php endif; ?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'modalAsientos')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h5>Configuraci&oacute;n de Asientos</h5>
</div>
<div class="modal-body">
	<div id="error_asientos" style="display: none;"><div class="alert alert-error" id="alert"></div></div>
	<table>
		<tr>
			<td>Columnas:&thinsp;<select id="text_col" style="width:50px"><option value="4">4</option><option value="5">5</option></select> &thinsp;
			<td>Filas:&thinsp;<input id="text_fil" type="text" style="width:30px" maxlength="2"/> &thinsp;
			<td>Pasillo:&thinsp;<input id="text_pas" type="text" style="width:30px" maxlength="3"/> &thinsp;
			<td>Piso:&thinsp;<select id="text_pis" style="width:50px"><option value="1">1</option><option value="2">2</option></select> &thinsp;
			<td><button id="button_generar" type="button" data-loading-text="Generando..." class="btn btn-primary" autocomplete="off">Generar</button></td>
		</tr>
	</table>

	<!-- Cuerpo de configuracion de asientos -->
	<div id="div_asientos_conf"></div><br>
	<div id="div_asignacion_asientos">
		<table>
			<caption><div class="cl_titulo_campo">Descripci&oacute;n del Asiento</div></caption>
			<tr>
				<td><div class="cl_nombre_campo" >N&uacute;mero:</div></td>&nbsp;
				<td><div id="div_numero_asiento"></div></td>
				<td><div id="div_id_asiento"></div></td>
			</tr>
			<tr>
				<td><div class="cl_nombre_campo">Tipo:</div></td>&nbsp;
				<td>
					<select id="sel_tipo_asiento">
						<option> --- </option>
						<option value="asiento">Asiento</option>
						<option value="puerta">Puerta</option>
						<option value="volante">Volante</option>
						<option value="bano">Ba&ntilde;o</option>
						<option value="vacio">Vac&iacute;o</option>
					</select>
				</td>
			</tr>
		</table>
	</div>

</div>
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'htmlOptions'=>array('id'=> 'sincronizar-id'),
        'label'=>'Almacenar',
        'url'=>'#',
        'loadingText'=>'Almacenando...',
        'type'=>'primary',
    )); 
    $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Cancelar',
        'type'=>'danger',
        'icon'=>'remove white',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    ));?>
</div>
<?php $this->endWidget(); ?>

<script type="text/javascript">
$(document).ready(function(){
	var $flag = false;
	var $columnas;
	var $filas;
	var $pasillo;
	var $total_pasillos = null;
	var $pasillo1 = null;
	var $pasillo2 = null;
	var $piso;
	var $nro_asiento;
	var $cadenaTabla;
	var $baseUrlActual = $("#baseUrlActual").text();

	// Obtiene la configuracion realizada y controla vacios
	$('#button_generar').bind("click", function(){
		$nro_asiento = 1;
		obtieneValores();
		if ($flag) { return; }
		else {
			$cadenaTabla="<table id='table_asientos'>";
			for (var i = 0; i < $columnas; i++) {
				$cadenaTabla+="<tr>";
				for (var j = 0; j < $filas; j++) {
					if ($total_pasillos == 1) {
						if ($piso == 1) {
							if (j==0) {
								$cadenaTabla += dibujaVacio(i, j);
							} else {
								if ((i+1) == $pasillo) {
									$cadenaTabla += dibujaVacio(i, j);
								} else {
									$cadenaTabla += dibujaAsiento(i, j);
								}
							}
						}
					}
				};
				$cadenaTabla+="</tr>";
			};
			$cadenaTabla+="</table>";
			$('#div_asientos_conf').html($cadenaTabla).show();
			$('[rel="asientos"]').bind("click", mostrarValorAsiento);
		}
	});

	$('#id_modal_asientos').bind("click", function(){
		limpiaValores();
	});

	$('#sel_tipo_asiento').bind('change', actualizarValorAsiento);

	// Carga las variables de creacion
	function obtieneValores(){
		// Control de columna
		if ($('#text_col').val() == null) {
			mostrarMensajeError("Se debe seleccionar un valor para las columnas", "#text_col");
			return $flag;
		} else {
			$columnas = $('#text_col').val();
			ocultarMensajeError();
		}

		// Control de fila
		if ($('#text_fil').val() == "") {
			mostrarMensajeError("Se debe ingresar un valor para las filas", "#text_fil");
			return $flag;
		} else {
			$filas = $('#text_fil').val();
			if ($filas < 7 || $filas > 12) {
				mostrarMensajeError("El valor ingresado para filas no esta permitido", "#text_fil");
				return $flag;
			} else {
				ocultarMensajeError();
			}
		}

		// Control de pasillo(s)
		if ($('#text_pas').val() == "") {
			mostrarMensajeError("Se debe ingresar un valor para determinar el o los pasillos", "#text_pas");
			return $flag;
		} else {
			$pasillo = $('#text_pas').val();
			$total_pasillos = $pasillo.split(',').length;
			if ($total_pasillos == 1) {
				if ($pasillo < 2 || $pasillo >= $columnas) {
					mostrarMensajeError("El valor ingresado para pasillo no esta permitido", "#text_pas");
					return $flag;
				} else {
					ocultarMensajeError();
				}
			} else {
				$pasillo1 = $total_pasillos[0];
				$pasillo2 = $total_pasillos[1];
				if (($pasillo1 < 2 || $pasillo2 < 2) || ($pasillo1 >= $columnas || $pasillo2 >= $columnas)) {
					mostrarMensajeError("El valor ingresado para los pasillos no esta permitido", "#text_pas");
					return $flag;
				} else {
					ocultarMensajeError();
				}
			}
		}

		// Control de piso(s)
		if ($('#text_pis').val() == null) {
			mostrarMensajeError("Se debe seleccionar un valor para los pisos", "#text_pis");
			return $flag;
		} else {
			$piso = $('#text_pis').val();
			ocultarMensajeError();
		}
	}

	function limpiaValores(){
		$('#text_col').val(null);
		$('#text_fil').val("");
		$('#text_pas').val("");
		$('#text_pis').val(null);
		$('#div_asientos_conf').html("")
							   .hide();
		ocultarMensajeError();
	}

	function mostrarMensajeError($mensaje, $campo){
		$mensajeFinal = $mensaje;
		$('#error_asientos').show();
		$('#alert').html($mensajeFinal);
		$($campo).focus();
		$flag = true;
	}

	function ocultarMensajeError(){
		$('#error_asientos').hide();
		$('#alert').html('');
		$flag = false;
	}

	function dibujaAsiento(col, fil){
		var idPos = "pos_"+col+"_"+fil;
		var $html_asiento = "<td><img id='"+idPos+"' rel='asientos' title='"+$nro_asiento+"' alt='asiento' src='"+$baseUrlActual+"/images/asiento_vacio.png'/></td>";
		 $nro_asiento++;
		return $html_asiento;
	}

	function dibujaVacio(col, fil){
		var idPos = "pos_"+col+"_"+fil;
		var $html_asiento = "<td><img id='"+idPos+"' rel='asientos' title='"+$nro_asiento+"' alt='vacio' src='"+$baseUrlActual+"/images/vacio.png'/></a></td>";
		$nro_asiento++;
		return $html_asiento;
	}

	function mostrarValorAsiento(){
		$('#div_asignacion_asientos').show();
		var numeroAsiento = '&nbsp;&nbsp;' + $(this).attr('title');
		var tipoAsiento = $(this).attr('alt');
		var idAsiento = $(this).attr('id');
		$('#div_numero_asiento').html(numeroAsiento);
		$('#sel_tipo_asiento').val(tipoAsiento);
		$('#div_id_asiento').val(idAsiento);
	}

	function actualizarValorAsiento(){
		var idAsiento = $('#div_id_asiento').val();
		var objAsiento = $('#'+idAsiento);
		var nuevoTipoAsiento = $('#sel_tipo_asiento').val();
		console.log("nuevoTipoAsiento: ", nuevoTipoAsiento);
		var srcImagenAsiento = getNuevoSrc(nuevoTipoAsiento);
		console.log("nueva src: ", srcImagenAsiento);
		objAsiento.attr('src', srcImagenAsiento);
		console.log("imagen cambiada");
	}

	function getNuevoSrc ($tipoAsiento) {
		var nuevaCadena;
		switch ($tipoAsiento) {
			case 'asiento':
				nuevaCadena = $baseUrlActual+'/images/asiento_vacio.png';
				break;
			case 'puerta':
				nuevaCadena = $baseUrlActual+'/images/puerta.png';
				break;
			case 'volante':
				nuevaCadena = $baseUrlActual+'/images/volante.png';
				break;
			case 'bano':
				nuevaCadena = $baseUrlActual+'/images/bano.png';
				break;
			case 'vacio':
				nuevaCadena = $baseUrlActual+'/images/vacio.png';
				break;
			default:
				nuevaCadena = $baseUrlActual+'/images/vacio.png';
				break;
		}
		return nuevaCadena;
	}
});

</script>