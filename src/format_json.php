<?php
/**
 * A function which takes in a JSON string and formats it in a human-readable and computer-readable manner.
 *
 * @param string $json A JSON string (output of json_encode)
 * @return string A formatted JSON string
 *
 * @author Edmund Gentle (https://github.com/edmundgentle)
 */
function format_json($json) {
	$indents=0;
	$output='';
	$inside=false;
	for ($i = 0, $j = strlen($json); $i < $j; $i++) {
		$char=$json[$i];
		if($char=='{' || $char=='[') {
			if(!$inside) {
				$indents+=3;
				$output.=$char."\n".space($indents);
			}else{
				$output.=$char;
			}
		}elseif($char==',') {
			if(!$inside) {
				$output.=$char."\n".space($indents);
			}else{
				$output.=$char;
			}
		}elseif($char==':') {
			if(!$inside) {
				$output.=$char." ";
			}else{
				$output.=$char;
			}
		}elseif($char=='}' || $char==']') {
			if(!$inside) {
				$indents-=3;
				$output.="\n".space($indents).$char;
			}else{
				$output.=$char;
			}
		}elseif($char=='"') {
			if($inside) {
				$inside=false;
			}else{
				$inside=true;
			}
			$output.=$char;
		}else{
			$output.=$char;
		}
	}
	$output=str_replace('\/','/',$output);
	return $output;
}
/**
 * Returns a string containing a given number of spaces. Used by the format_json function.
 *
 * @param integer $x The number of spaces to return
 * @return string A given number of spaces.
 *
 * @author Edmund Gentle (https://github.com/edmundgentle)
 */
function space($x) {
	$output='';
	for($y=1;$y<=$x;$y++) {
		$output.=' ';
	}
	return $output;
}
?>