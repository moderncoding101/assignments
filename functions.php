<?php 
        function string_check($input)
        {
            #echo "<pre>"; // Enables display of line feeds
            $solution = file_get_contents("strings_solution.txt");
            #echo "</pre>"; // Terminates pre tag
            return ($input==$solution) ? true : false;
        }