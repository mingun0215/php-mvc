<?php

	namespace Controller;

	use Model\member;
	use Model\reserve;
	use Model\_Base as DB;

	class reserveController {
		public $id = "";
		public function __construct() {
			$id = member::getEmail();

			if(!$id || $id['email'] == "admin") {
				return redirect("/", "회원만 접근 가능합니다.");
			};

			$this->id = $id;
		}
		public function creserve() {
			return view("Creserve", [
				"id" => $this->id,
			]);
		}

		public function areserve() {
			return view("Areserve", [
				"id" => $this->id,
			]);
		}

		public function resroom() {
			extract($_POST);

			$roomSql = "room = ".implode(" || room = ", $_POST['room']);
			$total = DB::mf("SELECT sum(pay) as sum FROM `roompay` WHERE $roomSql")['sum'];

			$floor = [];

			foreach($room as $val) {
				$floor[] = floor($val / 100);
			};

			$floor = array_unique($floor);

			$floorList = reserve::floorGetList($floor);

			return view("reserve", [
				"id" => $this->id,
				"resRoom" => $room,
				"in_date" => $in_date,
				"out_date" => $out_date,
				"total" => $total,
				"floorList" => $floorList,
			]);
		}

		public function reserveAction() {
			$id = $this->id;
			$total = $_POST['total'];

			if($id['point'] - $total < 0) {
				return redirect("/", "포인트가 부족합니다.");
			} else {
				member::givePoint($id['email'], $id['point'] - $total);

				DB::insert('reserve', [
					"in_date" => $_POST['in_date'],
					"out_date" => $_POST['out_date'],
					"room" => $_POST['room'],
					"name" => $this->id['name']
				]);

				return redirect("/", "예약이 완료되었습니다.");
			};
		}
	}