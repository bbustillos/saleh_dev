<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php Yii::app()->bootstrap->register(); ?>
    <?php $baseUrlActual = Yii::app()->request->baseUrl; ?>
</head>

<body>

<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'submenuHtmlOptions' => array('class' => 'multi-level'),
            'items' => array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),
                array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Administración', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Objetos', 'url'=>array('/site/login'), 'itemOptions'=>array('class' => 'dropdown-submenu'),
                        'items' => array(
                            array('label'=>'Codificador de Objeto de Ventas', 'url'=>array('/scodobjventas/')),
                            array('label'=>'Clases de Objeto de Ventas', 'url'=>array('/sclasesobjventa/')),
                        ),
                        ),
                    ),
                ),
                array('label'=>'Usuarios',
                    'url'=>Yii::app()->user->ui->userManagementAdminUrl,
                    'visible'=>!Yii::app()->user->isGuest
                ),
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(

                array('template'=>'<a href="#modalSynchro" data-toggle="modal">Sincronizar</a>', 'visible'=>!Yii::app()->user->isGuest),
                array('template'=>'<a href="#" rel="servers">Servidores</a>', 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
));
?>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'modalSynchro')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Opciones de Sincronizaci&oacute;n</h4>
</div>
<div class="modal-body">
    <?php echo CHtml::radioButtonList('optSync','',array('1'=>'Sincronizar Todo','2'=>'Sincronizar día','3'=>'Sincronizar por fecha'),array(
        'labelOptions'=>array('style'=>'display:inline'), // add this code
        'separator'=>'  ',
    )); ?>
    <div id='rango-fecha' style='display:none;'>
        <?php echo CHtml::label('Syncronizacion Inicial', 'labelSyncIni', array()); ?>
        <?php echo CHtml::dateField('dateSyncIni', '', array()); ?>
        <?php echo CHtml::label('Syncronizacion Final', 'labelSyncFin', array()); ?>
        <?php echo CHtml::dateField('dateSyncFin', '', array()); ?>
    </div>
</div>
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'htmlOptions'=>array('id'=> 'sincronizar-id'),
        'label'=>'Actualizar',
        'url'=>'#',
        'loadingText'=>'Sincronizando...',
        'type'=>'primary',
    )); 
    $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Cerrar',
        'type'=>'danger',
        'icon'=>'remove white',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    ));?>
</div>
<?php $this->endWidget(); ?>

<div class="container" id="page">
    <!-- pathA -->
    <div id="baseUrlActual" style="display: none;"><?php echo $baseUrlActual; ?></div>
    <?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
        )); ?>
    <?php endif?>
    <?php echo $content; ?>
    <div class="clear"></div>
</div>

</body>
<script type="text/javascript">
$(document).ready(function() {
    /* Servidores Activos */
    var cabecera = "<table style='width: 280px;'><tr><th style='width: 30%;'>IP (Host)</th><th style='width: 30%;'>Estado</th><th style='width: 40%;'>Habilitar</th></tr></table>";
    var valorRespuesta;

    $("[rel=servers]").popover({
        placement : 'bottom',
        title : '<div style="text-align:center; color:blue; text-decoration:underline; font-size:14px;">' + cabecera + '</div>',
        html: 'true',
        content : '<div id="popOverBox"></div>'
    });

    var pathIpsServer = $("#baseUrlActual").text() + '/SipHosts/VerificarIPs';
    $('[rel=servers]').bind('click',function() {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: pathIpsServer,
            error: function(xhr, tStatus, e){r4
                if(!xhr){
                    alert(" Existe un error en la carga de datos ");
                    alert(tStatus+"   "+e.message);
                }else{
                    alert("else: "+e.message);
                }
            },
            success: function(data) {
                valorRespuesta = "<table style='width: 280px;'>";
                for (var i = 0; i < data.length; i++) {
                    var color = (data[i].estado == "ON") ? "green" : "red";
                    var estadoColor = "<font color='"+color+"'>"+data[i].estado+"</font>";
                    valorRespuesta += "<tr>";
                    valorRespuesta += "<td style='width: 35%; font-size:11px;'>" + data[i].ip + "</td>"
                    valorRespuesta += "<td style='width: 35%; font-size:11px;'>" + data[i].nombre + "</td>"
                    valorRespuesta += "<td style='width: 30%; font-size:13px;'>" + estadoColor + "</td>"
                    valorRespuesta += "</tr>";
                };
                valorRespuesta += "</table>";
                $('#popOverBox').html(valorRespuesta);
            }
        });        
    });

    /* Sincronizacion */
    $('#optSync_2').bind('click', function(){
        alert('test');
    });

});
</script>
</html>
