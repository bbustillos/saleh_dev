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
);
?>

<h3>Codificador Objeto de Ventas</h3>
<h4>Vista #<?php echo $model->id_cod_obj_venta; ?></h4>

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
			'cantidad_pisos',
			'carga_maxima',
			array(
				'name'=>'imagen',
				'header'=>'Imagen',
				'type'=>'raw',
				'value'=>'CHtml::link($data->imagen, array("scodobjventascaract/download", "nombre"=>$data->imagen, "objeto"=>$data->id_cod_obj_venta))',
				'htmlOptions'=>array('width'=>'40'),
			),
			// 'imagen',
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