<?php

	namespace model;

	class reserve extends _Base {
		public static function getList() {
			$rooms = getAllRoom();

			return $rooms;
		}
		public static function floorGetList($filterFloor = null) {
			/* 층으로 나눈 방 리스트를 가져온다 */
			$result = [];

			$rooms = self::getList();

			foreach($rooms as $key => $value) {
				$floor = floor($value / 100);

				if(in_array($floor, $filterFloor)) {
					$result[$floor][] = $value;
				};
			};

			return $result;
		}
	}