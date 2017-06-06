<?php
//Handle the writing of tables from a two-dimensional array (usually database results)
class TableWriter
{
    public function write(Table $table)
    {
        //header creation
        $output = '<table class="table '.implode(' ', $table->getClasses()).'"><thead><tr>';
        
        foreach($table->getKeys() as $key) {
            $output .= '<th>'.ucwords($key).'</th>';
        }
        
        $output .= "</tr></thead>";
        //end header creation
        
        //body creation
        $output .= "<tbody>";
        
        //row creation
        foreach($table->getRows() as $row) {
            $output .= '<tr>';
            foreach($row as $key => $value) {
                $output .= "<td>$value</td>";
            }
            $output .= '</tr>';
        }
        //end row creation
        
        $output .= '</tbody></table>';
        //end body creation
        
        //write table
        echo $output;
    }
}
?>