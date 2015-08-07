<?php
$this->breadcrumbs=array(
	'Codificador Objeto de Ventas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Nuevo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('scodobjventas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Codificador Objeto de Ventas</h3>
<h4>Administraci&oacute;n</h4>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'scodobjventas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cod_obj_venta',
		'desc_cod_obj_venta',
		array(
			'name'=>'id_clase_obj_venta',
			'value'=>'$data->idClaseObjVenta->desc_clase_obj_venta'
		),
		array(
			'name'=>'doc_requeridos',
			'value'=>'($data->doc_requeridos==1)?"Si":"No"',
		),
		'placa_cod',
		'interno_cod',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
