<?php

	namespace Controller;

	use Model\board;
	use Model\member;
	use Model\_Base as DB;

	class boardController {
		public $id = "";
		public function __construct() {
			$id = member::getEmail();

			if($id) {
				if($id['email'] != "admin") {
					$this->id = $id;
				} else {
					return redirect("/", "회원만 접근 가능합니다.");
				};
			} else {
				return redirect("/", "회원만 접근 가능합니다.");
			}
		}

		public function index() {
			$boards = DB::ma("SELECT * FROM `board` order by `date` desc");

			return view("faq", [
				"id" => $this->id,
				"boards" => $boards,
			]);
		}

		public function writeAction() {
			/*
				내용,
				글쓴이
				글작성 시간
			 */
			
			$id = $this->id;

			$content = $_POST['content'];
			$content = strip_tags($content, "<text><a>");

			board::insert('board', [
				"name" => $id['name'],
				"content" => $content,
			]);	

			return redirect("/board/index", "글 작성이 완료되었습니다.");
		}
	}