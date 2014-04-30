<?php
//view file
//By Greg McGowan

include_once 'inc/config.php';
include_once 'inc/book.php';
/* Php example to view a single item
*/
If(isset($_GET['id'])){
	$book = new book($_GET['id']);
	if($book->valid()){
		?>
		<h1>Book Detail </h1>
		<h2><a href="index.php">Book List</a>    </h2>  
		<table>
		
		<?php
			echo "<tr><td><strong> Title  </strong> </td> <td> ". $book->title . "</td> </tr>";
			echo "<tr><td><strong> Autdor </strong> </td> <td> ". $book->author."</td></tr> ";
			echo "<tr><td><strong> ISBN   </strong> </td> <td> ". $book->isbn . "</td>  </tr> ";
			echo "<tr><td><strong> Description </strong></td> <td> ". $book->description . " </td> </tr>";
		
		?></table><?php
	}
}

?>