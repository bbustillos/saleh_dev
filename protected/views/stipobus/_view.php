<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_bus')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo_bus),array('view','id'=>$data->id_tipo_bus)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_tipo_bus')); ?>:</b>
	<?php echo CHtml::encode($data->desc_tipo_bus); ?>
	<br />


</div>