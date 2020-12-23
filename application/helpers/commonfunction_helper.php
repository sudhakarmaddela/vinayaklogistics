<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 /*if ( ! function_exists('isLoggedinCondition'))
{
	function isLoggedinCondition() 
	{ 
		
		$CI =& get_instance();
		if($CI->session->userdata('logged_user_in') == FALSE) {
			redirect('/');
			break;
		}
	}
}*/

/**
 * @function		GetAllCommon
 *
 * Short desc
 *
 * For fetching data from table and returns an array.
 *
 * @access			public
 * @param			string-$tableName , string-$strData (Option Parameter)
 * @return			array
 *	
 * @copyright		Copyright (c) 2015
 * @since			Version 1.0
**/
if ( ! function_exists('GetAllCommon'))
{
	function GetAllCommon($tableName , $strData='' , $orderByField='', $orderBySort='')
	{
		$CI =& get_instance();
		
		if ($strData != '')
			$CI->db->select( $strData );
		
		if($orderByField!='')
			if($orderBySort=='')
				$CI->db->order_by($orderByField, "ASC"); 
			else
				$CI->db->order_by($orderByField, $orderBySort); 
		
		$query = $CI->db->get( $tableName );
		//echo $CI->db->last_query();
		
		return $query->result_array();
	}
}


/**
 * @function		GetAllCommonWithWhere
 *
 * Short desc
 *
 * For fetching data from table with where condition and returns an array.
 *
 * @access			public
 * @param			string-$tableName , string-$where string-$strData (Option Parameter)
 * @return			array
 *	
 * @author			Rima mehta 
 * @copyright		Copyright (c) 2015
 * @since			Version 1.0
**/
if ( ! function_exists('GetAllCommonWithWhere'))
{
	function GetAllCommonWithWhere($tableName , $where , $strData='', $orderByField='', $orderBySort='')
	{
		$CI =& get_instance();
		
		$CI->db->where( $where );
		
		if ($strData != '')
			$CI->db->select( $strData );

		if($orderBySort == '')
			$orderBySort ='ASC';

		if($orderByField!='')
		{
			if( strpos($orderByField, ',') === false)
			{
				if (is_numeric($orderByField))
					$CI->db->order_by($orderByField, $orderBySort); 
				else
					$CI->db->order_by("UPPER(".$orderByField.")", $orderBySort); 
			}
			else
			{
				// when it comes here, it meas $orderByField has comma seperated fields
				$CI->db->order_by($orderByField, $orderBySort); 
			}
		}
		
		$query = $CI->db->get( $tableName );
		//echo $CI->db->last_query();die;
		//return $query->result (); // This will return object
		return $query->result_array();
	}
}

/**
 * @function		GetAutoIncrementCommon 
 *
 * Short desc
 *
 * This is used to get autoincrement value
 *
 * @access			public
 * @param			string-$sequealName
 * @return			int
 *	
 * @author			Rima mehta 
 * @copyright		Copyright (c) 2012, Web Werks India Pvt Ltd
 * @since			Version 1.0
**/
if ( ! function_exists('GetAutoIncrementCommon'))
{
	function GetAutoIncrementCommon($sequealName)
	{	
		$CI =& get_instance();
		
		$conn = oci_connect($CI->config->item('dbuser'), $CI->config->item('dbpassword'), $CI->config->item('dbhost').'/'.$CI->config->item('dbname'));
		$query = "SELECT $sequealName.nextval from dual"; 
		
		$stid = oci_parse($conn, $query);
		$r = oci_execute($stid, OCI_DEFAULT);
		
		while ($row = oci_fetch_row($stid)) {
		  foreach($row as $autoId) {
			  //this adds autoincremented id from sequence
			  $incrementId = $autoId;
		  }
		}
		oci_close($conn); 
		return $incrementId;
	}
}

	/**
	 * GetKeyValueArrayCommon
	 *
	 * This is used to get array in Key value Form
	 *
	 * @author	Rima Mehta
	 * @access	public
	 * @param   void
	 * @return  array
	 */
	 if ( ! function_exists('GetKeyValueArrayCommon'))
	{
		function GetKeyValueArrayCommon($arrData, $keyFieldName, $valueFieldname, $firstBlank='') {
			
			$data = array();

			if($firstBlank!='')
				$data[''] = "--- $firstBlank ---";

			if($arrData)
			{
				for($i=0; $i<count($arrData);$i++)
					$data[$arrData[$i][$keyFieldName]] = $arrData[$i][$valueFieldname];
			}
			
			return $data;
		}
	}

	/**
	* createPlayingImage
	*
	* This help to create images for surface and lines
	* 
	* @author	Rima Mehta
	* @access	public
	* @return	void
	*/
	function createPlayingImage($arrSurface, $arrLines, $showText = 'N', $showNumberOfGrid = 'N'){
		
		$CI =& get_instance();

		$CI->load->model('colours_model');
		$sportId	= $CI->session->userdata('my_sport_id');
		
		// we will create playing surface images here
		
		list($usec, $sec) = explode(" ", microtime());
		$now = ((float)$usec + (float)$sec);
		
		$img_width	= 800;
		$img_height = 400;
		$constant	= 40; // as we are leaving come space on all side of rectangle.
		$xydistance = 20;
		$maxX = 50; // maximum X- axis
		$maxY = 25; // maximum Y- axis
	
		$yDistance = $img_height / $maxX;
		$xDistance = $img_width / $maxY;

		
		$img_path	= './public/upload/fieldimage/';
		$img_url	= base_url().'public/upload/fieldimage/';
		

		// PHP.net recommends imagecreatetruecolor(), but it isn't always available
		if (function_exists('imagecreatetruecolor'))
		{
			$im = imagecreatetruecolor($img_width+100, $img_height+100);
		}
		else
		{
			$im = imagecreate($img_width+100, $img_height+100);
		}
	
		
		// allocating colours here.
		$arrColour	= $CI->colours_model->get_colour_details();
		$colourCode = array();
		for($c=0;$c<count($arrColour);$c++){
			$colourCode[$arrColour[$c]['colour_id']] = imagecolorallocate($im, $arrColour[$c]['colour_red'], $arrColour[$c]['colour_green'], $arrColour[$c]['colour_blue']);
		}
		///$arrData['arrColour'] = $arrColour;
		
		$bg_color		= imagecolorallocate ($im, 255, 255, 255);
		$border_color	= imagecolorallocate ($im, 153, 102, 102);
		$black			= imagecolorallocate($im, 0, 0, 0);
		$gridColor		= imagecolorallocate($im, 201, 202, 206);
		$red			= imagecolorallocate($im, 255, 0, 0);
		
		//  Create the rectangle
		ImageFilledRectangle($im, 0, 0, $img_width+100, $img_height+100, $bg_color);
		
		
		/*$surfaceColour = $colourCode[$arrSurface[0]['surface_colour_id']];
		if($arrSurface[0]['surface_type'] == 'Rectangular')
		{			
			//  Create the border of retangle
			ImageFilledRectangle($im, $constant, $constant, $img_width+$constant, $img_height+$constant, $surfaceColour);
			imagerectangle($im, $constant, $constant, $img_width+$constant, $img_height+$constant, $surfaceColour);	
		}else{
			imageellipse ( $im , (20*$xydistance)+$constant , (10*$xydistance)+$constant , 40*$xydistance , 20*$xydistance , $surfaceColour );
			imagefilledellipse ( $im , (20*$xydistance)+$constant , (10*$xydistance)+$constant , 40*$xydistance , 20*$xydistance , $surfaceColour );
		}
		*/
		
		if($arrSurface[0]['surface_show_grid'] == 'Y'){
			callGrid($im, $xydistance, $constant, $img_width, $img_height, $gridColor, $red);
		}
		
		if($showText =='Y'){
			if($showNumberOfGrid == 'Y')
				imagestring($im, 5, 10*$xydistance, 23*$xydistance,  "X Axis", $black);
			else
				imagestring($im, 5, 20*$xydistance, 23*$xydistance,  "X Axis", $black);

			imagestringup($im, 5, 0, 14*$xydistance,  "Y Axis", $black);
		}

		if($showNumberOfGrid == 'Y'){
			imagestring($im, 5, 20*$xydistance, 23*$xydistance,  "Number of Grid squares", $black);
		}
		
		for($l=0;$l<count($arrLines);$l++){
			$colour = $colourCode[$arrLines[$l]['line_colour_id']];
			
			if($arrLines[$l]['line_type'] == 'Circle'){
				
				if($arrLines[$l]['line_filled_colour_id']){
					$filledColour = $colourCode[$arrLines[$l]['line_filled_colour_id']];
					
					imagefilledellipse ( $im , $constant+($arrLines[$l]['line_x_axis']*$xydistance) , $constant+($arrLines[$l]['line_y_axis']*$xydistance) , $arrLines[$l]['line_circle_width']*$xydistance  , $arrLines[$l]['line_circle_height']*$xydistance  , $filledColour );
					
					if($arrSurface[0]['surface_show_grid'] == 'Y'){
						callGrid($im, $xydistance, $constant, $img_width, $img_height, $gridColor, $red);
					}
				}

				imageellipse ( $im , ($arrLines[$l]['line_x_axis']*$xydistance)+$constant , ($arrLines[$l]['line_y_axis']*$xydistance)+$constant , $arrLines[$l]['line_circle_width']*$xydistance , $arrLines[$l]['line_circle_height']*$xydistance  , $colour );

			}else if($arrLines[$l]['line_type'] == 'Line'){
				
				createImageLine($im, $xydistance, $constant, $arrLines[$l]['line_x_axis'], $arrLines[$l]['line_y_axis'], $arrLines[$l]['line_x_axis_end'], $arrLines[$l]['line_y_axis_end'],$colour);

			}else if($arrLines[$l]['line_type'] == 'Rectangle'){
				
				if($arrLines[$l]['line_filled_colour_id']){
					$filledColour = $colourCode[$arrLines[$l]['line_filled_colour_id']];
					
					ImageFilledRectangle($im, $constant+($arrLines[$l]['line_x_axis']*$xydistance), $constant+($arrLines[$l]['line_y_axis']*$xydistance), $constant+($arrLines[$l]['line_x_axis_end']*$xydistance), $constant+($arrLines[$l]['line_y_axis_end']*$xydistance), $filledColour);

					if($arrSurface[0]['surface_show_grid'] == 'Y'){
						callGrid($im, $xydistance, $constant, $img_width, $img_height, $gridColor, $red);
					}
				}

				createrectangle($im, $xydistance, $constant, $arrLines[$l]['line_x_axis'], $arrLines[$l]['line_y_axis'], $arrLines[$l]['line_x_axis_end'], $arrLines[$l]['line_y_axis_end'], $colour);
			}else if($arrLines[$l]['line_type'] == 'Semi Circle'){

					imagearc($im, ($arrLines[$l]['line_x_axis']*$xydistance)+$constant, ($arrLines[$l]['line_y_axis']*$xydistance)+$constant, $arrLines[$l]['line_circle_width']*$xydistance , $arrLines[$l]['line_circle_height']*$xydistance, $arrLines[$l]['line_arc_start_degree'] , $arrLines[$l]['line_arc_end_degree'], $colour);
				
				// for netball
				/*if($sportId == 1){
					if($arrLines[$l]['line_x_axis'] == 0){
						imagearc($im, ($arrLines[$l]['line_x_axis']*$xydistance)+$constant, ($arrLines[$l]['line_y_axis']*$xydistance)+$constant, 170, 200, 270, 90, $colour); // left arc
					}else{
						imagearc($im, ($arrLines[$l]['line_x_axis']*$xydistance)+$constant, ($arrLines[$l]['line_y_axis']*$xydistance)+$constant, 170, 200, -270, -90, $colour); // right arc
					}
				}else if($sportId == 3){ // soccer
					if($arrLines[$l]['line_x_axis'] < ($constant/2)){
						imagearc($im, ($arrLines[$l]['line_x_axis']*$xydistance)+$constant, ($arrLines[$l]['line_y_axis']*$xydistance)+$constant, 50, 75, 270, 90, $colour); // left arc
					}else{
						imagearc($im, ($arrLines[$l]['line_x_axis']*$xydistance)+$constant, ($arrLines[$l]['line_y_axis']*$xydistance)+$constant, 50, 75, -270, -90, $colour); // right arc
					}
				} */
			}

		}
		
		$img_name = time().$arrSurface[0]['surface_id'].'.jpg';
		ImageJPEG($im, $img_path.$img_name);

		///return "<img src=\"$img_url$img_name\" width=\"$img_width\" height=\"$img_height\" style=\"border:0;\" alt=\" \" />";
		return "<img src=\"$img_url$img_name\" width=\"900\" height=\"$img_height\" style=\"border:0;\" alt=\" \" id=\"surfaceImg\" />";
		
	}
	
	/**
	* createImageLine
	*
	* This is supporting function for creating surface image
	* 
	* @author	Rima Mehta
	* @access	public
	* @return	void
	*/
	function createImageLine($im, $xydistance, $constant, $startX, $startY, $endX, $endY, $colour){
		imageline ( $im , ($startX*$xydistance)+$constant , ($startY*$xydistance)+$constant , ($endX*$xydistance)+$constant , ($endY*$xydistance)+$constant , $colour );
	}
	
	/**
	* callGrid
	*
	* This function helps to draw grid
	* 
	* @author	Rima Mehta
	* @access	public
	* @return	void
	*/
	function callGrid($im, $xydistance, $constant, $img_width, $img_height, $color, $textColor){
	
		$startheight	= $constant;
		$startwidth		= $constant;
		
		///for($i=0; $i<$maxX;$i++){
		for($i=0; $i<20;$i++){ // 25
			imagestring($im, 2, $constant-15, $startheight,  $i, $textColor);
			$startheight = ($startheight+$xydistance);
			imageline ( $im , $constant , $startheight , $img_width+$constant, $startheight , $color );
		}
		imagestring($im, 2, $constant-15, $startheight,  $i, $textColor);
		/* drawing verticle lines on rectangle ENDS HERE*/
	
		
		/* drawing horizontal lines on rectangle */
		// horizontal lines
		///for($i=0; $i<$maxY;$i++){
		for($i=0; $i<40;$i++){
			imagestring($im, 2, $startwidth, $img_height+$constant, $i, $textColor);
			$startwidth = $startwidth+$xydistance;
			imageline ( $im , $startwidth , $constant , $startwidth , $img_height+$constant , $color );
		}
		imagestring($im, 2, $startwidth, $img_height+$constant, $i, $textColor); // for last element
		/* drawing horizontal lines on rectangle ENDS HERE*/
		
	}

	function createrectangle($im, $xydistance, $constant, $xtop, $ytop, $xbottom, $ybottom, $color){
	
		imagerectangle($im, $constant+($xtop*$xydistance), $constant+($ytop*$xydistance), $constant+($xbottom*$xydistance), $constant+($ybottom*$xydistance), $color);
	}
	
	/**
	* watermark_image_top
	*
	* This help to draw stamp image on original image.
	* this will draw stamp on top right
	* 
	* @access	public
	* @return	void
	*/
	function watermark_image_top($target, $wtrmrk_file, $newcopy, $opacity = 50) {
		///	echo $target."<br/>".$wtrmrk_file;die;
		$ext = pathinfo($wtrmrk_file, PATHINFO_EXTENSION);
		if($ext == 'png')
			$watermark = imagecreatefrompng($wtrmrk_file);
		else if($ext == 'gif')
			$watermark = imagecreatefromgif($wtrmrk_file);
		else
			$watermark = imagecreatefromjpeg($wtrmrk_file);
		
		///imagealphablending($watermark, false);
		///imagesavealpha($watermark, true);

		$ext = pathinfo($target, PATHINFO_EXTENSION);
		if($ext == 'png')
			$img = imagecreatefrompng($target);
		else if($ext == 'gif')
			$img = imagecreatefromgif($target);
		else
			$img = imagecreatefromjpeg($target);

		$wtrmrk_w = imagesx($watermark);
		$wtrmrk_h = imagesy($watermark);
		
		$starting_x = (720+$wtrmrk_w)/2;
		$starting_y = 440-$wtrmrk_h;

		imagecopymerge($img, $watermark, $starting_x, $starting_y, 0, 0, imagesx($watermark), imagesy($watermark), $opacity);
		
		imagejpeg($img, $newcopy, 100); // 100 means quality , 0 worst and 100 best
		//imagedestroy($img);
		//imagedestroy($watermark);
	}

	/**
	* randomPassword
	*
	* This help to generate Password.
	* 
	* @access	public
	* @return	void
	*/

	function randomPassword($length,$count, $characters)
	{
	    $symbols = array();
	    $passwords = array();
	    $used_symbols = '';
	    $pass = '';
 
		// an array of different character types    
	    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
	    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $symbols["numbers"] = '1234567890';
	    $symbols["special_symbols"] = '!@#_';

    	$characters = explode(",",$characters); // get characters types to be used for the passsword
    	foreach ($characters as $key=>$value) {
        	$used_symbols .= $symbols[$value]; // build a string with all characters
    	}
    	$symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
     
	    for ($p = 0; $p < $count; $p++) {
	        $pass = '';
	        for ($i = 0; $i < $length; $i++) {
	            $n = rand(0, $symbols_length); // get a random character from the string with all characters
	            $pass .= $used_symbols[$n]; // add the character to the password string
	        }
	        $passwords[] = $pass;
	    }
     
    	return $passwords; // return the generated password
	}

	function sendOTP($name,$otp,$mobile)
	{
		$msg = 'Dear '.$name.', Your One Time Password is :'.$otp.' For queries: support@parekhskitchen.com';
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://sms.mobileadz.in/api/push.json?apikey=5f23eaef5ae58&sender=Parekh&mobileno=91".urlencode($mobile)."&text=".urlencode($msg));
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        return $result;
	}

	function credantialSend($name,$mobile,$password)
	{
		$msg = 'Dear '.$name.', Thank you for register on Parekhs Kitchen. Login Credantials: Username: '.$mobile.' Password: '.$password.' .For queries: support@parekhskitchen.com';
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://sms.mobileadz.in/api/push.json?apikey=5f23eaef5ae58&sender=Parekh&mobileno=91".urlencode($mobile)."&text=".urlencode($msg));
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        return $result;
	}

	function forgotPasswordEmail($name,$otp,$email)
	{
		$CI =& get_instance();
		
		$emailContent = '';
        $emailContent .= 'Dear '.$name;
        $emailContent .= ' Please find the one time password as per your forgot password request on parekhskitchen.com.';
        $emailContent .= ' Your one time Password is :- '.$otp;
        $emailContent .= ' For any queries you can write to us on support@parekhskitchen.com.';
        $subject = 'Forgot Password - One Time Password ';
        $from = 'info@parekhskitchen.com';

        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'az1-ss33.a2hosting.com',
        'smtp_port' => 465,
        'smtp_user' => 'info@parekhskitchen.com',
        'smtp_pass' => 'info@6pm',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1'
        );
        $CI->load->library('email', $config);
        $CI->email->set_newline("\r\n");
        
        // Set to, from, message, etc.
        $CI->email->from($from,'Parekhs Kitchen');
        $CI->email->to($email);
        $CI->email->subject($subject);
        $CI->email->message($emailContent);
        $CI->email->send();
	}