<?php 
    // get base info data from database
    function get_base_info_from_db($connection) {
        $base_info = array();
        
        $stmt = $connection->prepare("SELECT * FROM base_info");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // get data from records
        foreach ($stmt->fetchAll() as $row) {
            // create array for this type of content
            $current_name = $row['name'];
            $base_info[$current_name] = array();

            foreach ($row as $key=>$value) {
                // skip id and name
                if ($key == 'id' || $key == 'name') continue;

                // set info into array for this name
                $base_info[$current_name][$key] = $value;
            }
            
        }

        return $base_info;
    }

    // get correct lang field from base info array
    function get_field($fielsd, $category, $lang) {
        return $fielsd[$category]["text_".$lang];
    }
?>