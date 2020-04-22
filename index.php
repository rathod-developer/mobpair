<?php
  
  include("connect.php");

  if(isset($_GET) || isset($_POST)){
    if(isset($_GET['action'])){
      $action = $_GET['action'];

      if($action == "insert"){

        $data = array('first_name' => "Paras", 'last_name' => "Rathod", 'email' => "paras.rathod001@gmail.com",'password' => "Paras123");
        CRUD("POST","http://localhost/mobpair/insert.php",$data);

        exit;
      }else if($action == "update"){

        $data = array('first_name' => "Amit", 'last_name' => "Patel", 'email' => "paras.rathod001@gmail.com",'password' => "Amit123",'id' => 1);

        CRUD("POST","http://localhost/mobpair/update.php",$data);

        exit;
      }else if($action == "delete"){

         $data = array('id' => 1);

        CRUD("POST","http://localhost/mobpair/delete.php",$data);

        exit;
      }else{
        $data = array("0" =>array('first_name' => "Paras", 'last_name' => "Rathod", 'email' => "paras.rathod001@gmail.com",'password' => "Paras123"),
          "1" =>array('first_name' => "John", 'last_name' => "Deo", 'email' => "john@gmail.com",'password' => "John123"),
          "2" =>array('first_name' => "Jill", 'last_name' => "Mark", 'email' => "jill@gmail.com",'password' => "jill123"));
        CRUD("POST","http://localhost/mobpair/view.php",$data);

        exit;
      }
    }
  }


  function CRUD($method,$url,$data){

    $ch=curl_init();

    if($method == "POST"){

      curl_setopt($ch,CURLOPT_POST,1);
      $jsondata = json_encode($data);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

    }

    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $result = curl_exec($ch);

    curl_close($ch);
    if (empty($result)){
        print "Nothing returned from url.<p>";
    }
    else{
        print_r($result);
    }
}
?>