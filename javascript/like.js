const likeButton = document.getElementById("like");

likeButton.addEventListener("click", function(){
    const likeimage = document.getElementById("likeimage");

    likeimage.src = "./img/likeVino.gif";

    function handleLoad() {
        // Rimuovi l'evento 'load' dopo la prima riproduzione
        likeimage.removeEventListener('load', handleLoad);
    }

    likeimage.addEventListener('load', handleLoad);
});