<?php

/**
 * 
 */
class LegumeFeuille 

{
	private $PH;
	private $surface;
    private $nom;
 


	public function __construct($nom,$PH, $surface)
	{  
        $this->nom = $nom;
		$this->PH = $PH;
		$this->surface = $surface;
		
	}

   public function getnom()
    {
        return $this->nom;
    }

    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
	
    public function getPH()
    {
        return $this->PH;
    }

    public function setPH($PH)
    {
        $this->PH = $PH;

        return $this;
    }


    public function getSurface()
    {
        return $this->surface;
    }

    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }



/*    public function recolte($recolte,$this->surface,$this->PH)
    {
    	if ($this->PH<4 && $this->PH>0) {
    		$recolte=$this->surface*30;
    	}
    	if ($this->PH>=4 && $this->PH=<11) {
    		$recolte=$this->surface*55;
    	}
    	if ($this->PH<14 && $this->PH>11) {
    		$recolte=$surface*28;
    	}
    }*/
}