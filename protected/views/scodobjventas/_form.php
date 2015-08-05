<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'scodobjventas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'desc_cod_obj_venta',array('class'=>'span5','maxlength'=>999)); ?>

	<b><?php echo $form->labelEx($model,'id_clase_obj_venta'); ?></b>
	<?php echo $form->dropDownList($model,'id_clase_obj_venta',
		CHtml::listData(Sclasesobjventa::model()->findAll(), 'id_clase_obj_venta', 'desc_clase_obj_venta'), array('empty'=>'-- Seleccionar --')
	); ?>

	<b><?php echo $form->labelEx($model,'doc_requeridos'); ?></b>
	<?php echo $form->checkBox($model,'doc_requeridos'); ?>

	<?php echo $form->textFieldRow($model,'placa_cod',array('style'=>'width:60px')); ?>

	<?php echo $form->textFieldRow($model,'interno_cod',array('style'=>'width:60px')); ?>

	<b><?php echo $form->labelEx($model,'id_proyecto'); ?></b>
	<?php echo $form->dropDownList($model, 'id_proyecto',
		CHtml::listData(Sproyecto::model()->findAll(), 'id_proyecto', 'descripcion_proyecto'), array('empty'=>'-- Seleccionar --')
	); ?>

	<b><?php echo $form->labelEx($model,'id_persona'); ?></b>
	<?php echo $form->dropDownList($model, 'id_persona', 
		CHtml::listData(Spersona::model()->findAll(), 'id_persona', 'personaNombreCompleto'), array('empty'=>'-- Seleccionar --')
	); ?>
    <?php echo CHtml::hiddenField('id_persona'); ?>

	<b><?php echo $form->labelEx($model,'activo_cod_obj_venta'); ?></b>
	<?php echo $form->checkBox($model,'activo_cod_obj_venta'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
