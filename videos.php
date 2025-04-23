<?php
$files = glob("videos/*.{mp4,webm,gif}", GLOB_BRACE);
echo json_encode($files);
?>
