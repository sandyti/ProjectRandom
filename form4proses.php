<?php
$umur = $_POST['angka'];

if ($umur < 13) {
    echo "Anak-anak";

} elseif ($umur >= 13 && $umur < 20) {
    echo "Remaja";

} elseif ($umur >= 20 && $umur < 60) {
    echo "Dewasa";

} else {
    echo "Lansia";
}
?>