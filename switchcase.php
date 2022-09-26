<?php

    $day = "monday";

    switch ($day) {
        case 'monday':
            echo "That is first working day of weak!";
            break;

        case 'tuesday':
            echo "That is second working day of weak!";
            break;
    
        case 'thursday':
            echo "That is third working day of weak!";
            break;

        case 'wednesday':
            echo "That is first working day of weak!";
            break;

        case 'friday':
            echo "That is last working day of weak!";
            break;

        case 'saturday':
            echo "That is holiday";
            break;
    
        case 'sunday':
            echo "That is Holyday";
            break;

        default:
            echo "That is not any day of weak, plaese enter valid day.";
            break;
    }
?>