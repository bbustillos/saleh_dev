<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_persona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_persona),array('view','id'=>$data->id_persona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->id_empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sucursal')); ?>:</b>
	<?php echo CHtml::encode($data->id_sucursal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cod_cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('multi_suc')); ?>:</b>
	<?php echo CHtml::encode($data->multi_suc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_documento_identidad')); ?>:</b>
	<?php echo CHtml::encode($data->nro_documento_identidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email_persona')); ?>:</b>
	<?php echo CHtml::encode($data->email_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres_persona')); ?>:</b>
	<?php echo CHtml::encode($data->nombres_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterno_persona')); ?>:</b>
	<?php echo CHtml::encode($data->paterno_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materno_persona')); ?>:</b>
	<?php echo CHtml::encode($data->materno_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_persona')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fono_persona')); ?>:</b>
	<?php echo CHtml::encode($data->fono_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular_persona')); ?>:</b>
	<?php echo CHtml::encode($data->celular_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autoriza_carga_pts')); ?>:</b>
	<?php echo CHtml::encode($data->autoriza_carga_pts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autoriza_traspaso')); ?>:</b>
	<?php echo CHtml::encode($data->autoriza_traspaso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('e_susuario')); ?>:</b>
	<?php echo CHtml::encode($data->e_susuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('limite_credito')); ?>:</b>
	<?php echo CHtml::encode($data->limite_credito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pts_iniciales')); ?>:</b>
	<?php echo CHtml::encode($data->pts_iniciales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_nivel')); ?>:</b>
	<?php echo CHtml::encode($data->cod_nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expirable')); ?>:</b>
	<?php echo CHtml::encode($data->expirable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_expiracion')); ?>:</b>
	<?php echo CHtml::encode($data->dias_expiracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecultcad_ambio')); ?>:</b>
	<?php echo CHtml::encode($data->fecultcad_ambio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_salida')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_ptos')); ?>:</b>
	<?php echo CHtml::encode($data->max_ptos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ingreso_externo')); ?>:</b>
	<?php echo CHtml::encode($data->ingreso_externo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomimg')); ?>:</b>
	<?php echo CHtml::encode($data->nomimg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload')); ?>:</b>
	<?php echo CHtml::encode($data->upload); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cambia')); ?>:</b>
	<?php echo CHtml::encode($data->cambia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maqvir')); ?>:</b>
	<?php echo CHtml::encode($data->maqvir); ?>
	<br />

	*/ ?>

</div>