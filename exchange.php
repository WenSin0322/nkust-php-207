<?php
	$rate =array(28.3,3.5,36.7) ;
  	$country =array("美金","港幣","英鎊") ;

	$ntd =30000 ;

	$data =array(50000,30000,45000,80000,120000);
	for ($j=0 ;$j < count($rate);$j+=1){
		for ($i=0 ; $i <count($data);$i+=1){
			echo "<h1>新台幣" . $data[$i] ."元換算成". $country[$j] ."是" . round(( $data[$i] / $rate[$j] ),2) ."元</h1>" ;
		
		}

	}
		
	
	


?>