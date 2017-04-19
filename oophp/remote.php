<?php
class remote
	{
		public $model;
		public $volume;
		
		function ModelandVolume($a,$b)
			{
				$this->Model=$a;
				$this->Volume=$b;
			}
			
		function VolumeUp()
			{
				$this->Volume++;
			}
				
		function VolumeDown()
				
			{
					$this->Volume--;
					
			}
				
		function get_model()
				
			{
					return $this->Model;
			}
				
		function get_volume()
				
			{
					return $this->Volume;
			}
	}
		$remoteobj=new remote;
		$remoteobj->ModelandVolume('Videocon','10');
		echo "Model = ". $remoteobj->get_Model();
		echo"<br>";
		echo  "Volume = ". $remoteobj->get_volume();
		
		$remoteobj->Volumeup();
		echo"<br>";
		echo  "  increased volume = ". $remoteobj->get_volume();
	?>