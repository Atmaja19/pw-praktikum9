<?php

require 'connection.php';
$ID = $_GET["ID"];
if (hapus($ID) > 0) {
    echo "
        <script>
            alert('Delete Success');
            document.location.href = 'praktikum9.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Try Again!');
            document.location.href = 'praktikum9.php';
        </script>
    ";
}
