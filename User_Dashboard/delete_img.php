<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "DELETE FROM home_imgs WHERE id=$id");
?>
<script type="text/javascript">
    window.location="dash_home_imgs.php";
</script>
