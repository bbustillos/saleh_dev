<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta_car')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cod_obj_venta_car),array('view','id'=>$data->id_cod_obj_venta_car)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($data->id_cod_obj_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_bus')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_bus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_pisos')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_pisos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carga_maxima')); ?>:</b>
	<?php echo CHtml::encode($data->carga_maxima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>