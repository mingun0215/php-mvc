<?php

	namespace Controller;

	use Model\member;
	use Model\_Base as DB;

	class memberController {
		public function join() {
			if(isset($_SESSION['id'])) {
				return redirect("/", "비회원만 접근 가능합니다.");
			}
			return view("join");
		}
		public function login() {
			if(isset($_SESSION['id'])) {
				return redirect("/", "비회원만 접근 가능합니다.");
			}
			return view("login");
		}

		public function joinAction() {
			/*
				필수 항목 : 전체,
				아이디 : 이메일 형식 test@test.co.kr 까지 중복검사,
				비밀번호 : 재입력과 일치 하는지 확인
			 */
			$message = [];
			$email_overlap = member::getEmail($_POST['email']);

			foreach($_POST as $key => $value) {
				if($value == "") {
					switch($key) {
						case "email":
							$message[] = "아이디(이메일)은 필수입력 사항입니다.";
						break;
						case "name":
							$message[] = "이름은 필수입력 사항입니다.";
						break;
						case "pw":
							$message[] = "비밀번호는 필수입력 사항입니다.";
						break;
						case "repw":
							$message[] ="비밀번호 확인은 필수입력 사항입니다.";
						break;
					}
				} else {
					switch($key) {
						case "email":
							$email_reg = "/^\w+@[a-z]+(\.[a-z]+){1,2}$/";
							if(!preg_match($email_reg, $value)) {
								$message[] = "이메일 형식이 올바르지 않습니다.";
							}
						break;
						case "pw":
							if($_POST['repw'] != "" && $_POST['repw'] != $value) {
								$message[] = "비밀번호가 일치하지 않습니다.";
							};
						break;
					}
				}
			};

			if($email_overlap) {
				$message[] = "중복되는 이메일 입니다.";
			};

			if(!count($message)) {
				member::insert('member', [
					"email" => $_POST['email'],
					"pw" => $_POST['pw'],
					"name" => $_POST['name'],
					"point" => 5000000
				]);

				return redirect("/");
			} else {
				return redirect("/member/join", join($message, "\\r"));
			}
		}

		public function loginAction() {
			$login_chk = DB::mf("SELECT * FROM `member` WHERE `email` = ? && `pw` = ?", [$_POST['email'], $_POST['pw']]);
			$message = "";

			if($login_chk) {
				$message = "로그인이 완료 되었습니다.";

				if(isset($_POST['autologin'])) {
					setcookie("login", encode($login_chk['email']), time() + 86400 * 7, "/");
				} else {
					$_SESSION['id'] = $login_chk['email'];
				};
			} else {
				$message = "존재하지 않는 아이디 이거나 비밀번호를 잘못입력 하셨습니다.";
			};

			return redirect("/", $message);
		}

		public function logout() {
			session_destroy();
			setcookie("login", "", time() - 3000, "/");

			return redirect("/");
		}

		public function givePoint() {
			$email = member::getEmail($_POST['email']);
			$message = "";

			if($email) {
				$message = "포인트 기부가 완료되었습니다.";
				
				$point = $email['point'] + $_POST['point'];
				member::givePoint($_POST['email'], $point);

			} else {
				$message = "존재하지 않는 이메일 입니다.";
			};

			return redirect("/admin/index", $message);
		}
	}