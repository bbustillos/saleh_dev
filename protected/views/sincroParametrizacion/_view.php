<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tabla')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tabla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('campos_det')); ?>:</b>
	<?php echo CHtml::encode($data->campos_det); ?>
	<br />


</div>