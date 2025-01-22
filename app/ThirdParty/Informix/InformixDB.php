<?php
putenv("INFORMIXDIR=/opt/IBM/informix");
putenv("INFORMIXSERVER=unisza_prod01");
putenv("LD_LIBRARY_PATH=/opt/IBM/informix/lib/:/opt/IBM/informix/lib/cli:/opt/IBM/informix/lib/esql");
putenv("PATH=/usr/local/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/opt/IBM/informix/bin:/opt/IBM/informix/lib");

/**
 * Last updated by aiman 22/1/2024
 * please use function select2 for create query 
 * please use function insert2 for insert to db
 */

class InformixDB
{
    public $db;
    public $stmt;
    function __construct($env = null)
    {
        try {
            if ($env == 'production') {
                $conn = new PDO("informix:host=172.17.2.141;service=60003;database=sismak;server=unisza_prod;protocol=onsoctcp;EnableScrollableCursors=1", INFORMIX_WEBUESR, INFORMIX_WEBUESR_PASS, array(PDO::ATTR_PERSISTENT => false));
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } elseif ($env == 'development') {
                $conn = new PDO("informix:host=172.17.2.141;service=60003;database=uji_sismak;server=unisza_prod;protocol=onsoctcp;EnableScrollableCursors=1", INFORMIX_UJI, INFORMIX_UJI_PASS, array(PDO::ATTR_PERSISTENT => false));
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } else {
                $conn = false;
                header('Content-Type: application/json');
                echo json_encode(['status' => 'error', 'msg' => 'Invalid environment.']);
                die();
            }
            $this->db = $conn;

        } catch (PDOException $e) {
            $conn = false;
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'msg' => 'Connection to database failed. Check DB server if you have not change library.']);
            die();
        }
    }
    function select($query)
    {
        if ($this->db != false) {
            try {
                $this->stmt = $this->db->prepare($query);
                $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
                $this->stmt->execute();
            } catch (\Throwable $th) {
                header('Content-Type: application/json');
                $this->stmt = false;
                echo json_encode(['status' => 'error', 'msg' => 'Invalid query.']);
                die();
            }
        } else {
            header('Content-Type: application/json');
            $this->stmt = false;
            echo json_encode(['status' => 'error', 'msg' => 'Invalid Statement.']);
            die();
        }
        return $this;
    }

    //secure select
    function select2($query, array $input = null)
    {
        if ($this->db != false) {
            try {
                $this->stmt = $this->db->prepare($query);
                $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
                $this->stmt->execute($input);
            } catch (\Throwable $th) {
                header('Content-Type: application/json');
                $this->stmt = false;
                echo json_encode(['status' => 'error', 'msg' => 'Invalid query.']);
                die();
            }
        } else {
            header('Content-Type: application/json');
            $this->stmt = false;
            echo json_encode(['status' => 'error', 'msg' => 'Failed to connect.']);
            die();
        }
        return $this;
    }
    function get()
    {
        if ($this->db != false && $this->stmt != false) {
            return $this->stmt->fetch();
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'msg' => 'failed to fetch data.']);
            die();
        }
        return $this;
    }
    function getAll()
    {
        if ($this->db != false && $this->stmt != false) {
            return $this->stmt->fetchAll();
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'msg' => 'failed to fetch data.']);
            die();
        }
        return $this;
    }
    function insert($table, array $attr)
    {
        $tableAttr = '';
        $attrValue = '';
        $counter = 1;
        foreach ($attr as $a => $k) {
            if (count($attr) == $counter) {
                $tableAttr .= $a;
                $attrValue .= "'" . $k . "'";
            } else {
                $tableAttr .= $a . ', ';
                $attrValue .= "'" . $k . "',";
            }
            $counter++;
        }

        if ($this->db != false) {
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO $table ($tableAttr) VALUES ($attrValue)";
            $insert = $this->db->exec($sql);

            if ($insert == 1) {
                return "success";
            } else {
                return "error -> " . $insert;
            }
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'msg' => 'Connection to informixDB error.']);
            die();
        }

        return $this;
    }

    //secure insert
    function insert2($table, array $data)
    {
        $field = '';
        $value = '';
        $counter = 1;

        foreach ($data as $key => $val) {
            if (count($data) == $counter) {
                $field .= $key;
                $value .= ':' . $key;
            } else {
                $field .= $key . ', ';
                $value .= ':' . $key . ', ';
            }
            $counter = 1;
        }

        $sql = "INSERT INTO $table ($field) VALUES ($value)";

        try {
            $this->stmt = $this->db->prepare($sql);
            $insert = $this->stmt->execute($data);

            return $insert;
        } catch (\Throwable $th) {
            header('Content-Type: application/json');
            die(json_encode(['status' => 'failed', 'msg' => 'Insert error']));
        }
    }
    
    function update($table, $key, array $attr)
    {
        $data = '';
        $counter = 1;

        foreach ($attr as $a => $k) {
            if (count($attr) == $counter) {
                $data .= $a . "='" . $k . "'";
            } else {
                $data .= $a . "='" . $k . "',";
            }
            $counter++;
        }

        if ($this->db != false) {
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE $table SET $data WHERE $key";
            $this->stmt = $this->db->prepare($sql);
            $update = $this->stmt->execute();

            if ($update == 1) {
                return "success";
            } else {
                return "error -> " . $update;
            }
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'msg' => 'Connection to informixDB error.']);
            die();
        }

        return $this;
    }

    //secure delete
    function delete($table, array $keys)
    {
        $field = '';
        $value = '';
        $counter = 1;

        foreach ($keys as $key => $val) {
            if (count($keys) == $counter) {
                $field .= $key;
                $value .= ':' . $key;
            } else {
                $field .= $key . ', ';
                $value .= ':' . $key . ', ';
            }
            $counter = 1;
        }

        if ($this->db != false) {
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "DELETE FROM $table WHERE $field";
            $this->stmt = $this->db->prepare($sql);
            $delete = $this->stmt->execute($keys);

            return $delete;

        } else {
            header('Content-Type: application/json');
            $this->stmt = false;
            die(json_encode(['status' => 'error', 'msg' => 'Connection to informixDB error.']));
        }
    }
}
?>


