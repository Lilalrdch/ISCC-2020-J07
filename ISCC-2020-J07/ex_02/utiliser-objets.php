<?php
                $date1 = new DateTime ("2020-07-02 14:26:00");
            echo "<p>".$date1->format("Y-m-d\TH:i:s"). "</p>";
                $date2 = new DateTime ("2020-06-22 09:00:00");
                $interval = $date1->diff($date2);
            echo "<p> ". $interval->d. " Jours, " .$interval->h. " heures, " .$interval->i. " minutes depuis le debut de la piscine. </p>"

?>