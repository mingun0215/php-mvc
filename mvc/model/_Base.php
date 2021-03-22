<?php

	namespace Model;

	use \PDO;

	abstract class _Base {
		protected static function dbCon() {
			$db = new PDO("mysql:host=127.0.0.1;dbname=serverside;charset=utf8;","root","", [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);

			return $db;
		}

		public static function mq($sql, $param = []) {
			$q = self::dbCon()->prepare($sql);
			$q->execute($param);

			return $q;
		}

		public static function mf($sql, $param = []) {
			return self::mq($sql, $param)->fetch();
		}

		public static function ma($sql, $param = []) {
			return self::mq($sql, $param)->fetchAll();
		}

		public static function insert($table, $data) {
			$key = array_keys($data);
			$value = array_values($data);
			$sql = "`".implode("` = ?, `", $key)."` = ?";

			self::mq("INSERT INTO `{$table}` SET ".$sql, $value);
		}
	}