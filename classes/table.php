<?php
class Table 
{
    private $rows;
    private $classes = array("table-striped"); //default classes for consistency
    
    public function __construct(array $rows, array $classes = null)
    {
        $this->rows = $rows;
        if (isset($classes)) {
            $this->classes = $classes;
        }
    }
    
    public function getRows()
    {
        return $this->rows;
    }
    
    public function setRows(array $rows)
    {
        $this->rows = $rows;
    }
    
    public function addClass($class)
    {
        $this->classes[] = $class;
    }
    
    public function removeClass($class)
    {
        $key = array_search($class, $this->classes);
        if ($key !== false) {
            unset($this->classes[$key]);
        }
    }
    
    public function getClasses()
    {
        return $this->classes;
    }
    
    public function setClasses(array $classes)
    {
        $this->classes = $classes;
    }
    
    public function getKeys()
    {
        return array_keys($this->rows[0]);
    }
}
?>