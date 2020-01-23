<?php

	function testAction(string $param, $callback) {
		return $callback($param);
	}

	echo testAction("Test echo", function($arg) {
		return $arg;
	});

?>