<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_datos')); ?>:</b>
	<?php echo CHtml::encode($data->base_datos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tabla')); ?>:</b>
	<?php echo CHtml::encode($data->tabla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accion')); ?>:</b>
	<?php echo CHtml::encode($data->accion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('json')); ?>:</b>
	<?php echo CHtml::encode($data->json); ?>
	<br />


</div>