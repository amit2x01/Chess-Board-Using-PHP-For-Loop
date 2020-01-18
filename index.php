<style type="text/css" media="screen">
	*{margin: 0;padding: 0;box-sizing: border-box;}
	body{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.square{
		box-sizing: border-box;
		width: 50px;
		display: inline-block;
		height: 50px;
		border:2px solid #232222;
		margin: 0;padding: 0;
	}
	.sq-black{
		background-color:#2a2a2a;
	}
</style>

<div class="chess">
<?php 



for ($i=0; $i < 8; $i++) { 

	if($i % 2 != 0){
		for ($j=0; $j < 8; $j++) { 

			if($j % 2 == 0){
				echo  '<div class="square sq-black"></div>';
			}else{
				echo  '<div class="square"></div>';
			}
		
		}	
	}else{
		for ($j=0; $j < 8; $j++) { 
			
			if($j % 2 == 0){
				echo  '<div class="square"></div>';
			}else{
				echo  '<div class="square sq-black"></div>';
			}

		}
	}

	echo '<br>';
	
}










 ?>



</div>
