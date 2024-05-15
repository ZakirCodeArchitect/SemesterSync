var allowedUsers = ["Zakir", "Hajra"]; // List of allowed users

function login() {
    var username = document.getElementById("usernameInput").value;
    if (allowedUsers.includes(username)) {
        // Redirect to dashboard or desired page
        window.location.href = "./desktop-2.html";
    } else {
        alert("Invalid username. Please try again.");
    }
}

var logoText = document.getElementById("logoText");
if (logoText) {
    logoText.addEventListener("click", function (e) {
        window.location.href = "./desktop-2.html";
    });
}

var buttonPrimaryContainer = document.getElementById("buttonPrimaryContainer");
if (buttonPrimaryContainer) {
    buttonPrimaryContainer.addEventListener("click", function (e) {
        window.location.href = "./desktop-2.html";
    });
}

var buttonPrimaryContainer1 = document.getElementById("buttonPrimaryContainer1");
if (buttonPrimaryContainer1) {
    buttonPrimaryContainer1.addEventListener("click", function (e) {
        window.location.href = "./desktop-2.html";
    });
}
