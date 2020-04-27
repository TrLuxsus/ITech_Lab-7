<?php
    foreach($connection->query('SELECT ID_Processor, name FROM processor') as $row) {
        echo '<option value="'. $row['ID_Processor'] .'">'. $row['name'] .'</option>';
    }