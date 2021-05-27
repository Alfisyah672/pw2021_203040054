<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_tubes_203040054');
}

function query($query)
{
  // Query isi tabel mahasiswa
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang di pilih
  if ($error == 4) {
    // echo "<script> 
    //           alert('pilih gambar terlebih dahulu!');
    //       </script>";
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script> 
              alert('Yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script> 
              alert('Yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file
  // maksimal 5mb

  if ($ukuran_file > 5000000) {
    echo "<script> 
              alert('Ukuran file terlalu besar!');
          </script>";
    return false;
  }
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'asset/img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{

  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  // $gambar = htmlspecialchars($data['gambar']);
  $harga = htmlspecialchars($data['harga']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $stok = htmlspecialchars($data['stok']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO
            fashion
            VALUES
            (null, '$nama', '$gambar', '$harga', '$deskripsi', '$stok')";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  $fhs = query("SELECT * FROM fashion WHERE id = $id");
  if ($fhs['gambar'] != 'nophoto.jpg') {
    unlink('asset/img/' . $fhs['gambar']);
  }

  mysqli_query($conn, "DELETE FROM fashion WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function ubah($data)
{

  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $harga = htmlspecialchars($data['harga']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $stok = htmlspecialchars($data['stok']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nophoto.jpg') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE fashion SET 
            nama = '$nama',
            gambar = '$gambar',
            harga = '$harga',
            deskripsi = '$deskripsi',
            stok = '$stok'
            WHERE id = $id";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM fashion
              WHERE nama LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function LoginAdmin($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek username
  if ($loginadmin = query("SELECT * FROM loginadmin WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $loginadmin['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: admin.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
          alert('username / password tidak boleh kosong!');
          document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username nya sudah ada di database
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasi.php';
            </script>";
    return false;
  }

  // jika konfirmasi pass tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi password tidak sesuai!!');
            document.location.href = 'registrasi.php';
            </script>";
    return false;
  }
  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasi.php';
            </script>";
    return false;
  }
  // jika username dan pass nya udah sesuai
  // enkripsi pass
  $pass_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
            VALUES 
            (null, '$username', '$pass_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function registrasiAdmin($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
          alert('username / password tidak boleh kosong!');
          document.location.href = 'registrasiAdmin.php';
          </script>";
    return false;
  }

  // jika username nya sudah ada di database
  if (query("SELECT * FROM loginadmin WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'registrasiAdmin.php';
            </script>";
    return false;
  }

  // jika konfirmasi pass tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Konfirmasi password tidak sesuai!!');
            document.location.href = 'registrasiAdmin.php';
            </script>";
    return false;
  }
  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
            document.location.href = 'registrasiAdmin.php';
            </script>";
    return false;
  }
  // jika username dan pass nya udah sesuai
  // enkripsi pass
  $pass_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO loginadmin
            VALUES 
            (null, '$username', '$pass_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
