<?php 
// Representasi Data Mahasiswa

$mahasiswa = [
  ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
  ["Doddy Ferdiansyah", "103040001", "doddy@gmail.com", "Teknik Mesin"],
  ["Erik", "133040321", "erik@mail.unpas.ac.id", "Teknik Informatika"],
  ["Anggoro Ari", "anggoro@gmail.com", "103040123", "Teknik Industri"]
];

?>

<?php foreach($mahasiswa as $mhs) { ?>
  <ul>
    <li>Nama : <?php echo $mhs[0]; ?></li>
    <li>NPM : <?php echo $mhs[1]; ?></li>
    <li>Email : <?php echo $mhs[2]; ?></li>
    <li>Jurusan : <?php echo $mhs[3]; ?></li>
  </ul>
<?php } ?>

