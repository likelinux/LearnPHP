<?php
    function shuffle_assoc(&$array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return true;
    }
	$name=array('a'=>'alpha','b'=>'bravo','c'=>'charli','d'=>'dan','e'=>'engine');
	echo shuffle_assoc($name);
?>