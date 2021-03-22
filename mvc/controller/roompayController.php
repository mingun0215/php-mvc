<?php

	namespace Controller;

	use Model\roompay;
	use Model\_Base as DB;

	class roompayController {
		public function modify () {
			$sql = 1;

			if(!isset($_GET['type'])) {
				$sql = "room = ".implode(" || room = ", $_POST['rooms']);
			};

			DB::mq("UPDATE `roompay` SET `pay` = ? WHERE $sql", [$_POST['pay']]);       

			return redirect("/admin/index");
		}
	}