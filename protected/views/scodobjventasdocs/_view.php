<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta_doc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cod_obj_venta_doc),array('view','id'=>$data->id_cod_obj_venta_doc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cod_obj_venta')); ?>:</b>
	<?php echo CHtml::encode($data->id_cod_obj_venta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documento')); ?>:</b>
	<?php echo CHtml::encode($data->documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validez')); ?>:</b>
	<?php echo CHtml::encode($data->validez); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requerido')); ?>:</b>
	<?php echo CHtml::encode($data->requerido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_alerta')); ?>:</b>
	<?php echo CHtml::encode($data->dias_alerta); ?>
	<br />


</div>