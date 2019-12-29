$(function() {
    $('.modalUbah').on('click', function() {
        $('#formModalLabel').html('Update Data Motor');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost:8888/sevva/sevva-love/public/motor/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                $('#id').val(data.id_motor);
                $('#title').val(data.nama);
                $('#brand').val(data.id_brand);
                $('#type').val(data.id_tipe);
                $('#city').val(data.id_kota);
                $('#price').val(data.harga);
                $('#desc').val(data.description);

            }
        });
    });
});

// form upload foto ktp
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

console.log('ok');

// function validform() {

//     var a = document.forms["my-form"]["full-name"].value;
//     var b = document.forms["my-form"]["email-address"].value;
//     var c = document.forms["my-form"]["password"].value;
//     var d = document.forms["my-form"]["address"].value;
//     var e = document.forms["my-form"]["city"].value;

//     if (a == null || a == "") {
//         alert("Please Enter Your Full Name");
//         return false;
//     } else if (b == null || b == "") {
//         alert("Please Enter Your Email Address");
//         return false;
//     } else if (c == null || c == "") {
//         alert("Please Enter Your Password");
//         return false;
//     } else if (d == null || d == "") {
//         alert("Please Enter Your Address");
//         return false;
//     } else if (e == null || e == "") {
//         alert("Please Enter Your City");
//         return false;
//     }

// }

// function totalPayment() {
//     var orderDate = document.forms[""];
// }