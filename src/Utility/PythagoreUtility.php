<?php

// src/Utility/PythagoreUtility.php

namespace App\Utility;

final class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table>';
        
        for ($i = 0; $i <= 10; $i++) {
            $html .= '<tr>';
            for ($j = 0; $j <= 10; $j++) {
                $html .= '<td>';
                if($i === 0){
                    $html .= $j;
                }else if($j === 0){
                    $html .= $i;
                }else if($i === $j){
                    $html .= 'X';
                }else{
                    $html .= $i * $j;
                }
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        
        return $html;
    }
}
