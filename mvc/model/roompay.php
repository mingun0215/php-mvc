<?php

	namespace Model;

	class roompay extends _Base {
		public function defaultSet() {
			self::mq("DELETE FROM `roompay` WHERE 1");

			$rooms = getAllRoom();

			foreach($rooms as $room) {
				$floor = floor($room / 100);
				$roomType = $room % 2 == 0 ? 1 : 0;

				self::insert('roompay', [
					"room" => $room,
					"pay" => $floor * 10000 + $roomType * 5000,
					"floor" => $floor,
				]);
			};
		}

		public function getAllRoomPay() {
			return self::ma("SELECT * FROM `roompay`");
		}
	}