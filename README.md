A PHP function to format a JSON string in a human-readable manner.

Usage
=====

Using the function is easy. You just include the file with the function in, then pass in a JSON string.

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
    
	// Output the formatted string
	echo format_json( $json_string );
	

More examples can be found in the examples folder.