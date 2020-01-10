function Myfunction() {
    var name = $("#name").val();
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    if (name == '' || password == '' || cpassword == '') {
      alert("Please fill all fields...!!!!!!");
    } else if (!(password).match(cpassword)) {
      alert("Your passwords don't match. Try again?");
    } else {
      $.post("test.php", {
        name1: name,
        password1: password
        complete:
        function () {
           window.location = "test.php";
       }
      },
    );
    }
};
