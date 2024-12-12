<?php

// Fungsi menampilkan data
function select($query)
{
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows; // Mengembalikan data, bukan resource
}
//fungsi menambahkan
function create_data_anggota($post)
{
    global $db;

    $nama   = strip_tags($post['nama']);
    $jk     = strip_tags($post['jk']);
    $kelas  = strip_tags($post['kelas']);
    $jurusan = strip_tags($post['jurusan']);
    $alamat = strip_tags($post['alamat']);
    $no_tlp = strip_tags($post['no_tlp']);

    // Query untuk menambahkan data anggota
    $query = "INSERT INTO data_anggota (nama, jk, kelas, jurusan, alamat, no_tlp)
              VALUES ('$nama', '$jk', '$kelas', '$jurusan', '$alamat', '$no_tlp')";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

function update_data_anggota($post)
{
    global $db;

    $id_anggota = strip_tags($post['id_anggota']);
    $nama       = strip_tags($post['nama']);
    $jk         = strip_tags($post['jk']);
    $kelas      = strip_tags($post['kelas']);
    $jurusan    = strip_tags($post['jurusan']);
    $alamat     = strip_tags($post['alamat']);
    $no_tlp     = strip_tags($post['no_tlp']);

    // Query untuk memperbarui data anggota
    $query = "UPDATE data_anggota SET nama = '$nama',jk = '$jk',kelas = '$kelas',jurusan = '$jurusan',alamat = '$alamat',no_tlp = '$no_tlp'
              WHERE id_anggota = '$id_anggota'";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
// Fungsi untuk menghapus data anggota
function delete_data_anggota($id_anggota)
{
    global $db;

    // Query untuk menghapus data anggota
    $query = "DELETE FROM data_anggota WHERE id_anggota = '$id_anggota'";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
//fungsi menambahkan
function create_data_kepengurusan($post)
{
    global $db;

    $nama_anggota  = strip_tags($post['nama_anggota']);
    $jabatan       = strip_tags($post['jabatan']);
    $thn_memulai   = strip_tags($post['thn_memulai']);
    $thn_selesai   = strip_tags($post['thn_selesai']);

    // Query untuk menambahkan data kepengurusan
    $query = "INSERT INTO data_kepengurusan (nama_anggota, jabatan, thn_memulai, thn_selesai)
              VALUES ('$nama_anggota', '$jabatan', '$thn_memulai', '$thn_selesai')";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
// fungsi meng update data kepengurusan
function update_data_kepengurusan($post)
{
    global $db;
    $id_kepengurusan = strip_tags($post['id_kepengurusan']);
    $nama_anggota  = strip_tags($post['nama_anggota']);
    $jabatan       = strip_tags($post['jabatan']);
    $thn_memulai   = strip_tags($post['thn_memulai']);
    $thn_selesai   = strip_tags($post['thn_selesai']);
    // Query untuk memperbarui data kepengurusan
    $query = "UPDATE data_kepengurusan SET nama_anggota = '$nama_anggota', jabatan = '$jabatan', thn_memulai = '$thn_memulai', thn_selesai = '$thn_selesai'
              WHERE id_kepengurusan = '$id_kepengurusan'";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
// Fungsi untuk menghapus data anggota
function delete_data_kepengurusan($id_kepengurusan)
{
    global $db;

    // Query untuk menghapus data anggota
    $query = "DELETE FROM data_kepengurusan WHERE id_kepengurusan = '$id_kepengurusan'";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
//fungsi menambahkan
function create_data_event($post)
{
    global $db;

    $nama_kegiatan  = strip_tags($post['nama_kegiatan']);
    $tgl_kegiatan   = strip_tags($post['tgl_kegiatan']);
    $lokasi_kegiatan = strip_tags($post['lokasi_kegiatan']);

    // Query untuk menambahkan data event
    $query = "INSERT INTO data_kegiatan_event (nama_kegiatan, tgl_kegiatan, lokasi_kegiatan)
              VALUES ('$nama_kegiatan', '$tgl_kegiatan', '$lokasi_kegiatan')";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
function update_data_event($post)
{
    global $db;
    $id_event         = strip_tags($post['id_event']);
    $nama_kegiatan    = strip_tags($post['nama_kegiatan']);
    $tgl_kegiatan     = strip_tags($post['tgl_kegiatan']);
    $lokasi_kegiatan  = strip_tags($post['lokasi_kegiatan']);
    
    // Query untuk memperbarui data event
    $query = "UPDATE data_kegiatan_event SET nama_kegiatan = '$nama_kegiatan', tgl_kegiatan = '$tgl_kegiatan', lokasi_kegiatan = '$lokasi_kegiatan'
              WHERE id_kegiatan = '$id_event'";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
// Fungsi untuk menghapus data 
function delete_data_kegiatan_event($id_kegiatan)
{
    global $db;

    // Query untuk menghapus data anggota
    $query = "DELETE FROM data_kegiatan_event WHERE id_kegiatan = '$id_kegiatan'";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function create_data_pelantikan($post)
{
    global $db;

    $nama_anggota  = strip_tags($post['nama_anggota']);
    $thn_pelantikan   = strip_tags($post['thn_pelantikan']);

    // Query untuk menambahkan data pelantikan
    $query = "INSERT INTO data_pelantikan (nama_anggota, thn_pelantikan)
              VALUES ('$nama_anggota', '$thn_pelantikan')";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

function update_data_pelantikan($post)
{
    global $db;
    $id_pelantikan    = strip_tags($post['id_pelantikan']);
    $nama_anggota     = strip_tags($post['nama_anggota']);
    $thn_pelantikan   = strip_tags($post['thn_pelantikan']);
    
    // Query untuk memperbarui data pelantikan
    $query = "UPDATE data_pelantikan SET nama_anggota = '$nama_anggota', thn_pelantikan = '$thn_pelantikan'
              WHERE id_pelantikan = '$id_pelantikan'";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

function delete_data_pelantikan($id_pelantikan)
{
    global $db;

    // Query untuk menghapus data pelantikan
    $query = "DELETE FROM data_pelantikan WHERE id_pelantikan ='$id_pelantikan'";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function create_data_Organisasi($post)
{
    global $db;

    $nama_anggota     = strip_tags($post['nama_anggota']);
    $nama_organisasi  = strip_tags($post['nama_organisasi']);
    $jabatan          = strip_tags($post['jabatan']);
    $asal_sekolah     = strip_tags($post['asal_sekolah']);

    // Query untuk menambahkan data organisasi
    $query = "INSERT INTO data_organisasi_luar (nama_anggota, nama_organisasi, jabatan, asal_sekolah)
              VALUES ('$nama_anggota', '$nama_organisasi', '$jabatan', '$asal_sekolah')";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

function update_data_Organisasi($post)
{
    global $db;
    
    $id_organisasi    = strip_tags($post['id_organisasi']);
    $nama_anggota     = strip_tags($post['nama_anggota']);
    $nama_organisasi  = strip_tags($post['nama_organisasi']);
    $jabatan          = strip_tags($post['nama_anggota']);
    $asal_sekolah     = strip_tags($post['asal_sekolah']);
    
    // Query untuk memperbarui data pelantikan
    $query = "UPDATE data_organisasi_luar SET nama_anggota = '$nama_anggota', nama_organisasi = '$nama_organisasi', jabatan = '$jabatan', asal_sekolah = '$asal_sekolah'
              WHERE id_organisasi = '$id_organisasi'";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

function delete_data_Organisasi($id_organisasi)
{
    global $db;

    // Query untuk menghapus data organisasi
    $query = "DELETE FROM data_organisasi_luar WHERE id_organisasi ='$id_organisasi'";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
//fungsi tambah akun
function create_akun($post)
{
     global $db;

     $nama    = strip_tags($post['nama']);
     $username   = strip_tags($post['username']);
     $email     = strip_tags($post['email']);
     $password = strip_tags($post['password']);
     $level   = strip_tags($post['level']);

    // enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);

// query tambah data
     $query = "INSERT INTO akun VALUES(null,'$nama','$username','$email','$password','$level')";
      
     mysqli_query( $db,$query);

     return mysqli_affected_rows($db);

}
//fungsi  ubah akun
function update_akun($post)
{
     global $db;
     
     $id_akun  = strip_tags($post['id_akun']);
     $nama    = strip_tags($post['nama']);
     $username   = strip_tags($post['username']);
     $email     = strip_tags($post['email']);
     $password = strip_tags($post['password']);
     $level   = strip_tags($post['level']);

     // query ubah data
     $query = " UPDATE akun SET nama= '$nama', username ='$username', email= '$email',password =
     '$password',level = '$level' WHERE id_akun = '$id_akun'";

     mysqli_query( $db,$query);

     return mysqli_affected_rows($db);
}
//fungsi menghapus akun
function delete_akun($id_akun)
{
     global $db;

     //query hapus data
     $query = "DELETE FROM akun WHERE id_akun = $id_akun";
     
     mysqli_query($db,$query);
     
     return mysqli_affected_rows($db);
}