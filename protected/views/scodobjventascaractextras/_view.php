<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta_car_extra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cod_obj_venta_car_extra),array('view','id'=>$data->id_cod_obj_venta_car_extra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta_car')); ?>:</b>
	<?php echo CHtml::encode($data->id_cod_obj_venta_car); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta_extra')); ?>:</b>
	<?php echo CHtml::encode($data->id_cod_obj_venta_extra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />


</div>