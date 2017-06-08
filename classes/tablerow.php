<?php
class TableRow 
{
    private $data;
    private $classes = array();
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
    
    public function setData($data)
    {
        $this->data = $data;
    }
    
    public function getValue($key)
    {
        return $this->data[$key];
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
}
    
?>