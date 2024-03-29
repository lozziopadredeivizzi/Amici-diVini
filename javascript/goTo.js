const elemNewPost = document.getElementById("newpost");
const elemEditProfile = document.getElementById("editprofile");
const elemBackToHome = document.getElementById("backtohome");
const elemBackToProfile = document.getElementById("backtoprofile");
const elemGoToNotify = document.getElementById("gotonotify");
const elemGoToFollowers = document.getElementById("followers");
const elemViewProfile = document.querySelectorAll(".viewprofile");
const elemViewPosts = document.querySelectorAll(".gotoposts");

if (elemBackToProfile !== null) {
    elemBackToProfile.addEventListener("click", function () {
        window.location.href = "personalProfile.php";
    })
}

if (elemBackToHome !== null) {
    elemBackToHome.addEventListener("click", function () {
        window.location.href = "homepage.html";
    })
}

if (elemNewPost !== null) {
    elemNewPost.addEventListener("click", function () {
        window.location.href = "inseriscipost.html";
    })
}

if (elemEditProfile !== null) {
    elemEditProfile.addEventListener("click", function () {
        window.location.href = "modificaprofilo.html";
    })
}

if (elemGoToNotify !== null) {
    elemGoToNotify.addEventListener("click", function () {
        window.location.href = "notifiche.html.";
    })
}

if (elemGoToFollowers !== null) {
    elemGoToFollowers.addEventListener("click", function () {
        window.location.href = "followers.html";
    })
}

if (elemViewProfile !== null) {
    elemViewProfile.forEach(function (button) {
        button.addEventListener("click", function () {
            window.location.href = "userprofile.html";
        })

    })
}

if (elemViewPosts !== null) {
    elemViewPosts.forEach(function (td) {
        td.addEventListener("click", function () {
            window.location.href = "myPosts.html";
        })
    })

}

