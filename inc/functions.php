<?php
define('DB_NAME','C:\laragon\www\crud\data\db.txt');
function seed($filename) {
	$data           = array(
		array(
			'id'    => 1,
			'fname' => 'Kamal',
			'lname' => 'Ahmed',
			'roll'  => '11'
		),
		array(
			'id'    => 2,
			'fname' => 'Jamal',
			'lname' => 'Ahmed',
			'roll'  => '12'
		),
		array(
			'id'    => 3,
			'fname' => 'Ripon',
			'lname' => 'Ahmed',
			'roll'  => '9'
		),
		array(
			'id'    => 4,
			'fname' => 'Nikhil',
			'lname' => 'Chandra',
			'roll'  => '8'
		),
		array(
			'id'    => 5,
			'fname' => 'John',
			'lname' => 'Rozario',
			'roll'  => '7'
		),
	);
	$serializedData = serialize( $data );
	file_put_contents( $filename, $serializedData, LOCK_EX );
}
	 