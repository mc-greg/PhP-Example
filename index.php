<?php	
include_once 'inc/config.php';
include_once 'inc/book.php';
/* Php example Book Collection
 by: Greg McGowan
 
*/

$book = new book();
$books = $book->getAllBookIds();
?>
<h1>PHP Example - Book Collection</h1>
<h2><a href="index.php">Book List</a>  |  </h2>  
<table>
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th></th>
	</tr>

<?php

foreach ($books as $bookId) {
	$singleBook = new book($bookId);
	echo "<tr> <td> ". $singleBook->title . "</td> ";
	echo "<td> ". $singleBook->author . "</td> ";
	echo "<td> <a href='view.php?id=". $singleBook->id . "' >View Detail</a> </td> </tr>";
}
?></table>