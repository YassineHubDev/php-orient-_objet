<?php


class boat extends vehicle
{

    /*
     * @var array
     */
    private $port;

    public function __construct(string $brand, string $motor, array $port)
    {
        parent::__construct($brand, $motor, 0);
        $this->port = $port;
    }

    public function move(int $km): void
    {
        //On rappelle la méthode parente
        parent::move($km);
        //On rajoute un comportement
        echo 'Ffffffffff';

    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void
    {
        $this->port = $port;
    }


}