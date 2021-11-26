<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "DELETE FROM home_content WHERE id=$id");
?>
<script type="text/javascript">
    window.location="dash_home_contents.php";
</script>
