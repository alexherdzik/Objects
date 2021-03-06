<?php
//Handle the writing of tables from a two-dimensional array (usually database results)
class TableWriter
{
    public function write(Table $table)
    {
        //header creation
        $output = '<table class="table '.implode(' ', $table->getClasses()).'"><thead><tr>';
        
        foreach($table->getHeaders() as $header) {
            $output .= '<th>'.ucwords($header).'</th>';
        }
        
        $output .= "</tr></thead>";
        //end header creation
        
        //body creation
        $output .= "<tbody>";
        
        //row creation
        foreach($table->getRows() as $row) {
            $tableRow = new TableRow($row);
            //check any set row conditions
            if (isset($table->rowConditions)) {
                foreach($table->rowConditions as $condition){
                    $condition($tableRow);
                }
            }
            $output .= '<tr class="'.implode(' ', $tableRow->getClasses()).'">';
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