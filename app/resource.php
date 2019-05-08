<?php 
class Resource 
{	
	public function isFolder($dir, $entry)
	{
		$pattern = "/css/";;
		$pattern1 = "/fonts/";
		$pattern2 = "/image/";
		$pattern3 = "/js/";
		$pattern4 = "/less/";
		$pattern5 = "/libs/";

		if (preg_match($pattern, $entry)) {
			echo '<li><i style="color: #35fc42;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		else if (preg_match($pattern1, $entry)) {
			echo '<li><i style="color: #35fc42;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		else if (preg_match($pattern2, $entry)) {
			echo '<li><i style="color: #35fc42;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		else if (preg_match($pattern3, $entry)) {
			echo '<li><i style="color: #35fc42;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		else if (preg_match($pattern4, $entry)) {
			echo '<li><i style="color: #35fc42;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		else if (preg_match($pattern5, $entry)) {
			echo '<li><i style="color: #35fc42;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		else {
			echo '<li><i style="color: red;" class="fa fa-folder-open" aria-hidden="true"></i> '.$entry.'</li>';
		}
		
		echo '<ul>';
		if($handle = opendir($dir))
		{
			while ($entry2 = readdir($handle)) {
				if(!in_array($entry2, array(".",".."))){
					$dir2 = $dir. '/' .$entry2;

					if(is_dir($dir2))
					{
						
						$this->isFolder($dir2,$entry2);
					}
					else
					{
                                                        $pattern = "/[0-9]+\.css/";
							$pattern1 = "/[0-9]+\.js/";
							$pattern2 = "/[0-9]+\.less/";
							$pattern3 = "/bootstrap.min.css/";
							$pattern4 = "/font-awesome.min.css/";
							$pattern5 = "/bootstrap.js/";
							$pattern6 = "/bootstrap.min.js/";
							$pattern7 = "/jquery.js/";
							$pattern8 = "/lessc.inc.php/";
							$pattern9 = "/lessc.php/";

							if(preg_match($pattern, $dir2))
							{
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';
							}
							else if(preg_match($pattern1, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}
							else if(preg_match($pattern2, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}
							else if(preg_match($pattern3, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}	
							else if(preg_match($pattern4, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}
							else if(preg_match($pattern5, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}	
							else if(preg_match($pattern6, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}
							else if(preg_match($pattern7, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}	
							else if(preg_match($pattern8, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}
							else if(preg_match($pattern9, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';

							}					
							else {
								echo '<li style="color: red;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry2.'</li>';
							}
					}

				}
			}
		}
		closedir($handle);
		echo '</ul>';
	}
	public function dirToArray($dir) {
		$filelist = array();
		try{
			if($handle = opendir($dir)) 
			{

				while($entry = readdir($handle))
				{

					if(!in_array($entry,array(".","..")))
					{

						
						$dir2 = $dir.'/'.$entry;
						if(is_dir($dir2))
						{
							
							$this->isFolder($dir2, $entry);

						}
						else
						{
							$pattern = "/[0-9]+\.php/";
							$pattern1 = "/[0-9]+\-content.php/";
							$pattern2 = "/[0-9]+\-screenshot.png/";
							if(preg_match($pattern, $dir2))
							{
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry.'</li>';
							}
							else if(preg_match($pattern1, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry.'</li>';

							}
							else if(preg_match($pattern2, $dir2)) {
								echo '<li style="color: #35fc42;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry.'</li>';

							}		
							else {
								echo '<li style="color: red;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry.'</li>';
							}
						}

					}
				}
			}
			closedir($handle);		
		}catch(Exception $e)
		{
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
		return null;

	}
	// public function checkFolder($dir) {
	// 	if($handle = opendir($dir)){
	// 		while($entry = readdir($handle)){
	// 			if(!in_array($entry,array(".",".."))){


	// 				$dir2 = $dir.'/'.$entry;
	// 				$pattern = "/[0-9]+\.php/";
	// 				if(preg_match($pattern, $dir2))
	// 				{
	// 					echo '<li style="color: green;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry.'</li>';
	// 				}
	// 				else {
	// 					echo '<li style="color: red;"><i class="fa fa-file" aria-hidden="true"></i> '.$entry.'</li>';
	// 				}

	// 			}
	// 		}
	// 	}

	// 	closedir($handle);
	// }
}