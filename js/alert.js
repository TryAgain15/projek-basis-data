function cekform() {
  setuju = document.getElementById("setuju");

  var setuju = document.getElementById("setuju").checked;

  if (setuju == "") {
    alert("centang terlebih dahulu untuk menyetujui persyaratan!");
    return false;
  } else {
    alert("Terima kasih telah memesan tiket");
    return true;
  }
}
