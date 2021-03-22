<?php

	namespace Controller;

	use Model\member;
	use Model\roompay;

	class adminController {
		public function index() {
			$id = member::getEmail();
			
			if(@$id['email'] != "admin") {
				return redirect("/", "관리자만 접근 가능합니다.");
			};

			$roomList = roompay::getAllRoomPay();

			return view("admin", [
				"id" => $id,
				"rooms" => getAllRoom(),
				"roompays" => $roomList,
			]);
		}
	}