<?php
$tahun =  $_POST['angka'];

if ($tahun % 4 == 0) {
   if ($tahun % 100 == 0) { 
       if ($tahun % 400 == 0) { 
           echo "Tahun kabisat"; 
        } else { 
            echo "Bukan tahun kabisat"; 
        } 
    } else { 
        echo "Tahun kabisat";
    }
} else {
    echo "Bukan tahun kabisat";
}
?>