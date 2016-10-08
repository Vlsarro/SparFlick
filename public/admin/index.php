<?php
require_once("../../app/config/initialize.php");
if (!$session->is_logged_in()) { redirect_to("../../app/http/admin/login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>

	<h2>Menu</h2>

	<?php echo output_message($message); ?>
	<ul>
		<li><a href="list_photos.php">List Photos</a></li>
		<li><a href="../../app/http/admin/logfile.php">View Log file</a></li>
		<li><a href="../../app/http/admin/logout.php">Logout</a></li>
	</ul>

<?php include_layout_template('admin_footer.php'); ?>
		
