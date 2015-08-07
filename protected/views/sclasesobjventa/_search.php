<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_clase_obj_venta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'desc_clase_obj_venta',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->radioButtonList($model,'real_fict_clase_obj_venta', array('REAL'=>'Real', 'FICTICIO'=>'Ficticio')); ?>

	<?php echo $form->dropDownList($model,'diario_validar', array('sdiariopasajes'=>'sdiariopasajes', 'sdiarioguias'=>'sdiarioguias')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
