function validform() {

    var a = document.forms["my-form"]["full-name"].value;
    var b = document.forms["my-form"]["email-address"].value;
    var c = document.forms["my-form"]["password"].value;
    var d = document.forms["my-form"]["address"].value;
    var e = document.forms["my-form"]["city"].value;

    if (a == null || a == "") {
        alert("Please Enter Your Full Name");
        return false;
    } else if (b == null || b == "") {
        alert("Please Enter Your Email Address");
        return false;
    } else if (c == null || c == "") {
        alert("Please Enter Your Password");
        return false;
    } else if (d == null || d == "") {
        alert("Please Enter Your Address");
        return false;
    } else if (e == null || e == "") {
        alert("Please Enter Your City");
        return false;
    }

}

// form upload foto ktp
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});