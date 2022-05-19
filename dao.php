<?php
include 'db.php';
/*Insert into Database */
function adduser($user){
    $nam=$user['name'];
    $em=$user['email'];
    $ph=$user['phone'];
    $g=$user['gen'];
    $nu=$user['pass'];
    $e_p=md5($nu);
    $con=$GLOBALS['con'];
    $sql="insert into regi(Name,Email,phone,gen,pass) values(?,?,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sssss",$nam,$em,$ph,$g,$e_p);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}

/*Login Form*/
function login($user){
    $con=$GLOBALS ['con'];
    $name=$user['name'];
    $pass=$user['pass'];
     $e_p=md5($pass);
    $sql="select Name,pass from regi where Name=? and pass=?";
    $st=$con->prepare($sql);
        $st->bind_param("ss",$name,$e_p);
        echo $e_p;
        if($st->execute()){
            $rs=$st->get_result();
            if($rs->num_rows>0){ 
                return true;
               //echo "hh1";
            }
            else
            {
                
                echo  $rs->error;
            }
        }
        else{
            echo $con->error;
        }
 }


 /*Insert into Database Book*/
function addrest1($user){
    $nam=$user['name'];
    $em=$user['email'];
    $nu=$user['pass'];
    $d=$user['dept'];
    $bo=$user['des'];
    $con=$GLOBALS['con'];
    $sql="insert into restdel(title,location,number,link,imgname) values(?,?,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("sssss",$nam,$em,$bo,$d,$nu);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
/*Get Image Form DataBase */
function getFile($id){
    $con=$GLOBALS['con'];
    $sql="select * from restdel where id=$id";
    $result=$con->query($sql);
    if($result->num_rows>0){
        if($row=$result->fetch_assoc()){
            return  $row;
        }
    }
  
}

// /*Insert into Database Resturent*/
// function addrest1($user){
//     $nam=$user['name'];
//     $em=$user['des'];
//     $nu=$user['pass'];
//     $con=$GLOBALS['con'];
//     $sql="insert into resturent(title,des,rimg) values(?,?,?)";
//     $st=$GLOBALS['con']->prepare($sql);
//     $st->bind_param("sss",$nam,$em,$nu);
//         if($st->execute()){
//         return true;
//     }
//     else{
//         return false;
//     }
// }
/*Get Image Form DataBase For resturent */
function getFiles1(){
    $con=$GLOBALS['con'];
    $sql="select * from restdel";
    $result=$con->query($sql);
    $img=array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $img[]=$row;
        }
    }
    return  $img;
}
/*Insert into Database Rating*/
function rating($rate){
    $id=$rate['id'];
    $r=$rate['rate'];
    $c=$rate['cmnt'];
    $con=$GLOBALS['con'];
    $sql="insert into rate values(null,?,?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("isi",$r,$c,$id);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}

function avgRating($id){
    $con=$GLOBALS['con'];
    $sql="select avg(rating) as avg from rate where rest_id=$id";
    $result=$con->query($sql);
    if($result->num_rows>0){
        if($row=$result->fetch_assoc()){
            return $row['avg'];
        }
    }
   
}
?>