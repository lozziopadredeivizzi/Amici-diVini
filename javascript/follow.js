const segui = document.getElementById("follow");
const followers = document.getElementById("followersNumber");

segui.addEventListener("click", function () {
    const testo = segui.innerHTML;
    const followersNumStringa = followers.innerHTML;
    let followersInt = parseInt(followersNumStringa, 10);

    if(testo === "Segui"){
        segui.innerHTML = "Seguito";
        followersInt++;
        followers.innerHTML = followersInt.toString();
    }
    else if (testo === "Seguito"){
        segui.innerHTML = "Segui";
        followersInt--;
        followers.innerHTML = followersInt.toString();
    }
})