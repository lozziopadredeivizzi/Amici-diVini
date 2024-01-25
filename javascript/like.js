
const ratingFieldset = document.getElementById("ValutazioneVino");
const radioButtons = ratingFieldset.querySelectorAll("input[type='radio']");
const labels = ratingFieldset.querySelectorAll("label");

radioButtons.forEach((radio, index) => {
    radio.addEventListener("change", function () {
        // Cambia l'immagine delle stelle quando il radio button viene selezionato
        labels.forEach((label, i) => {
            label.innerHTML = `<img src="${i <= index ? './img/fullglass.png' : './img/emptyglass.png'}" alt="rate ${i + 1}">`;
        });
    });
});