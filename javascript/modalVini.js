function createAndShowModalWine(nomeVino) {
  // Creazione dell'elemento modal
  const modal = document.createElement('div');
  modal.className = 'modal';
  modal.innerHTML = `
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Dettagli Vino</h5>
              </div>
              <div class="modal-body">
                  <p>Nome Vino: ${nomeVino}</p>
                  <p>Tipo Vino: <p>
                  <p>Cantina: <p>
                  <p>Grado alcolemico: <p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
              </div>
          </div>
      </div>
  `;

  document.body.appendChild(modal);

  // Inizializzazione del modal di Bootstrap
  $(modal).modal('show');
}

const immaginiVino = document.querySelectorAll('.vino');
immaginiVino.forEach(function (immagine) {
  immagine.addEventListener('click', function () {
      // Ottieni il nome del vino dalla sezione corrispondente
      const nomeVino = this.closest('.post').querySelector('.nomevino').innerText.replace('Nome Vino: ', '');
      createAndShowModalWine(nomeVino);
  });
});