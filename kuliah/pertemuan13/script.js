function previewImage() {
  const gambar = document.querySelector('#gambar');
  const imgPreview = document.querySelector('#img-preview');
  imgPreview.style.display = 'block';
  var oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}
