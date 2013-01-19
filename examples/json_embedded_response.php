<?php
/**
 * Example code for embedding formatted JSON within an HTML page. This could be used for documentation.
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

// Format the string and save within a variable $formatted_string

$formatted_string = format_json( $json_string );

?>
<h1>Sample JSON string</h1>

<p>This example shows how a JSON string can be formatted then embedded within an HTML document.</p>

<pre>
	<?php echo $formatted_string; ?>
</pre>