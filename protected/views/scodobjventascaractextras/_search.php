<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_car_extra',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_car',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_extra',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'observaciones',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
