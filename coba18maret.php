<!-- <?php 	
	for($a = 1; $a < 10; $a++){
		if ($a % 2 != 0) {
            if ($a != 5) {
            echo $a;
        }
    } 
        $a++;
	}
?> -->

<?php 
    $x = $_POST['nilai'];
	for($i=1; $i<=$x; $i++){
        for($j=$i; $j>=1; $j--){
            echo "*";
        }
        echo "<br>";
    }
?>