<?php

class Duplicates {

	public function doSomething() {

		$count = 10;
		$values = array();
	        for ($i = 0; $i < $count; $i++) {
			$values[$i] = $i;
		}

                $count = 10;
                $values = array();
                for ($i = 0; $i < $count; $i++) {
                        $values[$i] = $i;
                }

		return "Did something";
	}


        public function doSomethingElse() {

	        $count = 10;
                $values = array();
                for ($i = 0; $i < $count; $i++) {
                        $values[$i] = $i;
                } 

                return "Did something";
        }

}


?>
