//Memunculkan modal konfirmasi dan menutup modal pembayaran
function showKonfirmasiForm() {
    $('#bayarModal').fadeOut('fast', function () {
        $('.konfirmasi-bayar').fadeIn('fast');
        $('.modal-title').html('Konfirmasi Pembayaran');
    });
    $('.error').removeClass('alert alert-danger').html('');
}

// Untuk membuka modal dalam modal, dikondisi itu untuk modal konfirmasi pembayaran
function openKonfirmasiModal() {
    showKonfirmasiForm();
    setTimeout(function () {
        $('#konfirmasiModal').modal('show');
    }, 230);

}

