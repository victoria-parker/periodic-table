<?php


class Element
{
    private $atomicNumber;
    private $symbol;
    private $name;
    private $atomicMass;
    private $cpkHexColor;
    private $standardState;
    private $meltingPoint;
    private $boilingPoint;
    private $groupBlock;
    private $yearDiscovered;
    private $ElectronConfiguration;

    public function listElements(){
        $link=Connexion::connect();

        $sql="SELECT atomicNumber,symbol,name,atomicMass FROM periodic_table";

        $stmt=$link->prepare($sql);

        $stmt->execute();

        $elements=$stmt->fetchAll(PDO::FETCH_ASSOC);

        return $elements;
    }

    /**
     * @return mixed
     */
    public function getAtomicNumber()
    {
        return $this->atomicNumber;
    }

    /**
     * @param mixed $atomicNumber
     */
    public function setAtomicNumber($atomicNumber)
    {
        $this->atomicNumber = $atomicNumber;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAtomicMass()
    {
        return $this->atomicMass;
    }

    /**
     * @param mixed $atomicMass
     */
    public function setAtomicMass($atomicMass)
    {
        $this->atomicMass = $atomicMass;
    }

    /**
     * @return mixed
     */
    public function getCpkHexColor()
    {
        return $this->cpkHexColor;
    }

    /**
     * @param mixed $cpkHexColor
     */
    public function setCpkHexColor($cpkHexColor)
    {
        $this->cpkHexColor = $cpkHexColor;
    }

    /**
     * @return mixed
     */
    public function getStandardState()
    {
        return $this->standardState;
    }

    /**
     * @param mixed $standardState
     */
    public function setStandardState($standardState)
    {
        $this->standardState = $standardState;
    }

    /**
     * @return mixed
     */
    public function getMeltingPoint()
    {
        return $this->meltingPoint;
    }

    /**
     * @param mixed $meltingPoint
     */
    public function setMeltingPoint($meltingPoint)
    {
        $this->meltingPoint = $meltingPoint;
    }

    /**
     * @return mixed
     */
    public function getBoilingPoint()
    {
        return $this->boilingPoint;
    }

    /**
     * @param mixed $boilingPoint
     */
    public function setBoilingPoint($boilingPoint)
    {
        $this->boilingPoint = $boilingPoint;
    }

    /**
     * @return mixed
     */
    public function getGroupBlock()
    {
        return $this->groupBlock;
    }

    /**
     * @param mixed $groupBlock
     */
    public function setGroupBlock($groupBlock)
    {
        $this->groupBlock = $groupBlock;
    }

    /**
     * @return mixed
     */
    public function getYearDiscovered()
    {
        return $this->yearDiscovered;
    }

    /**
     * @param mixed $yearDiscovered
     */
    public function setYearDiscovered($yearDiscovered)
    {
        $this->yearDiscovered = $yearDiscovered;
    }

    /**
     * @return mixed
     */
    public function getElectronConfiguration()
    {
        return $this->ElectronConfiguration;
    }

    /**
     * @param mixed $ElectronConfiguration
     */
    public function setElectronConfiguration($ElectronConfiguration)
    {
        $this->ElectronConfiguration = $ElectronConfiguration;
    }

}