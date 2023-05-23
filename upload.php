<?php

var_dump($_FILES);

var_dump(move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . '/a.jpg'))

?>