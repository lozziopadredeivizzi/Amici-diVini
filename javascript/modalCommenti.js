function createAndShowModalComments() {
    // Creazione dell'elemento modal
    const modal = document.createElement('div');
    modal.className = 'modal';
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Commenti</h5>
                </div>
                <div class="modal-body">
                    <textarea rows="4" cols="50" placeholder="Inserisci il tuo commento..."></textarea> 
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
  
  const commenti = document.querySelectorAll('.commenti');
  commenti.forEach(function (button) {
    button.addEventListener('click', function () {
        // Ottieni il nome del vino dalla sezione corrispondente
        createAndShowModalComments();
    });
  });