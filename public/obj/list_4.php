<?php

abstract class FileData
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

}

class User extends FileData
{
    private $name;
    private $lastname;
    private $email;
    private $password;

    public function __construct($email)
    {
        $this->path = "data";
        parent::__construct( $email );

        $this->load();
        $this->populate();
    }

    private function populate()
    {

        $this->setName( $this->data['name'] )
             ->setLastname( $this->data['lastname'] )
             ->setEmail( $this->data['email'] )
             ->setPassword( $this->data['password'] );
        //
        // $this->name     = $this->data['name'];
        // $this->lastname = $this->data['lastname'];
        // $this->email    = $this->data['email'];
        // $this->password = $this->data['password'];
    }

    public function update()
    {
        $this->data['name']     = $this->getName();
        $this->data['lastname'] = $this->getLastname();
        $this->data['email']    = $this->getEmail();
        $this->data['password'] = $this->getPassword();

        return parent::update();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;


        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}

$u = new User( 'olek@cichowicz.eu' );
var_dump( $u->getData() );

$u->update();
