<?php
 session_start();
include "koneksi.php";
    if (isset($_POST['masuk'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];

        $cek = mysqli_query($connect, "SELECT username, password, level, status_user FROM tbl_user WHERE username = '$user' AND password = '$pass'");
        $result = mysqli_num_rows($cek);
        $data = mysqli_fetch_array($cek);
        if ($result > 0) {
            if ($data['level']=='Penduduk') {
                $_SESSION['masuk'] = $user;
                if ($data['status_user']=='') {
                    header("location:index.php?notif=belum-valid");
                }else{
                    $_SESSION['masuk'] = $user;
                    header("location:dashboard_penduduk.php");
                }
            }elseif ($data['level']=='Admin') {
                $_SESSION['masuk'] = $user;
                header("location:dashboard.php");
            }elseif ($data['level']=='Kepala Desa') {
                $_SESSION['masuk'] = $user;
                header("location:dashboard_kades.php");
            }
        }else if ($result ==0) {
            echo "<script>alert('Proses Login Gagal, Email / Username Atau Password Yang Anda Masukkan Tidak Terdaftar');
            document.location.href='index.php'</script>\n";
            }
        }   
?>