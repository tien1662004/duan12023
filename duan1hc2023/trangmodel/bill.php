<?php 
    function insert_bill($name,$phone,$email,$address,$pay,$ghichu,$total){
        $conn = pdo_get_connection() ;
        $sql="INSERT INTO bill(name,phone,email,address,pay,ghichu,total) values ('$name','$phone','$email','$address','$pay','$ghichu','$total')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }
    function add_cart($idsp,$idbill,$name,$soluong){
        $sql= "INSERT INTO donhangchitiet(idsp,idbill,name,soluong) values ('$idsp','$idbill','$name','$soluong')";
        pdo_execute($sql);
    }    
?>