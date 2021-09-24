<?php

    function d($result) {
        echo '<br><br><br><pre>';
        print_r($result);
        exit();
    }

    function select($args) {        
        $select = implode(",", $args['select']);
        $from = implode(",", $args['from']);
        $where = implode(",", $args['where']);
        $order = implode(" ", $args['order']);
        
        $sql = "SELECT $select FROM $from WHERE 1 $where ";
        
        if(isset($order)){
            $sql .= "ORDER BY $order";
        }
        
        return $sql;
    }

    function insert($table_name, $data) {
        foreach ($data as $key => $value) {
            $index[] = $key;
        }

        $indexes = implode(", ", $index);
        $values = "'" . implode("', '", $data) . "'";

        $sql = "INSERT INTO $table_name ($indexes) VALUES ($values)";
        return $sql;
    }