<?php
$x = $_POST['x'] ?? 0;
$x = (int)$x;

$y = $_POST['y'] ?? 0;
$y = (int)$y;

echo rand($x,$y);