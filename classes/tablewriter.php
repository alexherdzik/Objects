<?php
//Handle the writing of tables from a two-dimensional array (usually database results)
class TableWriter
{
    private $classes = array("table-striped");
    
    public function __construct($classes = null)
    {
        if(isset($classes)){
            $this->classes = $classes;
        }
    }
    
    public function write(array $array)
    {
        //header creation
        $table = '<table class="table '.implode(' ', $this->classes).'"><thead><tr>';
        
        foreach(array_keys($array[0]) as $key) {
            $table .= '<th>'.ucwords($key).'</th>';
        }
        
        $table .= "</tr></thead>";
        //end header creation
        
        //body creation
        $table .= "<tbody>";
        
        //row creation
        foreach($array as $row) {
            $table .= '<tr>';
            foreach($row as $key => $value) {
                $table .= "<td>$value</td>";
            }
            $table .= '</tr>';
        }
        //end row creation
        
        $table .= '</tbody></table>';
        //end body creation
        
        //write table
        echo $table;
    }
}
?>