<?php
    include_once "01 dbcontrol.php";
    include_once "util.php";
    $debug_mode = false;
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("for GET Method", $debug_mode);
        echo json_encode(show_data($debug_mode));
    }else if ($_SERVER['REQUEST_METHOD'] =='POST'){
        debug_text("POST may be support next time<br>", $debug_mode);
        if(isset($_POST['u_id']) && isset($_POST['u_name'])){
            $u_id = $_POST['u_id'];
            $u_name = $_POST['u_name'];
            insert_data($u_id, $u_name, $debug_mode);
        }
        //$message = '{"Status":'+print_r($_POST)+'}';
        //echo json_encode($message);
        // debug_text("for POST Method", $debug_mode);
    }else{
        debug_text("Error Unkown this Request", $debug_mode);
        http_response_code(405);
    }
    function show_data(){
        $mydb = new db("root", "","testt", false);
        $data = $mydb->query("SELECT * FROM customer");
        return $data;
    }
    function insert_data($u_id,$u_name,$debug_mode){
        $mydb = new db("root", "","testt", $debug_mode);
        $data = $mydb->query("INSERT INTO `customer`(`CustomerID`, `CustomerName`) VALUES ('{$u_id}','{$u_name}')");
        show_data($debug_mode);
        return $data;

    }
?>