<?php
//fungsi ini tanpa return value, & tanpa parameter
function cetal_ganjil(){
    for ($i=0; $i<=100; $i++){
        if ($i%2==1){
            echo "$i, ";
        }
    }
}
//pemanggilan fungsi
cetal_ganjil();
?>