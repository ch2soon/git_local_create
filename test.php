<?php
defined(TESTPAGE);

class TestClass extends Controller {
	public function test_function() {
		$param = array(
			'a'		=> '1',
			'b'		=> '2',
			'c'		=> '3'
		);
		var_dump($param);
	}
}
?>