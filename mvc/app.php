<?php

	session_start();
	date_default_timezone_set("Asia/Seoul");

	spl_autoload_register(function($class) {
		$classPath = str_replace("\\", "/", $class);
		if(file_exists($f=__dir__."/$classPath".".php")) {
			include $f;
		}
	});

	function dd() {
		if(DEBUG) {
			echo "<pre>";
				foreach(func_get_args() as $v) {
					var_dump($v);
				};
			echo "</pre>";
		}
	}

	function encode($email) {
		$lookList = [];

		for ($i=0; $i < mb_strlen($email); $i++) { 
			$lookList[] = ord($email[$i]);
		};

		return json_encode($lookList);
	}; 

	function decode($email) {
		$org_text = "";

		for ($i=0; $i < count($email); $i++) { 
			$org_text .= chr($email[$i]);
		};

		return $org_text;
	}

	function error($e) {
		$name = get_class($e);
		$message = $e->getMessage();
	}

	function view($url, $data = []) {
		extract($data);

		ob_start();
			include __dir__."/view/".$url.".php";
		$data = ob_get_clean();

		include __dir__."/view/layout.php";
	}


	function redirect($url, $msg = null) {
		echo "<script>
			".($msg ? "alert('{$msg}')" : "").";
			location.href='".$url."';
		</script>";
		exit;
	}

	function getAllRoom() {
		$allRoom = [];

		for ($i=1; $i <= 5; $i++) { 
			for ($j=1; $j <= 20; $j++) { 
				$allRoom[] = $i.zero($j);
			};
		};

		return $allRoom;
	}

	function zero($n) {
		return $n < 10 ? "0".$n : $n;
	}

	function loginChk() {
		if(isset($_COOKIE['login'])) {
			$_SESSION['id'] = decode(json_decode($_COOKIE['login']));
		};
	}
	
	function v (&$val, $def = null) {
		return isset($val) ? $val : $def;
	}

	function __main() {
		$url = explode("/", v($_GET['url'], "main/index"));
		$controller = "Controller\\".array_shift($url)."Controller";
		$method = array_shift($url);

		try {
			$inst = new $controller;

			if(method_exists($inst, $method)) {
				loginChk();
				return call_user_func_array([$inst, $method], $url);
			}
		} catch (Exception $e) {
			error($e);
		}
	}

	__main();