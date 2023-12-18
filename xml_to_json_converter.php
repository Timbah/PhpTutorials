<?php

$input = file('./xml_input.txt', FILE_IGNORE_NEW_LINES);

echo json_encode($input);

?>