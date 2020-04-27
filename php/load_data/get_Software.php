<?php
    foreach($connection->query('SELECT ID_Software, name FROM software') as $row) {
        print_r( $row);
        echo '<option value="'. $row['ID_Software'] .'">'. $row['name'] .'</option>';
    }