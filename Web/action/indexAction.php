<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/Connection.php");
	require_once("action/DAO/ResponseDAO.php");

	class IndexAction extends CommonAction {
		public $result;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			
		}
	}
	

