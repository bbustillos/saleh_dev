<?php 
	/**
	* 
	*/
	class NotFoundException extends Exception implements AjaxResponseInterface
	{
		protected $message = 'Recurso no encontrado. Revisar el ID solicitado no existe.';
		
		public function getResponseData() {
			return [];
		}
		
		public function getErrors()
		{
			return [$this->getMessage()];
		}
	}
?>