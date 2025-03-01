<?php
require_once('header.php'); 
?>

<main>
<!--ADMIN PROFILE-->
<h2>Welcome Back $_POST["admin"]</h2>
<p>What would you like to do?</p>

<ul>
<li><a href = "#">Book Management</a></li>
<ul>
<li><a href = "upload_book.html">Add/Upload Books</a></li>
<li><a href = "update_book.html">Update/Delete Books</a></li>
</ul>

<li><a href = "#">User Management</a></li>
<ul>
<li><a href = "add_user.html">Add User</a></li>
<li><a href = "update_user.html">Update/Delete User</a></li>
</ul>
</ul>
</main>

<?php
require_once('footer.php'); 
?>
