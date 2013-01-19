<?php
/**
 * Example code for a JSON page. This would be a sample API response.
 *
 * @author Edmund Gentle (https://github.com/edmundgentle)
 */

// Include the file containing the function

require '../src/format_json.php';

// Create a random array, and fill it with some sample data

$sample_array = array(
	"foo" => "bar",
	"bar" => "foo",
	"hello" => array(
		"jim",
		"world"
	),
	"multi" => array(
		"dimensions"=>true
	)
);

// Encode the array into a JSON string

$json_string = json_encode( $sample_array );

// Send some header data which makes sure the page displays the source code within a browser

header("Content-Type: text/javascript; charset=UTF-8\n");

// Output the formatted string

echo format_json( $json_string );

?>