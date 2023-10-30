/*@ Author: Liam Aga
 *  ID: 3050093
 * Lab 7, Password Verification
 */

document.addEventListener("DOMContentLoaded", function() {
    var submitButton = document.querySelector("button");

    submitButton.addEventListener("click", function() {
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;

        if (password1.length < 8 || password2.length < 8) {
            alert("Password must be at least eight characters long!");
        } else if (password1 !== password2) {
            alert("The two passwords do not match!");
        } else {
            alert("Two passwords are matched!");
        }
    });
});