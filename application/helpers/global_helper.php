<?php

function pr(&$a)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

function vd(&$a)
{
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}

function generateItemUrl($id, $itemTitle)
{
    $url = base_url()."item/listing_view?item_id=".$id;

    $itemId = $id;
    $idLen = strlen($itemId);
    
//    $CI =& get_instance();
//    $CI->load->model('Item_model');
//    $itemTitle = $CI->Item_model->getItemTitle($itemId);
    
    $generatedItemTitle = url_title($itemTitle);

    $patterns = array();
    $patterns[0] = '/listing_view\?/';
    $patterns[1] = '/item_id=/';
    $replacements = array();
    $replacements[1] = $itemId.'/';
    $replacements[0] = $generatedItemTitle;

    $newUrl = preg_replace($patterns, $replacements, $url);
    $len = strlen($newUrl);
    $endPoint = $len-$idLen;
    $generatedUrl = substr($newUrl,0,$endPoint);

    return $generatedUrl;
}

function makeClickableLinks($text)
{
    $text = html_entity_decode($text);
    $text = " ".$text;
    $text = preg_replace('/(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)/',
            '<a href="\\1" target=_blank>\\1</a>', $text);
    $text = preg_replace('/(((f|ht){1}tps://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)/',
            '<a href="\\1" target=_blank>\\1</a>', $text);
    $text = preg_replace('/([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)/',
    '\\1<a href="http://\\2" target=_blank>\\2</a>', $text);
    $text = preg_replace('/([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})/',
    '<a href="mailto:\\1" target=_blank>\\1</a>', $text);
    return $text;
}

function is_ajax()
{
    return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest");
}


function is_valid_url($url)
{
    return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}

function load_img($filename,$params=array(),$tag=true)
{
    if($tag == true)
    {
        $params_str = "";
        foreach($params as $key=>$param)
        {
            $params_str .= $key.'="'.$param.'" ';
        }
        return '<img src="'.base_url()."resources/images/".$filename.'" '.$params_str.'>';
    }
    else
        return base_url()."resources/images/".$filename;
}

////function to load he external js files not pertaining to controllers and action
//file name would be relative to js folder
function load_js($js_file=NULL,$tag=true)
{
	if($js_file!=NULL){
        if(file_exists("./resources/js/".$js_file))
            return '<script type="text/javascript" src="'.base_url()."resources/js/".$js_file.'"></script>';
	}
}

function load_css($css_file=NULL)
{
	if($css_file!=NULL){
        if(file_exists("./resources/css/".$css_file))
            return '<link  type="text/css" rel="stylesheet" href="'.base_url()."resources/css/".$css_file.'" />';
	}
}

function getIndex(&$arrayName,$index)
{
	if(isset($arrayName[$index]))
		return $arrayName[$index];
	else
		return FALSE;
}

function formatDate($dt)
{
	$tstamp = strtotime($dt);
	return date("D jS M, Y ",$tstamp);
}

function formatTime($tstamp)
{
	return date("g:i a",$tstamp);
}

function ago($time)
{    
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60","60","24","7","4.35","12","10");

    $now = time();

    $difference     = $now - $time;
    $tense         = "ago";

    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if($difference != 1) {
        $periods[$j].= "s";
    }

    return "$difference $periods[$j]";
}

function formatDateTime($tstamp)
{    
	return date("D jS M, Y (g:i a)",$tstamp);
}

function get_listing_count($userid)
{
    $CI =& get_instance();
    
    $CI->load->model('Item_model');
    
    $data = $CI->Item_model->get_listing_count($userid);
    return $data;
}

function lq()
{
	// helper to show last query
	$CI =& get_instance();
	echo "<pre class='smalltext'>".htmlentities($CI->db->last_query())."</pre>";
}

function getCountryList($index=null)
{
	$countries = array(
		'AF'=>'Afghanistan',
		'AL'=>'Albania',
		'DZ'=>'Algeria',
		'AS'=>'American Samoa',
		'AD'=>'Andorra',
		'AO'=>'Angola',
		'AI'=>'Anguilla',
		'AQ'=>'Antarctica',
		'AG'=>'Antigua and Barbuda',
		'AR'=>'Argentina',
		'AM'=>'Armenia',
		'AW'=>'Aruba',
		'AU'=>'Australia',
		'AT'=>'Austria',
		'AZ'=>'Azerbaijan',
		'BS'=>'Bahamas',
		'BH'=>'Bahrain',
		'BD'=>'Bangladesh',
		'BB'=>'Barbados',
		'BY'=>'Belarus',
		'BE'=>'Belgium',
		'BZ'=>'Belize',
		'BJ'=>'Benin',
		'BM'=>'Bermuda',
		'BT'=>'Bhutan',
		'BO'=>'Bolivia',
		'BA'=>'Bosnia and Herzegovina',
		'BW'=>'Botswana',
		'BV'=>'Bouvet Island',
		'BR'=>'Brazil',
		'IO'=>'British Indian Ocean Territory',
		'BN'=>'Brunei Darussalam',
		'BG'=>'Bulgaria',
		'BF'=>'Burkina Faso',
		'BI'=>'Burundi',
		'KH'=>'Cambodia',
		'CM'=>'Cameroon',
		'CA'=>'Canada',
		'CV'=>'Cape Verde',
		'KY'=>'Cayman Islands',
		'CF'=>'Central African Republic',
		'TD'=>'Chad',
		'CL'=>'Chile',
		'CN'=>'China',
		'CX'=>'Christmas Island',
		'CC'=>'Cocos (Keeling) Islands',
		'CO'=>'Colombia',
		'KM'=>'Comoros',
		'CG'=>'Congo',
		'CD'=>'Congo, the Democratic Republic of the',
		'CK'=>'Cook Islands',
		'CR'=>'Costa Rica',
		'CI'=>'Cote D\'Ivoire',
		'HR'=>'Croatia',
		'CU'=>'Cuba',
		'CY'=>'Cyprus',
		'CZ'=>'Czech Republic',
		'DK'=>'Denmark',
		'DJ'=>'Djibouti',
		'DM'=>'Dominica',
		'DO'=>'Dominican Republic',
		'EC'=>'Ecuador',
		'EG'=>'Egypt',
		'SV'=>'El Salvador',
		'GQ'=>'Equatorial Guinea',
		'ER'=>'Eritrea',
		'EE'=>'Estonia',
		'ET'=>'Ethiopia',
		'FK'=>'Falkland Islands (Malvinas)',
		'FO'=>'Faroe Islands',
		'FJ'=>'Fiji',
		'FI'=>'Finland',
		'FR'=>'France',
		'GF'=>'French Guiana',
		'PF'=>'French Polynesia',
		'TF'=>'French Southern Territories',
		'GA'=>'Gabon',
		'GM'=>'Gambia',
		'GE'=>'Georgia',
		'DE'=>'Germany',
		'GH'=>'Ghana',
		'GI'=>'Gibraltar',
		'GR'=>'Greece',
		'GL'=>'Greenland',
		'GD'=>'Grenada',
		'GP'=>'Guadeloupe',
		'GU'=>'Guam',
		'GT'=>'Guatemala',
		'GN'=>'Guinea',
		'GW'=>'Guinea-Bissau',
		'GY'=>'Guyana',
		'HT'=>'Haiti',
		'HM'=>'Heard Island and Mcdonald Islands',
		'VA'=>'Holy See (Vatican City State)',
		'HN'=>'Honduras',
		'HK'=>'Hong Kong',
		'HU'=>'Hungary',
		'IS'=>'Iceland',
		'IN'=>'India',
		'ID'=>'Indonesia',
		'IR'=>'Iran, Islamic Republic of',
		'IQ'=>'Iraq',
		'IE'=>'Ireland',
		'IL'=>'Israel',
		'IT'=>'Italy',
		'JM'=>'Jamaica',
		'JP'=>'Japan',
		'JO'=>'Jordan',
		'KZ'=>'Kazakhstan',
		'KE'=>'Kenya',
		'KI'=>'Kiribati',
		'KP'=>'Korea, Democratic People\'s Republic of',
		'KR'=>'Korea, Republic of',
		'KW'=>'Kuwait',
		'KG'=>'Kyrgyzstan',
		'LA'=>'Lao People\'s Democratic Republic',
		'LV'=>'Latvia',
		'LB'=>'Lebanon',
		'LS'=>'Lesotho',
		'LR'=>'Liberia',
		'LY'=>'Libyan Arab Jamahiriya',
		'LI'=>'Liechtenstein',
		'LT'=>'Lithuania',
		'LU'=>'Luxembourg',
		'MO'=>'Macao',
		'MK'=>'Macedonia, the Former Yugoslav Republic of',
		'MG'=>'Madagascar',
		'MW'=>'Malawi',
		'MY'=>'Malaysia',
		'MV'=>'Maldives',
		'ML'=>'Mali',
		'MT'=>'Malta',
		'MH'=>'Marshall Islands',
		'MQ'=>'Martinique',
		'MR'=>'Mauritania',
		'MU'=>'Mauritius',
		'YT'=>'Mayotte',
		'MX'=>'Mexico',
		'FM'=>'Micronesia, Federated States of',
		'MD'=>'Moldova, Republic of',
		'MC'=>'Monaco',
		'MN'=>'Mongolia',
		'MS'=>'Montserrat',
		'MA'=>'Morocco',
		'MZ'=>'Mozambique',
		'MM'=>'Myanmar',
		'NA'=>'Namibia',
		'NR'=>'Nauru',
		'NP'=>'Nepal',
		'AN'=>'Netherlands Antilles',
		'NL'=>'Netherlands',
		'NC'=>'New Caledonia',
		'NZ'=>'New Zealand',
		'NI'=>'Nicaragua',
		'NE'=>'Niger',
		'NG'=>'Nigeria',
		'NU'=>'Niue',
		'NF'=>'Norfolk Island',
		'MP'=>'Northern Mariana Islands',
		'NO'=>'Norway',
		'OM'=>'Oman',
		'PK'=>'Pakistan',
		'PW'=>'Palau',
		'PS'=>'Palestinian Territory, Occupied',
		'PA'=>'Panama',
		'PG'=>'Papua New Guinea',
		'PY'=>'Paraguay',
		'PE'=>'Peru',
		'PH'=>'Philippines',
		'PN'=>'Pitcairn',
		'PL'=>'Poland',
		'PT'=>'Portugal',
		'PR'=>'Puerto Rico',
		'QA'=>'Qatar',
		'RE'=>'Reunion',
		'RO'=>'Romania',
		'RU'=>'Russian Federation',
		'RW'=>'Rwanda',
		'SH'=>'Saint Helena',
		'LC'=>'Saint Lucia',
		'PM'=>'Saint Pierre and Miquelon',
		'KN'=>'Saint Kitts and Nevis',
		'VC'=>'Saint Vincent and the Grenadines',
		'WS'=>'Samoa',
		'SM'=>'San Marino',
		'ST'=>'Sao Tome and Principe',
		'SA'=>'Saudi Arabia',
		'SN'=>'Senegal',
		'CS'=>'Serbia and Montenegro',
		'SC'=>'Seychelles',
		'SL'=>'Sierra Leone',
		'SG'=>'Singapore',
		'SK'=>'Slovakia',
		'SI'=>'Slovenia',
		'SB'=>'Solomon Islands',
		'SO'=>'Somalia',
		'ZA'=>'South Africa',
		'GS'=>'South Georgia and the South Sandwich Islands',
		'ES'=>'Spain',
		'LK'=>'Sri Lanka',
		'SD'=>'Sudan',
		'SR'=>'Suriname',
		'SJ'=>'Svalbard and Jan Mayen',
		'SZ'=>'Swaziland',
		'SE'=>'Sweden',
		'CH'=>'Switzerland',
		'SY'=>'Syrian Arab Republic',
		'TW'=>'Taiwan, Province of China',
		'TJ'=>'Tajikistan',
		'TZ'=>'Tanzania, United Republic of',
		'TH'=>'Thailand',
		'TL'=>'Timor-Leste',
		'TG'=>'Togo',
		'TK'=>'Tokelau',
		'TO'=>'Tonga',
		'TT'=>'Trinidad and Tobago',
		'TN'=>'Tunisia',
		'TR'=>'Turkey',
		'TM'=>'Turkmenistan',
		'TC'=>'Turks and Caicos Islands',
		'TV'=>'Tuvalu',
		'UG'=>'Uganda',
		'UA'=>'Ukraine',
		'GB'=>'United Kingdom',
		'US'=>'United States',
		'AE'=>'United Arab Emirates',
		'UM'=>'United States Minor Outlying Islands',
		'UY'=>'Uruguay',
		'UZ'=>'Uzbekistan',
		'VU'=>'Vanuatu',
		'VE'=>'Venezuela',
		'VN'=>'Viet Nam',
		'VG'=>'Virgin Islands, British',
		'VI'=>'Virgin Islands, U.s.',
		'WF'=>'Wallis and Futuna',
		'EH'=>'Western Sahara',
		'YE'=>'Yemen',
		'ZM'=>'Zambia',
		'ZW'=>'Zimbabwe'
	);

	if(is_null($index))
		return $countries;
	else
	{
		if(strlen($index)>2)
		{
			$key = array_search($index,$countries);
			return $key;
		}
		else
		{
			if(isset($countries[$index]))
				return $countries[$index];
			else
				return "";
		}

	}
}

function getCurrentDateTime()
{
	return date("Y-m-d G:i:s");
}

function trim_text($string, $limit=10)
{    
    
    $stringlen = strlen($string);
    

    if($stringlen > $limit)
    {
        $temp_string = substr($string, 0, ($limit - 3));
        $new_string = $temp_string."...";
        echo $new_string;
    }
    else
    {
        echo $string;
    }

}

function recursive_remove_directory($directory, $empty=FALSE)
{
	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... if the path is not readable
	}elseif(!is_readable($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... else if the path is readable
	}else{

		// we open the directory
		$handle = opendir($directory);

		// and scan through the items inside
		while (FALSE !== ($item = readdir($handle)))
		{
			// if the filepointer is not the current directory
			// or the parent directory
			if($item != '.' && $item != '..')
			{
				// we build the new path to delete
				$path = $directory.'/'.$item;

				// if the new path is a directory
				if(is_dir($path)) 
				{
					// we call this function with the new path
					recursive_remove_directory($path);

				// if the new path is a file
				}else{
					// we remove the file
					unlink($path);
				}
			}
		}
		// close the directory
		closedir($handle);

		// if the option to empty is not set to true
		if($empty == FALSE)
		{
			// try to delete the now empty directory
			if(!rmdir($directory))
			{
				// return false if not possible
				return FALSE;
			}
		}
		// return success
		return TRUE;
	}
}

/*
 * Returns the expiration timestamp
 * @param $posted_on{date} Date when it was posted
 * @param $number_of_days{int} Number of validity days
 * PM : 2013-2-3 : function created
 */
function get_expiration_timestamp($posted_on,$number_of_days)
{
    // Get the number of days
    $validity = $number_of_days;

    $posted_on_timestamp = strtotime($posted_on );

    // Create expiration timestamp
    $expiration_time = mktime(0,0,0,date("j",$posted_on_timestamp),date("z",strtotime("+".$validity." day", $posted_on_timestamp)),date("Y",$posted_on_timestamp));
    
    return $expiration_time;

}

/*
 * Send a email
 * @param $to{string} Mail Id to whom the mail will be sent
 * @param $from{string} Mail Id from whom the mail will be sent
 * @param $mail_details{array} containing subject and message
 * PM : 2013-2-4 : function created
 */
function email($to,$from,$mail_details)
{
    $CI =& get_instance();
    $CI->load->library('email');

    $CI->email->from($from);
    $CI->email->to($to); 

    $CI->email->subject($mail_details['subject']);
    $CI->email->message($mail_details['message']);	

    $CI->email->send();
//    
//    echo $CI->email->print_debugger();
//    exit;
}