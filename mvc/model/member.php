<?php

	namespace Model;

	class member extends _Base {
		public static function getEmail($email = null) {
			/* 이메일을 이용하여 member 값 리턴 */
			if($email == null) {
				@$email = $_SESSION['id'];
			};

			return self::mf("SELECT * FROM `member` WHERE `email` = ?", [$email]);
		}

		public static function givePoint($email, $point) {
			self::mq("UPDATE `member` SET `point` = ? WHERE `email` = ?", [$point, $email]);
		}
	}