<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('color_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->color_id),array('view','id'=>$data->color_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->color_descripcion); ?>
	<br />


</div>