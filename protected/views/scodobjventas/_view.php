<div class="view">
	
	<?php $sDocRequeridos = ($data->doc_requeridos==1)?"Yes":"No"; ?>
	<?php $sActivoInactivo = ($data->activo_cod_obj_venta==1)?"Activo":"Inactivo"; ?>

	<legend></legend>
	<b><?php echo CHtml::encode($data->getAttributeLabel('placa_cod')); ?>:</b>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'link',
		'type'=>'primary',
		'size'=>'mini',
		'label'=>$data->placa_cod,
		'loadingText'=>'loading...',
		'htmlOptions'=>array('id'=>'buttonStateful'),
		'url'=>array('view','id'=>$data->id_cod_obj_venta)
	)); ?>
	<?php /*echo CHtml::link(CHtml::encode($data->placa_cod),array('view','id'=>$data->id_cod_obj_venta));*/ ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_cod_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($data->desc_cod_obj_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clase_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($data->idClaseObjVenta->desc_clase_obj_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doc_requeridos')); ?>:</b>
	<?php echo CHtml::encode($sDocRequeridos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interno_cod')); ?>:</b>
	<?php echo CHtml::encode($data->interno_cod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proyecto')); ?>:</b>
	<?php echo CHtml::encode($data->idProyecto->descripcion_proyecto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::encode($data->idPersona->personaNombreCompleto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo_cod_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($sActivoInactivo); ?>
	<br />

</div>