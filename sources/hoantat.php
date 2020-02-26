<?php
	
	if(!empty($_POST)){
        $id=$_POST['id_dc'];
        $data['hoten']=$_POST['ten'];
        $data['dienthoai']=$_POST['dienthoai'];
        if($_POST['diachigiao']!="")
            $data['diachi']=$_POST['diachigiao'].', '.$_SESSION['diachigiao'];
        else
            $data['diachi']=$_SESSION['diachigiao'];
        $data['email']=$_POST['email'];
        $data['gioitinh']=$_POST['gioitinh'];
        $data['noidung']=$_POST['noidung'];     
        $data['goitruoc']=$_POST['goitruoc'];   
        $data['xuathd']=$_POST['xuathd'];
        $data['tencty']=$_POST['tencty'];
        $data['diachicty']=$_POST['diachicty'];
        $data['mast']=$_POST['mast'];
        $data['diachigiao']=$data['diachi'];
        $_SESSION['diachi_dh']=$diachi;
    $hoten = trim(strip_tags($hoten));
    $dienthoai = trim(strip_tags($dienthoai));  
    $diachi = trim(strip_tags($diachi));    
    $email = trim(strip_tags($email));  
    $noidung = trim(strip_tags($noidung));  

    if (get_magic_quotes_gpc()==false) {
        $hoten = mysql_real_escape_string($hoten);
        $dienthoai = mysql_real_escape_string($dienthoai);
        $diachi = mysql_real_escape_string($diachi);
        $email = mysql_real_escape_string($email);
        $noidung = mysql_real_escape_string($noidung);                      
    }
    $coloi=false;       
        
    if ($coloi==FALSE) {
        $d->setTable('thuoctinh');
        $d->setWhere('id', $id);
        $d->update($data);
        $_SESSION['diachi_dh']=$data['diachi'];
        redirect("gio-hang.html");
    }
}

?>