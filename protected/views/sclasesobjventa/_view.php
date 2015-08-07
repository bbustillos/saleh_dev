<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_clase_obj_venta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_clase_obj_venta),array('view','id'=>$data->id_clase_obj_venta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_clase_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($data->desc_clase_obj_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('real_fict_clase_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($data->real_fict_clase_obj_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diario_validar')); ?>:</b>
	<?php echo CHtml::encode($data->diario_validar); ?>
	<br />


</div>