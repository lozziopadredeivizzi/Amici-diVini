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
                    <form action = "" method = "POST">
                        <label for="commento">Scrivi un commento:</label><textarea name="commento"
                        id="commento" cols="50" rows="4" palceholder ="inserisci il tuo commento..." required ></textarea>
                        <input type="submit" name="postacommento" id="postacommento" value="Commenta">
                    </form>
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