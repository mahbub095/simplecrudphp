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
	function generateReport() {
	$serialziedData = file_get_contents( DB_NAME );
	$students       = unserialize( $serialziedData );
	?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
			<th>Action</th>
			 
        </tr>
		<?php
		foreach ( $students as $student ) {
			?>
            <tr>
                <td><?php printf( '%s %s', $student['fname'], $student['lname'] ); ?></td>
                <td><?php printf( '%s', $student['roll'] ); ?></td>
				<td><?php printf( '<a href="/index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id'] ); ?></td>
            </tr>
			
			<?
	 
		?>

    </table>
	<?php
	 }
	}

	function addStudent( $fname, $lname, $roll ) {
		$serialziedData = file_get_contents( DB_NAME );
	$students       = unserialize( $serialziedData );
	$newId   = count( $students )+1;
	$student = array(
		'id'    => $newId,
		'fname' => $fname,
		'lname' => $lname,
		'roll'  => $roll
	);
	array_push( $students, $student );
	$serializedData = serialize( $students );
	file_put_contents( DB_NAME, $serializedData, LOCK_EX );

}