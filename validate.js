function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "pawones@gmail.com" && password == "1234") {
        window.location.href = "admin.html";

    }
    else if (username == "john@gmail.com" && password == "1234") {
        window.location.href = "userindex.html";

    }
    else {
        alert("Account not found! Please sign up first!!")
    }

}