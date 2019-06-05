<?php


class Plane extends vehicle
{
    private $maxAlt;

    public function move(int $km): void
    {
        //On rappelle la méthode parente
        parent::move($km);
        //On rajoute un comportement
        echo 'Bbbrrrrr';
    }

    /**
     * @return mixed
     */
    public function getMaxAlt()
    {
        return $this->maxAlt;
    }

    /**
     * @param mixed $maxAlt
     */
    public function setMaxAlt($maxAlt): void
    {
        $this->maxAlt = $maxAlt;
    }

    public function getWheels()
    {
        return $this->nbWheels . 'roue';
    }

}