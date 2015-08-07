<?php
$this->breadcrumbs=array(
	'Scodobjventascaracts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Scodobjventascaract','url'=>array('index')),
	array('label'=>'Create Scodobjventascaract','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('scodobjventascaract-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Scodobjventascaracts</h1>

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
	'id'=>'scodobjventascaract-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cod_obj_venta_car',
		'id_cod_obj_venta',
		'id_tipo_bus',
		'cantidad_pisos',
		'carga_maxima',
		'imagen',
		/*
		'observaciones',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
