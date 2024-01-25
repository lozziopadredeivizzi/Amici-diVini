function confrontaPassword() {
    var input1 = document.getElementById('password').value;
    var input2 = document.getElementById('verificaPassword').value;

    if (input1 !== input2) {
        alert("la password non corrisponde.");
    }
}