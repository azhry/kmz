<?php
    include'koneksi.php';
    $id=$_GET['id_explicit'];

    $query="SELECT * FROM explicit where id_explicit='$id'";
    $sql=mysqli_query($koneksi,$query);
 // $query = mysql_query ("SELECT * FROM explicit where id=" . $_REQUEST['id_explicit'],$koneksi);

if ($row = mysqli_fetch_assoc($sql)) 
{
 $filedata = $row['dokumen'];
}
 header('Content-Description: File Transfer');
 header('Content-Type : application/octet-stream');
 header('Content-Disposition: attachment; filename=' .basename($filedata));
 header('Content-Transfer-Encoding: binary');
 header('Expires: 0');
 header('Cache-Control: private');
 header('Pragme: private');
 header('Content-length: ' . filesize($filedata));
 ob_clean();
 flush();
 readfile($filedata); 
exit;
?>