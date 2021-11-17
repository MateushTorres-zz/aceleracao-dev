<?php
$folder = [];

for ($i=1; $i <= 150; $i++) { 
    if (is_dir("Pasta{$i}")) {
        if (sizeof(scandir("Pasta{$i}")) <= 2) {
            rmdir("Pasta{$i}");
            echo "Pasta{$i} excluída<br>"; }
        else{
            $arq = scandir("Pasta{$i}");
            array_splice($arq, 0, 2);
            $folder["Pasta{$i}"] = $arq;
        }
    }
}
echo "<br>";
print_r($folder);
echo "<br>";
?>