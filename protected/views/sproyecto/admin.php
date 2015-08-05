<?php
$this->breadcrumbs=array(
	'Sproyectos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sproyecto','url'=>array('index')),
	array('label'=>'Create Sproyecto','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sproyecto-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sproyectos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sproyecto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_proyecto',
		'id_empresa',
		'id_sucursal',
		'visible',
		'descripcion_proyecto',
		'no_contrato',
		/*
		'resolucion',
		'no_licitacion',
		'contratante',
		'garantia',
		'scontratista',
		'dpto',
		'lugar',
		'encargado',
		'fecha_inicial',
		'vencimiento',
		'supervisor',
		'moneda',
		'monto',
		'tipo_cambio',
		'historial',
		'por_defecto',
		'estado',
		'cambia',
		'motivos_i',
		'motivos_e',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
