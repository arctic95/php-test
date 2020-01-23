<?php

	abstract class Dashboard
	{
	    protected $fileName;
	    protected $data;
	    protected $path;

	    public function __construct($fileName)
	    {
	        $this->fileName = $fileName;
	    }

	    public function load()
	    {
	        if ( ! file_exists( $this->path . "/" . $this->fileName . ".dat" ) ) {
	            return false;
	        }
	        if ( ! $this->data ) {
	            $this->data = unserialize( file_get_contents( $this->path . "/" . $this->fileName . ".dat" ) );
	        }

	        return $this->data;
	    }

	    public function update()
	    {
	        return file_put_contents( $this->path . "/" . $this->fileName . ".dat", serialize( $this->data ) );
	    }

	    public function getData(){
	    	var_dump($this->data);
	    }

	    public function getFullName(){
	    	return $this->data["name"]." ".$this->data["lastName"];
	    }

	}

	$dash = new Dashboard("sess.txt");

	if(!$dash->load()){
		header
	}
?>