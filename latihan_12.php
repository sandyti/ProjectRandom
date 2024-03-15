<?php
function jumlahkan($arr) {
   $total = 0;
   foreach ($arr as $nilai) {
       $total += $nilai;
    }
    return $total;
}
    
$angka = [1, 2, 3, 4, 5];
echo "Total: " . jumlahkan($angka);
?>