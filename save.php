<?php

$name = "a.wav";
move_uploaded_file($_FILES['audioData']['tmp_name'],$name);
echo $name;