<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_car',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_tipo_bus',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cantidad_pisos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'carga_maxima',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'imagen',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
