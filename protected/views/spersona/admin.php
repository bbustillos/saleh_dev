<?php
$this->breadcrumbs=array(
	'Spersonas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Spersona','url'=>array('index')),
	array('label'=>'Create Spersona','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('spersona-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Spersonas</h1>

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
	'id'=>'spersona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_persona',
		'id_empresa',
		'id_sucursal',
		'tipo',
		'cod_cargo',
		'multi_suc',
		/*
		'nro_documento_identidad',
		'email_persona',
		'nombres_persona',
		'paterno_persona',
		'materno_persona',
		'direccion_persona',
		'fono_persona',
		'celular_persona',
		'autoriza_carga_pts',
		'autoriza_traspaso',
		'observaciones',
		'e_susuario',
		'fecha_nacimiento',
		'fecha_ingreso',
		'fecha_salida',
		'limite_credito',
		'pts_iniciales',
		'login',
		'password',
		'cod_nivel',
		'expirable',
		'dias_expiracion',
		'fecultcad_ambio',
		'cantidad_ingreso',
		'cantidad_salida',
		'max_ptos',
		'ingreso_externo',
		'nomimg',
		'id_tipo',
		'fecha',
		'upload',
		'estado',
		'cambia',
		'maqvir',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
