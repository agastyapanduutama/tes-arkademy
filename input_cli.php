
<?php

error_reporting(0);

echo "silakan masukan bilangan ganjil : ";
$ukuran = fopen("php://stdin","r");

$bil = fgets($ukuran);

if ($bil % 2 != 0 ) {
     
      for($a=1; $a<=$bil; $a++){
		for($b=1; $b<=$bil; $b++){
			if(($a==1) || ($a==$bil)){
				echo "* ";
			} else{
				echo "- ";
			}
		}
		echo "\n";
	}
      
}else{
	 echo "Nilai yang dimasukan harus ganjil";
    
}

?>

