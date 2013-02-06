<?php

class Assets {
    
    static public function js($filename = null)
    {
        if(preg_match('/(\?)/',$filename))
        {
            $pos = strpos($filename,"?");
            if(!is_bool($pos) && $pos !== FALSE)
            {
                $filename = substr($filename,0,$pos);
            }
        }
        
        if($filename != null){
			if(file_exists(FCPATH."resources/js/".$filename))
				return '<script type="text/javascript" src="'.base_url()."resources/js/".$filename.'"></script>';
		}
    }
    
    static public function css($filename = null)
    {
        if(preg_match('/(\?)/',$filename))
        {
            $pos = strpos($filename,"?");
            if(!is_bool($pos) && $pos !== FALSE)
            {
                $filename = substr($filename,0,$pos);
            }
        }
        
        if($filename != null){
			if(file_exists(FCPATH."resources/css/".$filename))
				return '<link rel="stylesheet" href="'.base_url()."resources/css/".$filename.'" />';
		}
    }

	static public function img($filename,$params=array(),$tag=true)
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
    
}