<?php
header('Access-Control-Allow-Origin: *');

date_default_timezone_set('UTC');
$working_dir = dirname(__FILE__);
header('Content-Type: application/json');

// $key = $_POST['key'];
// $hash = $_POST['hash'];

$dateHash = md5(date('Y-m-d'));

function execInBackground($cmd) {
    if (substr(php_uname(), 0, 7) == "Windows"){
        pclose(popen("start /B ". $cmd, "r"));
    }
    else {
        exec($cmd . " > /dev/null &"); 
    }
}

function get_extension($file) {
 $extension = end(explode(".", $file));
 return $extension ? $extension : false;
}

if($_POST['action'] == "applyMat"){	
    $imgPath = $_POST['imgPath'];
	$artworkSize = $_POST['imageSize'];	
	$pixelPerInch = $_POST['pixelPerInch'];
    $top_matColor = $_POST['top_matColor'];
    $middle_matColor = $_POST['middle_matColor'];
    $bottom_matColor = $_POST['bottom_matColor'];
	
	//top mat all sides
	$top_topWidth = $_POST['top_topMat'];
	$top_leftWidth = $_POST['top_leftMat'];
	$top_rightWidth = $_POST['top_rightMat'];
	$top_bottomWidth = $_POST['top_bottomMat'];
	
	//middle mat all sides
		$middle_topWidth = $_POST['middle_topMat'];
		$middle_leftWidth = $_POST['middle_leftMat'];
		$middle_rightWidth = $_POST['middle_rightMat'];
		$middle_bottomWidth = $_POST['middle_bottomMat'];
	
	//bottom mat all sides
		$bottom_topWidth = $_POST['bottom_topMat'];
		$bottom_leftWidth = $_POST['bottom_leftMat'];
		$bottom_rightWidth = $_POST['bottom_rightMat'];
		$bottom_bottomWidth = $_POST['bottom_bottomMat'];	
	
	$bewelSize = 0.0625;
		
    $matt_cmd1 = $matt_cmd2 = $matt_cmd3 = "";

    $data = file_get_contents($imgPath);
	$ex = explode('uploads/', $imgPath);	
    $base_path = $_SERVER['DOCUMENT_ROOT'].'/saya_frames';
	// var_dump($base_path);
	// exit();
	$inputFile_temp = $inputFile = $base_path."/uploads/".$ex[1];	
	// var_dump($inputFile_temp);
	// exit();
	//$outputFile = $base_path.'out_'.time().'_'.$ex[1];
	$outputFile = $base_path.'/uploads/out_'.time().'_'.$ex[1];
	// var_dump($ex[1]);
	// exit();
	$outputFileName = 'out_'.time().'_'.$ex[1];	
	file_put_contents($inputFile, $data);    			
		
	if($bottom_matColor != ""){		
		list($width, $height) = getimagesize($inputFile);
				
		$totalSize = (float) $artworkSize + ((float) $bottom_leftWidth + (float) $bottom_rightWidth );
		$newPixelsPerInch = $width / (float) $totalSize;
				
	    $totalSizeInHeight = (float) $artworkSize + ((float) $bottom_topWidth + (float) $bottom_bottomWidth );
		$newPixelsPerInchHeight = $height / (float) $totalSizeInHeight;
        
		$image_p = imagecreatetruecolor($width, $height);	
		$ratio_orig = $width/$height;		
						
		$newTopMatWidth = round((float) $bottom_topWidth * (float) $newPixelsPerInchHeight);
		$newLeftMatWidth = round((float) $bottom_leftWidth * (float) $newPixelsPerInch);
		$newRightMatWidth = round((float) $bottom_rightWidth * (float) $newPixelsPerInch);
		$newBottomMatWidth = round((float) $bottom_bottomWidth * (float) $newPixelsPerInchHeight);
		
		$new_width = $width - ($newLeftMatWidth + $newRightMatWidth);
		$new_height = $height - ($newTopMatWidth + $newBottomMatWidth);
				
		
		if ($new_width/$new_height > $ratio_orig) {
			$new_width = $new_height*$ratio_orig;
		} else {
			$new_height = $new_width/$ratio_orig;
		}
				
		$image_p = imagecreatetruecolor(round($new_width), round($new_height));
		$extension = mime_content_type($inputFile);		
		if($extension == "image/png"){
			$image = imagecreatefrompng($inputFile);	
		}
		if($extension == "image/jpg" || $extension == "image/jpeg"){
			$image = imagecreatefromjpeg($inputFile);	
		}	
		
		//adding bewel
		// $bewel_color = imagecolorallocate($image_p, 255, 255, 255);
		// imagefilledrectangle($image_p,0,0,$width + round($bewelSize * $newPixelsPerInch) ,$height + round($bewelSize * $newPixelsPerInch),$bewel_color);		
		
		// imagecopyresampled($image_p, $image, round(($bewelSize * $newPixelsPerInch) / 2), round(($bewelSize * $newPixelsPerInch) / 2), 0, 0, round($new_width - $bewelSize * $newPixelsPerInch), round($new_height - $bewelSize * $newPixelsPerInch), $width, $height);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width + 1, $new_height, $width, $height);
		imagejpeg($image_p, $outputFile, 100);
		
		exec("convert ".$outputFile."   "
		. "  -background white -splice 0x".round(($bewelSize * $newPixelsPerInch))."   " 
		. "  -background white -splice ".round(($bewelSize * $newPixelsPerInch))."x0   "   
		. "  -background white -gravity East -splice ".round(($bewelSize * $newPixelsPerInch))."x0   "
		. "  -background white -gravity South -splice 0x".round(($bewelSize * $newPixelsPerInch))."  ". $outputFile ." 2>&1", $err); 
		
		exec("convert ".$outputFile." -background '".$bottom_matColor."' -splice 0x".round(((float) $bottom_topWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1", $err);
		exec("convert ".$outputFile." -background '".$bottom_matColor."' -splice ".round(((float) $bottom_leftWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))."x0 ". $outputFile ." 2>&1", $err);    
		exec("convert ".$outputFile." -background '".$bottom_matColor."' -gravity East -splice ".round(((float) $bottom_rightWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))."x0 ". $outputFile ." 2>&1", $err);    
		exec("convert ".$outputFile." -background '".$bottom_matColor."' -gravity South -splice 0x".round(((float) $bottom_bottomWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1", $err);    			
		$inputFile = $outputFile;		
	}
	
	if($middle_matColor != ""){				
		list($width, $height) = getimagesize($inputFile);	
		$totalSize = (float) $artworkSize + ((float) $middle_leftWidth + (float) $middle_rightWidth)  + ((float) $bottom_leftWidth + (float) $bottom_rightWidth );
		$newPixelsPerInch = $width / (float) $totalSize;
		
		$totalSizeInHeight = (float) $artworkSize + ((float) $middle_topWidth + (float) $middle_bottomWidth )+ ((float) $bottom_topWidth + (float) $bottom_bottomWidth );
		$newPixelsPerInchHeight = $height / (float) $totalSizeInHeight;
        
		$ratio_orig = $width/$height;		
						
		$newTopMatWidth = round((float) $middle_topWidth * (float) $newPixelsPerInchHeight);
		$newLeftMatWidth = round((float) $middle_leftWidth * (float) $newPixelsPerInch);
		$newRightMatWidth = round((float) $middle_rightWidth * (float) $newPixelsPerInch);
		$newBottomMatWidth = round((float) $middle_bottomWidth * (float) $newPixelsPerInchHeight);
		
		$new_width = $width - ($newLeftMatWidth + $newRightMatWidth);
		$new_height = $height - ($newTopMatWidth + $newBottomMatWidth);
		
		if ($new_width/$new_height > $ratio_orig) {
			$new_width = $new_height*$ratio_orig;
		} else {
			$new_height = $new_width/$ratio_orig;
		}
				
		$image_p = imagecreatetruecolor(round($new_width), round($new_height));
		$extension = mime_content_type($inputFile);		
		if($extension == "image/png"){
			$image = imagecreatefrompng($inputFile);	
		}
		if($extension == "image/jpg" || $extension == "image/jpeg"){
			$image = imagecreatefromjpeg($inputFile);	
		}	
		//adding bewel
		// $bewel_color = imagecolorallocate($image_p, 255, 255, 255);
		// imagefilledrectangle($image_p,0,0,$width + round($bewelSize * $newPixelsPerInch) ,$height + round($bewelSize * $newPixelsPerInch),$bewel_color);		
		
		//imagecopyresampled($image_p, $image, round(($bewelSize * $newPixelsPerInch) / 2), round(($bewelSize * $newPixelsPerInch) / 2), 0, 0, round($new_width - $bewelSize * $newPixelsPerInch), round($new_height - $bewelSize * $newPixelsPerInch), $width, $height);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width + 1, $new_height, $width, $height);
		imagejpeg($image_p, $outputFile, 100);
		
		exec("convert ".$outputFile."   "
		. "  -background white -splice 0x".round(($bewelSize * $newPixelsPerInch))."   " 
		. "  -background white -splice ".round(($bewelSize * $newPixelsPerInch))."x0   "   
		. "  -background white -gravity East -splice ".round(($bewelSize * $newPixelsPerInch))."x0   "
		. "  -background white -gravity South -splice 0x".round(($bewelSize * $newPixelsPerInch))."  ". $outputFile ." 2>&1", $err); 
		
		exec("convert ".$outputFile." -background '".$middle_matColor."' -splice 0x".round(((float) $middle_topWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1", $err);
		exec("convert ".$outputFile." -background '".$middle_matColor."' -splice ".round(((float) $middle_leftWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))."x0 ". $outputFile ." 2>&1", $err);    
		exec("convert ".$outputFile." -background '".$middle_matColor."' -gravity East -splice ".round(((float) $middle_rightWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))."x0 ". $outputFile ." 2>&1", $err);    
		exec("convert ".$outputFile." -background '".$middle_matColor."' -gravity South -splice 0x".round(((float) $middle_bottomWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1", $err);    			
		$inputFile = $outputFile;
	}
	
	if($top_matColor != ""){		
		list($width, $height) = getimagesize($inputFile);			
		if($middle_matColor != "" && $bottom_matColor != ""){
			$totalSize = (float) $artworkSize + ((float) $top_leftWidth + (float) $top_rightWidth ) + ((float) $middle_leftWidth + (float) $middle_rightWidth ) + ((float) $bottom_leftWidth + (float) $bottom_rightWidth );
		}else if($middle_matColor != ""){
			$totalSize = (float) $artworkSize + ((float) $top_leftWidth + (float) $top_rightWidth ) + ((float) $middle_leftWidth + (float) $middle_rightWidth );
		}else if($bottom_matColor != ""){
			$totalSize = (float) $artworkSize + ((float) $top_leftWidth + (float) $top_rightWidth ) + ((float) $bottom_leftWidth + (float) $bottom_rightWidth );
		}else{
			$totalSize = (float) $artworkSize + ((float) $top_leftWidth + (float) $top_rightWidth );
		}
		$newPixelsPerInch = $width / (float) $totalSize;
		
		if($middle_matColor != "" && $bottom_matColor != ""){
			$totalSizeInHeight = (float) $artworkSize + ((float) $top_topWidth + (float) $top_bottomWidth ) + ((float) $middle_topWidth + (float) $middle_bottomWidth ) + ((float) $bottom_topWidth + (float) $bottom_bottomWidth );
		}else if($middle_matColor != ""){
			$totalSizeInHeight = (float) $artworkSize + ((float) $top_topWidth + (float) $top_bottomWidth ) + ((float) $middle_topWidth + (float) $middle_bottomWidth );
		}else if($bottom_matColor != ""){
			$totalSizeInHeight = (float) $artworkSize + ((float) $top_topWidth + (float) $top_bottomWidth ) + ((float) $bottom_topWidth + (float) $bottom_bottomWidth );
		}else{
			$totalSizeInHeight = (float) $artworkSize + ((float) $top_topWidth + (float) $top_bottomWidth );
		}
		$newPixelsPerInchHeight = $height / (float) $totalSizeInHeight;
        
		$ratio_orig = $width/$height;		
						
		$newTopMatWidth = round((float) $top_topWidth * (float) $newPixelsPerInchHeight);
		$newLeftMatWidth = round((float) $top_leftWidth * (float) $newPixelsPerInch);
		$newRightMatWidth = round((float) $top_rightWidth * (float) $newPixelsPerInch);
		$newBottomMatWidth = round((float) $top_bottomWidth * (float) $newPixelsPerInchHeight);
		
		$new_width = $width - ($newLeftMatWidth + $newRightMatWidth);
		$new_height = $height - ($newTopMatWidth + $newBottomMatWidth);
		
		if ($new_width/$new_height > $ratio_orig) {
			$new_width = $new_height*$ratio_orig;
		} else {
			$new_height = $new_width/$ratio_orig;
		}
								
		$image_p = imagecreatetruecolor(round($new_width), round($new_height));		
   		$extension = mime_content_type($inputFile);		
		if($extension == "image/png"){
			$image = imagecreatefrompng($inputFile);	
		}
		if($extension == "image/jpg" || $extension == "image/jpeg"){
			$image = imagecreatefromjpeg($inputFile);	
		}	
		
		//adding bewel		
		//$bewel_color = imagecolorallocate($image_p, 255, 255, 255);
		// imagefilledrectangle($image_p,0,0,$width + ceil($bewelSize * $newPixelsPerInch) ,$height + ceil($bewelSize * $newPixelsPerInchHeight),$bewel_color);		
		
		//imagecopyresampled($image_p, $image, ceil(($bewelSize * $newPixelsPerInch) / 2), ceil(($bewelSize * $newPixelsPerInch) / 2 - 0.426), 0, 0, $new_width - ceil($bewelSize * $newPixelsPerInch), $new_height - ceil($bewelSize * $newPixelsPerInch), $width, $height);
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width + 1, $new_height, $width, $height);
		imagejpeg($image_p, $outputFile, 100);
		
		exec("convert ".$outputFile."  "
		. "  -background white -splice 0x".round(($bewelSize * $newPixelsPerInch))."   " 
		. "  -background white -splice ".round(($bewelSize * $newPixelsPerInch))."x0   "   
		. "  -background white -gravity East -splice ".round(($bewelSize * $newPixelsPerInch))."x0   "
		. "  -background white -gravity South -splice 0x".round(($bewelSize * $newPixelsPerInch))."  ". $outputFile ." 2>&1", $err); 
				
		exec("convert ".$outputFile." -background '".$top_matColor."' -splice 0x".round(((float) $top_topWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1", $err);
		exec("convert ".$outputFile." -background '".$top_matColor."' -splice ".round(((float) $top_leftWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))."x0 ". $outputFile ." 2>&1", $err);    
		exec("convert ".$outputFile." -background '".$top_matColor."' -gravity East -splice ".round(((float) $top_rightWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))."x0 ". $outputFile ." 2>&1", $err);   
		echo "convert ".$outputFile." -background '".$top_matColor."' -gravity South -splice 0x".round(((float) $top_bottomWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1"; 
		exec("convert ".$outputFile." -background '".$top_matColor."' -gravity South -splice 0x".round(((float) $top_bottomWidth * (float) $newPixelsPerInch) - ($bewelSize * $newPixelsPerInch))." ". $outputFile ." 2>&1", $err);    					
		$inputFile = $outputFile;
	}	
	list($width, $height) = getimagesize($outputFile);		
	// var_dump($outputFile);
	// exit();			    
    $array = array("status" => "OK" ,"width" => $width, "height" => $height, "new_width" => $new_width, "new_height" => $new_height, "error" => $err, "New Pixels Per Inch" => $newPixelsPerInch ,"msg" => "http://" . $_SERVER['SERVER_NAME'] .'/'. 'saya_frames/uploads/' .$outputFileName);
	// var_dump(json_encode($array));
	// exit();	
    echo json_encode($array);
    exit;
}

if($_POST['action'] == "applyFrame"){
	
	$artworkSize = $_POST['imageSize'];		
	$imgPath = $_POST['imgPath'];	
	$outer_frame_image = $_POST['outerFrameImage'];    
	$middle_frame_image = $_POST['middleFrameImage'];    
	$inner_frame_image = $_POST['innerFrameImage'];    
    $outer_frame = $_POST['outer_frame'];
    $middle_frame = $_POST['middle_frame'];
    $inner_frame = $_POST['inner_frame'];
	
	$outer_frame_size = $_POST['outerFrameSize'];	
	$middle_frame_size = $_POST['middleFrameSize'];	
	$inner_frame_size = $_POST['innerFrameSize'];	
	$matt_cmd1 = $matt_cmd2 = $matt_cmd3 = "";    
	
	//top mat all sides
	$top_topWidth = $_POST['top_topMat'];
	$top_leftWidth = $_POST['top_leftMat'];
	$top_rightWidth = $_POST['top_rightMat'];
	$top_bottomWidth = $_POST['top_bottomMat'];
	
	//middle mat all sides
	$middle_topWidth = $_POST['middle_topMat'];
	$middle_leftWidth = $_POST['middle_leftMat'];
	$middle_rightWidth = $_POST['middle_rightMat'];
	$middle_bottomWidth = $_POST['middle_bottomMat'];
	
	//bottom mat all sides
	$bottom_topWidth = $_POST['bottom_topMat'];
	$bottom_leftWidth = $_POST['bottom_leftMat'];
	$bottom_rightWidth = $_POST['bottom_rightMat'];
	$bottom_bottomWidth = $_POST['bottom_bottomMat'];
		
    $data = file_get_contents($imgPath);
	$ex = explode('uploads/', $imgPath);	
	$base_path = $_SERVER['DOCUMENT_ROOT'].'/';	
	$inputFile_temp = $inputFile = $base_path."/".$ex[1];	

	//$outputFile = $base_path.'out_'.time().'_'.$ex[1];
	$outputFile = $base_path.'/uploads/out_'.time().'_'.$ex[1];	
	$outputFileName = 'out_'.time().'_'.$ex[1];	
	file_put_contents($inputFile, $data);  
	
	//path for saving resized frame
	$outputPath = $base_path.'/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/';
	$outputFrameName = 'frame_'.time();
	

    if($inner_frame!=""){						
        list($width, $height) = getimagesize($inputFile);		
		list($frameImageWidth, $frameImageHeight) = getimagesize($outputPath.$inner_frame_image);
		
		//calcaulating the total size: artwork + frame Size
		$totalSize = (float) $artworkSize + (float) $inner_frame_size + (float) $top_leftWidth + (float) $top_rightWidth + (float) $middle_leftWidth + (float) $middle_rightWidth + (float) $bottom_leftWidth + (float) $bottom_rightWidth;	
		
		//calculating the number of pixels after including frame size
		$newPixelsPerInch = 500 / (float) $totalSize;				
			
		//frame height in pixels
		$frameHeightInPixels =  (float) $inner_frame_size * $newPixelsPerInch;
		$ratio_orig = $width/$height;
		
		//getting new width and height for the frame image
		$newFrameImageWidth = $frameImageWidth;
		$newFrameImageHeight = $frameHeightInPixels;
		
		$new_width = 500 - $frameHeightInPixels;
		$new_height = $height ;
		
		if ($new_width/$new_height > $ratio_orig) {
			$new_height = $new_width/$ratio_orig;
		} else {
			$new_height = $new_width/$ratio_orig;
		}
				
		$image_p = imagecreatetruecolor(round($new_width), round($new_height));		
   		$extension = mime_content_type($inputFile);		
		if($extension == "image/png"){
			$image = imagecreatefrompng($inputFile);	
		}
		if($extension == "image/jpg" || $extension == "image/jpeg"){
			$image = imagecreatefromjpeg($inputFile);	
		}	
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p, $outputFile, 100);
			
		//creating the image
		$image_frame_p = imagecreatetruecolor(round($newFrameImageWidth), round($newFrameImageHeight));		
   		$inner_frame_image_extension = mime_content_type($outputPath.$inner_frame_image);		
		if($inner_frame_image_extension == "image/png"){
			$new_frame_image = imagecreatefrompng($outputPath.$inner_frame_image);	
		}
		if($inner_frame_image_extension == "image/jpg" || $inner_frame_image_extension == "image/jpeg"){
			$new_frame_image = imagecreatefromjpeg($outputPath.$inner_frame_image);	
		}	
		imagecopyresampled($image_frame_p, $new_frame_image, 0, 0, 0, 0, $newFrameImageWidth, $newFrameImageHeight, $frameImageWidth, $frameImageHeight);
		imagejpeg($image_frame_p, $outputPath.$outputFrameName."_top.jpg", 100);						
		$rotate = imagerotate($image_frame_p, 180, 0);
		imagejpeg($rotate, $outputPath.$outputFrameName."_btm.jpg", 100);						
		
		exec('./frame_edges.sh '.$outputFrameName.' ' . $outputFile .' '. $outputFile);		
		unlink($outputPath.$outputFrameName."_top.jpg");
		unlink($outputPath.$outputFrameName."_btm.jpg");
        $inputFile=$outputFile;        
    }

    if($middle_frame!=""){		
        list($width, $height) = getimagesize($inputFile);		
		list($frameImageWidth, $frameImageHeight) = getimagesize($outputPath.$middle_frame_image);
		
		//calcaulating the total size: artwork + frame Size
		$totalSize = (float) $artworkSize + (float) $middle_frame_size +(float) $inner_frame_size + (float) $top_leftWidth + (float) $top_rightWidth + (float) $middle_leftWidth + (float) $middle_rightWidth + (float) $bottom_leftWidth + (float) $bottom_rightWidth;	
		
		//calculating the number of pixels after including frame size
		$newPixelsPerInch = 500 / (float) $totalSize;					
			
		//frame height in pixels
		$frameHeightInPixels =  (float) $middle_frame_size * $newPixelsPerInch;
		$ratio_orig = $width/$height;
		
		//getting new width and height for the frame image
		$newFrameImageWidth = $frameImageWidth;
		$newFrameImageHeight = $frameHeightInPixels;
		
		$new_width = $width - $frameHeightInPixels;
		$new_height = $height;
		
		if ($new_width/$new_height > $ratio_orig) {
			$new_height = $new_width/$ratio_orig;
		} else {
			$new_height = $new_width/$ratio_orig;
		}
				
		$image_p = imagecreatetruecolor(round($new_width), round($new_height));		
   		$extension = mime_content_type($inputFile);		
		if($extension == "image/png"){
			$image = imagecreatefrompng($inputFile);	
		}
		if($extension == "image/jpg" || $extension == "image/jpeg"){
			$image = imagecreatefromjpeg($inputFile);	
		}	
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p, $outputFile, 100);
			
		//creating the image
		$image_frame_p = imagecreatetruecolor(round($newFrameImageWidth), round($newFrameImageHeight)); 		
   		$middle_frame_image_extension = mime_content_type($outputPath.$middle_frame_image);		
		if($middle_frame_image_extension == "image/png"){
			$new_frame_image = imagecreatefrompng($outputPath.$middle_frame_image);	
		}
		if($middle_frame_image_extension == "image/jpg" || $middle_frame_image_extension == "image/jpeg"){
			$new_frame_image = imagecreatefromjpeg($outputPath.$middle_frame_image);	
		}	
		imagecopyresampled($image_frame_p, $new_frame_image, 0, 0, 0, 0, $newFrameImageWidth, $newFrameImageHeight, $frameImageWidth, $frameImageHeight);
		imagejpeg($image_frame_p, $outputPath.$outputFrameName."_top.jpg", 100);						
		$rotate = imagerotate($image_frame_p, 180, 0);
		imagejpeg($rotate, $outputPath.$outputFrameName."_btm.jpg", 100);						
		exec('./frame_edges.sh '.$outputFrameName .' '. $outputFile .' '. $outputFile);		
		unlink($outputPath.$outputFrameName."_top.jpg");
		unlink($outputPath.$outputFrameName."_btm.jpg");
        $inputFile=$outputFile;        
    }

    if($outer_frame!=""){
		list($width, $height) = getimagesize($inputFile);		
		list($frameImageWidth, $frameImageHeight) = getimagesize($outputPath.$outer_frame_image);
		
		//calcaulating the total size: artwork + frame Size
		$totalSize = (float) $artworkSize + (float) $outer_frame_size + (float) $middle_frame_size * 2 + (float) $inner_frame_size * 2 + (float) $top_leftWidth + (float) $top_rightWidth + (float) $middle_leftWidth + (float) $middle_rightWidth + (float) $bottom_leftWidth + (float) $bottom_rightWidth;	
		
		//calculating the number of pixels after including frame size
		$newPixelsPerInch = 500 / (float) $totalSize;				
			
		//frame height in pixels
		$frameHeightInPixels =  (float) $outer_frame_size * $newPixelsPerInch;
		$ratio_orig = $width/$height;
		
		//getting new width and height for the frame image
		$newFrameImageWidth = $frameImageWidth;
		$newFrameImageHeight = $frameHeightInPixels;
		
		$new_width = 500 - $frameHeightInPixels;
		$new_height = $height;
		
		if ($new_width/$new_height > $ratio_orig) {
			$new_height = $new_width/$ratio_orig;
		} else {
			$new_height = $new_width/$ratio_orig;
		}
				
		$image_p = imagecreatetruecolor(round($new_width), round($new_height));		
   		$extension = mime_content_type($inputFile);		
		if($extension == "image/png"){
			$image = imagecreatefrompng($inputFile);	
		}
		if($extension == "image/jpg" || $extension == "image/jpeg"){
			$image = imagecreatefromjpeg($inputFile);	
		}	
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
		imagejpeg($image_p, $outputFile, 100);
			
		//creating the image
		$image_frame_p = imagecreatetruecolor(round($newFrameImageWidth), round($newFrameImageHeight));		
   		$outer_frame_image_extension = mime_content_type($outputPath.$outer_frame_image);		
		if($outer_frame_image_extension == "image/png"){
			$new_frame_image = imagecreatefrompng($outputPath.$outer_frame_image);	
		}
		if($outer_frame_image_extension == "image/jpg" || $outer_frame_image_extension == "image/jpeg"){
			$new_frame_image = imagecreatefromjpeg($outputPath.$outer_frame_image);	
		}	
		imagecopyresampled($image_frame_p, $new_frame_image, 0, 0, 0, 0, $newFrameImageWidth, $newFrameImageHeight, $frameImageWidth, $frameImageHeight);
		imagejpeg($image_frame_p, $outputPath.$outputFrameName."_top.jpg", 100);						
		$rotate = imagerotate($image_frame_p, 180, 0);
		imagejpeg($rotate, $outputPath.$outputFrameName."_btm.jpg", 100);							
		exec('./frame_edges.sh '. $outputFrameName .' ' . $outputFile .' '. $outputFile . ' 2>&1', $err);			
		unlink($outputPath.$outputFrameName."_top.jpg");
		unlink($outputPath.$outputFrameName."_btm.jpg");
        $inputFile=$outputFile; 
    }
	list($width, $height) = getimagesize($outputFile);
    unlink($inputFile_temp);
    $array = array("status" => "OK","width"=> $width, "height" => $height, "output" => $totalSize, "msg" => "http://" . $_SERVER['SERVER_NAME'] . "/uploads/" .$outputFileName);
    echo json_encode($array);
    exit;
}
