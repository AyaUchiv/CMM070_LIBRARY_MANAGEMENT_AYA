<?php
require_once('header.php'); 
?>

<main>
<!--UPLOAD BOOKS FORM-->
<form class = "formsize">


<p><b>Book Category:</b></p>
<input type = "radio" id = "fictional" name = "category" value = "fictional">
<label for = "fictional">Fictional Books</label>

<input type = "radio" id = "non_fictional" name = "category" value = "non_fictional">
<label for = "non_fictional">Non-Fictional Books</label>

<input type = "radio" id = "educational" name = "category" value = "educational">
<label for = "educational">Educational Books</label><br><br>



<b>Book Title:</b>
<textarea class = "form-control" rows = 2 id = "book_title" name = "book_title" placeholder = "e.g PHP and SQL book 1"></textarea><br><br>



<b>Book Author:</b>

<textarea class = "form-control" rows = 2 id = "book_author" name = "book_author" placeholder = "e.g Aya"></textarea><br><br>



<b>Book Description:</b>

<textarea class = "form-control" rows = 3 id = "book_description" name = "book_description" placeholder = "additional Information e.g ISBN"></textarea>


<div class = "d-grid">
<input type = "submit" class = "btn btn-primary btn-block" value = "Upload Book Information">
</div>
</form>

</main>
<?php
require_once('footer.php'); 
?>
