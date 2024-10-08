<?php

?>

<form method="POST" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<?php

$file = scandir("uploads");
for ($a = 2; $a < count($file); $a++) {
    ?>
    <p>
        <a href="uploads/<?php echo $file[$a] ?>"><?php echo $file[$a] ?></a>
    </p>
    <?php
}