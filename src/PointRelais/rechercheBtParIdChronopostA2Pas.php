<?php

namespace Chonopost\PointRelais;

class rechercheBtParIdChronopostA2Pas
{

    /**
     * @var string $id
     */
    protected $id = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \Chonopost\PointRelais\rechercheBtParIdChronopostA2Pas
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}