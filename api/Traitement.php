<?php




function Triangle($n)
{
    echo "<br/>";
    // boucle des lignes :
    
    for ($i = 1; $i <=$n; $i++) 
    {
        // boucle des espaces :
        
        for ($j = 1; $j <=$n-$i; $j++)
        {
            echo "&nbsp;&nbsp;";
        }
        
        // boucle des etoiles :
        
        for ($k = 1; $k <=2*$i-1; $k++)
        {
            echo "*";
        }
        
        
        // retour à la ligne :
        echo "<br/>";
        
    }
    
    
    
    
    
}