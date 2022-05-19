<?php 
// Array Associative
// Array yang key nya ber-asosiasi / berpasangan dengan string 

$mahasiswa = [
  [
    "nama" => "Sandhika Galih", 
    "npm" => "043040023", 
    "email" => "sandhikagalih@unpas.ac.id", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Doddy Ferdiansyah", 
    "npm" => "103040001", 
    "email" => "doddy@gmail.com", 
    "jurusan" => "Teknik Mesin"
  ],
  [
    "nama" => "Erik", 
    "npm" => "133040321", 
    "email" => "erik@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Anggoro Ari", 
    "email" => "anggoro@gmail.com", 
    "npm" => "103040123", 
    "jurusan" => "Teknik Industri"
  ],
];
  
  // var_dump($mahasiswa[2]);
  ?>

<?php foreach($mahasiswa as $mhs) { ?>
  <ul>
    <li>Nama : <?php echo $mhs["nama"]; ?></li>
    <li>NPM : <?php echo $mhs["npm"]; ?></li>
    <li>Email : <?php echo $mhs["email"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
  </ul>
<?php } ?>