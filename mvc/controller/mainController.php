<?php

	namespace Controller;

	use Model\member;

	class mainController {
		public function index() {
			$id = member::getEmail();
			
			return view("index", [
				"id" => $id,
			]);
		}
	}