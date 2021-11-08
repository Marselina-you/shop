<?php 
class CabinetController
{
	public function actionIndex()
	{	
		$userId = User::checkLogged();
		$user = User::getUserById($userId);
		echo $userId;
		require_once(ROOT .'/views/cabinet/index.php');
		return true;
	}
}