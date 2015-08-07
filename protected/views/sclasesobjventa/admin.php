<?php
$this->breadcrumbs=array(
	'Sclasesobjventas'=>array('index'),
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
	$.fn.yiiGridView.update('sclasesobjventa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Clases Objetos de Venta</h3>
<h4>Administraci&oacute;n</h4>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sclasesobjventa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_clase_obj_venta',
		'desc_clase_obj_venta',
		'real_fict_clase_obj_venta',
		'diario_validar',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
