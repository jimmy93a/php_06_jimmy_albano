<?php

for ($i = 1; $i <= 100 ; $i++) { 
    

if ($i % 3 == 0 && $i % 5 == 0 ) {
    echo "Hackademy";
}elseif ($i % 3 == 0) {
    echo "Php"; 
}elseif ($i % 5 == 0) {
    echo "Javascript";
}else{
    echo $i;
}

echo "\n";

};