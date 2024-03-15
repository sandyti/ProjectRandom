<?php
$kata = $_POST['angka'];

if (strrev($kata) == $kata) {
    echo "palindrom";
} else {
    echo "bukan palindrom";
}
?>