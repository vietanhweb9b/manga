<?php
function list_theloai($id){

    $sql="SELECT * from truyen join theloai on truyen.ma_tl =theloai.id WHERE theloai.id=".$id.";";
    $listtheloai=pdo_query($sql);
    return  $listtheloai;
}
function loadall_theloai(){
    $sql="select * from theloai order by id desc";
    $listtheloai=pdo_query($sql);
    return  $listtheloai;
}
function load_ten_tl($idtl){
    if($idtl>0){
        $sql="select * from theloai where id=".$idtl;
        $tl=pdo_query_one($sql);
        extract($tl);
        return $tl;
    }else{
        return "";
    }
}
function insert_tl($tentl){
    $query="INSERT INTO `theloai` (`id`, `ten_tl`) VALUES (null , '".$tentl."');";
    pdo_execute($query);
}

function xoa_tl($idtl){
    $query="DELETE FROM theloai WHERE `theloai`.`id` = ".$idtl.";";
    pdo_execute($query);
}

function sua_tl($idtl,$new_name){
    $query = "UPDATE `theloai` SET `ten_tl` = '" . $new_name . "' WHERE `theloai`.`id` = '" . $idtl . "';";
    pdo_execute($query);
}
?>