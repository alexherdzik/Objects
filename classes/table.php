<?php
class Table 
{
    private $headers;
    private $rows;
    private $classes = array("table-striped"); //default classes for consistency
    public $rowCondition;
    
    public function __construct(array $rows, array $classes = null)
    {
        $this->headers = array_keys($rows[0]);
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
    
    public function getHeaders()
    {
        return $this->headers;
    }
    
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }
    
    public function setRowCondition($function)
    {
        $this->rowCondition = $function;
    }
    
}
?>