<?php 
class ApiController extends Controller
{
    // Members
    /**
    * Key which has to be in HTTP USERNAME and PASSWORD headers 
    */
    Const APPLICATION_ID = 'ASCCPE';

    /**
    * Default response format
    * either 'json' or 'xml'
    */
    private $format = 'json';
    /**
    * @return array action filters
    */
    public function filters(){
        return array(
            'postOnly + create',
            'putOnly + update',
            'deleteOnly + delete'
        );
    }

    // Acciones
    public function actionList(){
        // Autenticacion
        // $this->_checkAuth();
        $modelo = (array_key_exists('model', $_GET))?$_GET['model']:'';
        if ($modelo != '') {
            $dataProvider=new ActiveDataProvider($modelo);
            // Almacenamiento Log de sincronizacion
            $this->almacenarHistoriaSincOnline('list', $_GET, 'GET');
            $this->_sendResponse(200, CJSON::encode($dataProvider->getData()));
        } else {
            $this->_sendResponse(501, sprintf(
                'Error: Modo <b>List</b> no esta implementado en el modelo <b>%s</b>',
                $modelo)
            );
            Yii::app()->end();
        }
    }

    public function actionView(){
        // Autenticacion
        // $this->_checkAuth();
        $modelo = (array_key_exists('model', $_GET))?$_GET['model']:'';
        if ($modelo != '') {
            $id = (array_key_exists('id', $_GET))?$_GET['id']:'';
            // Almacenamiento Log de sincronizacion
            $this->almacenarHistoriaSincOnline('view', $_GET, 'GET');
            $this->_sendResponse(200, CJSON::encode($this->loadModel($modelo, $id)));
        } else {
            $this->_sendResponse(501, sprintf(
                'Error: Modo <b>View</b> no esta implementado en el modelo <b>%s</b>',
                $modelo)
            );
            Yii::app()->end();
        }
    }

    public function actionCreate(){
        // Autenticacion
        // $this->_checkAuth();
        $modelo = (array_key_exists('model', $_GET))?$_GET['model']:'';
        if ($modelo != '') {
            $model = new $modelo;
            $result = $this->obtenerInformacionJSON();
            $model->attributes = $result;
            $result = $model->save();
            // Almacenamiento Log de sincronizacion
            $this->almacenarHistoriaSincOnline('create', $_GET, 'POST', $jsonPOST);
            $this->_sendResponse(200, CJSON::encode($model));
        } else {
            $this->_sendResponse(501, sprintf(
                'Error: Modo <b>Create</b> no esta implementado en el modelo <b>%s</b>',
                $modelo)
            );
            Yii::app()->end();
        }
    }

    public function actionUpdate(){
        // Autenticacion
        // $this->_checkAuth();
        $modelo = (array_key_exists('model', $_GET))?$_GET['model']:'';
        if ($modelo != '') {
            $id = (array_key_exists('id', $_GET))?$_GET['id']:'';
            $model=$this->loadModel($modelo, $id);

            $result = $this->obtenerInformacionJSON();
            $model->attributes = $result;
            $result = $model->save();
            // Almacenamiento Log de sincronizacion
            $this->almacenarHistoriaSincOnline('update', $_GET, 'PUT', $jsonPOST);
            $this->_sendResponse(200, CJSON::encode($model));
        } else {
            $this->_sendResponse(501, sprintf(
                'Error: Modo <b>Update</b> no esta implementado en el modelo <b>%s</b>',
                $modelo)
            );
            Yii::app()->end();
        }
    }

    public function actionDelete(){
        // Autenticacion
        // $this->_checkAuth();
        $modelo = (array_key_exists('model', $_GET))?$_GET['model']:'';
        if ($modelo != '') {
            $id = (array_key_exists('id', $_GET))?$_GET['id']:'';
            $model=$this->loadModel($modelo, $id);
            $model->delete();
            
            // Almacenamiento Log de sincronizacion
            $this->almacenarHistoriaSincOnline('delete', $_GET, 'DELETE');

            $this->_sendResponse(200, CJSON::encode($model));
        } else {
            $this->_sendResponse(501, sprintf(
                'Error: Modo <b>Delete</b> no esta implementado en el modelo <b>%s</b>',
                $modelo)
            );
            Yii::app()->end();
        }
    }

    public function actionSynchronize(){
        // Obtenemos los valores de GET
        $aSincValores = (isset($_GET))?$_GET:array();
        if (is_array($aSincValores) && count($aSincValores)>0) {
            $sTipo = (array_key_exists('tipo', $_GET))?$_GET['tipo']:'';
            $sModelo = (array_key_exists('model', $_GET))?$_GET['model']:'';
            switch ($sTipo) {
                case 'todo':
                    // decodificar JSON
                    $aJsonResultado = $this->obtenerInformacionJSON();
                    // sacar un backup temporal de la tabla del modelo (pendiente)
                    // truncar la tabla de destino del modelo
                    $this->truncarTabla( $sModelo );
                    // actualizar la tabla correspondiente en un bucle
                    $this->multiCreateRecords( $sModelo, $aJsonResultado );
                    break;
                case 'bloque':
                    // decodificar JSON
                    $aJsonResultado = $this->obtenerInformacionJSON();
                    // actualizar la tabla correspondiente en un bucle
                    $this->multiCreateRecords( $sModelo, $aJsonResultado );
                    break;
                
                default:
                    $this->_sendResponse(501, sprintf(
                        'Error: Modo <b>'.$sTipo.'</b> no esta implementado en el modelo <b>%s</b>',
                        $sTipo)
                    );
                    break;
            }

        }
    }

    private function multiCreateRecords( $sModelo, $aRecords = array() ){
        $modelo = new $sModelo;
        $nombreTabla = $modelo->tableName();
        $cmd = Yii::app()->db->createCommand();
        try {
            if (is_array($aRecords) && count($aRecords)>0) {
                foreach ($aRecords as $key => $aFila) {
                    $cmd->insert($nombreTabla, $aFila);
                }
            }
        } catch (Exception $e) {
            $this->_sendResponse(404, sprintf('Error',$e));
        }
        $this->_sendResponse(200, CJSON::encode($aRecords));
    }

    private function FunctionName($value='')
    {
        $jsonPOST = file_get_contents('php://input');
        // decodificar JSON
        $result = json_decode($jsonPOST);
        if ($result === FALSE) {
            $this->_sendResponse(501, sprintf(
                'Error: La informaci&oacute;n enviada no tiene una estructura permitida.',
                $modelo)
            );
            Yii::app()->end();
        }
    }

    private function _sendResponse($status = 200, $body = '', $content_type = 'text/html') {
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        header('Content-type: ' . $content_type);
        
        // página del cuerpo
        if($body != '') {
            // send the body
            echo $body;
        }
        // Se debe crear la pagina si no se encuentra la misma
        else
        {
        // create some body messages
        $message = '';
        
        // Opcional
        switch($status)
        {
            case 401:
                $message = 'Usted debe estar autorizado para acceder a esta p&aacute;gina.';
            break;
            case 404:
                $message = 'La solicitud URL ' . $_SERVER['REQUEST_URI'] . ' no fue econtrado.';
            break;
            case 500:
                $message = 'El servidor encontró un error en la solicitud.';
            break;
            case 501:
                $message = 'La solicitud no se encuentra implementada.';
            break;
        }
        
        $signature = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];
        
        // this should be templated in a real-world solution
        $body = '
            <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
                    <title>' . $status . ' ' . $this->_getStatusCodeMessage($status) . '</title>
                </head>
                <body>
                    <h1>' . $this->_getStatusCodeMessage($status) . '</h1>
                    <p>' . $message . '</p>
                    <hr />
                    <address>' . $signature . '</address>
                </body>
            </html>';
        
        echo $body;
        }
        Yii::app()->end();
    }

    private function _getStatusCodeMessage($status) {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    private function _checkAuth()
    {
        // Check if we have the USERNAME and PASSWORD HTTP headers set?
        if(!(isset($_SERVER['HTTP_X_USERNAME']) and isset($_SERVER['HTTP_X_PASSWORD']))) {
            // Error: Unauthorized
            $this->_sendResponse(401);
        }
        $username = $_SERVER['HTTP_X_USERNAME'];
        $password = $_SERVER['HTTP_X_PASSWORD'];
        // Find the user
        $user=User::model()->find('LOWER(username)=?',array(strtolower($username)));
            if($user===null) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Name is invalid');
        } else if(!$user->validatePassword($password)) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Password is invalid');
        }
    }

    /**
     * Returns the json or xml encoded array
     * 
     * @param mixed $model 
     * @param mixed $array Data to be encoded
     * @access private
     * @return void
     */
    private function _getObjectEncoded($model, $array)
    {
        if(isset($_GET['format']))
            $this->format = $_GET['format'];

        if($this->format=='json') {
            return CJSON::encode($array);
        }
        elseif($this->format=='xml') {
            $result = '<?xml version="1.0">';
            $result .= "\n<$model>\n";
            foreach($array as $key=>$value)
                $result .= "    <$key>".utf8_encode($value)."</$key>\n"; 
            $result .= '</'.$model.'>';
            return $result;
        } else {
            return;
        }
    }

    private function sendAjaxResponse(AjaxResponseInterface $model){
        $success = count($model->getErrors()) === 0;
        $response_code = $success ? 200 : 404;
        header('Content-type: application/json', true, $response_code);
        echo json_encode([
            'success'=>$success,
            'data'=>$model->getResponseData(),
            'errors'=>$model->getErrors()
        ]);
        Yii::app()->end();
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($modelo, $id)
    {
        $model=$modelo::model()->findByPk($id);
        if($model===null)
            $this->sendAjaxResponse(new NotFoundException());
        return $model;
    }

    public function almacenarHistoriaSincOnline($sAccion, $aParametros, $sTipo, $sJson='') {
        $modeloHistoria = new HistoriaSincOnline;
        $jsonSerializado = ($sJson=='')?'':serialize($sJson);
        $aHistoria = array(
            'accion' => $this->generarCadenaAccion($sAccion, $aParametros),
            'tipo'=>$sTipo,
            'objeto'=>$aParametros['model'],
            'json'=>$jsonSerializado,
            'fecha_registro'=>date_create()->format('Y-m-d H:i:s'));
        $modeloHistoria->attributes = $aHistoria;
        $modeloHistoria->save();
    }

    public function generarCadenaAccion($accion, $parametros)
    {
        $sAccionCadena = $accion . "?";
        foreach ($parametros as $key => $value) {
            $sAccionCadena .= $key . "=" . $value . "&";
        }
        $sAccionCadena = substr($sAccionCadena, 0, -1);
        return $sAccionCadena;
    }

    private function obtenerInformacionJSON()
    {
        $jsonPOST = file_get_contents('php://input');
        // decodificar JSON
        $result = json_decode($jsonPOST);
        if ($result === FALSE) {
            $this->_sendResponse(501, sprintf(
                'Error: La informaci&oacute;n enviada no tiene una estructura permitida.',
                $modelo)
            );
            Yii::app()->end();
        }
        // Parsear de Objecto a array
        $result = json_decode(json_encode($result), true);
        return $result;
    }

    public function truncarTabla($sModelo)
    {
        $modelo = new $sModelo;
        $trans = $modelo->dbConnection->beginTransaction();
        try {
            // $sTablaNombre = 'frog';
            $sTablaNombre = $modelo->tableName();
            $q = 'TRUNCATE '.$sTablaNombre.';';
            $cmd = Yii::app()->db->createCommand($q);
            $eExec = $cmd->execute();
            $trans->commit();
        } catch (Exception $e) {
            $trans->rollback();
        }
    }
}
?>