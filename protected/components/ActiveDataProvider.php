<?php 
	/**
	* 
	*/
	class ActiveDataProvider extends CActiveDataProvider implements AjaxResponseInterface
	{
		public function getErrors()
		{
			return [];
		}

		public function getResponseData()
		{
			$result = [];
			foreach ($this->getData() as $record) {
				$result[] = $record->getAttributes();
			}
			return $result;
		}
	}
?>