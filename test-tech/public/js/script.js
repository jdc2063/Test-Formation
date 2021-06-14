function NewMessage() {
    var id = document.querySelector('#etudiant').value;
    const token = document.querySelector('meta[name="csrf-token"]').content;
    const url = '/message';
    fetch(url, {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json'
        },
        method: 'post',
        body: JSON.stringify({ //Nous faisons donc une requète à l'url /select
            id: id
        })
    })
        .then(response =>
            response.json())
            
        .then(data => {
            var convention_name = document.querySelector('#convention');
            convention_name.value = data.convention.nom;
            
            var attestation = document.querySelector('#attestation');
            attestation.removeAttribute('readonly');
            var message = "Bonjour " + data.etudiant.nom + " " + data.etudiant.prenom + ",\n\n\n"
            + "Vous avez suivi " + data.convention.nbHeur
            if (data.convention.nbHeur == 1) {
                message = message + " heure"
            } else {
                message = message + " heures"
            }
            message = message + " de formation chez FormationPlus.\n\n"
            + "Pouvez-vous nous retourner ce mail avec la pièce jointe signée.\n\n\n"
            + "Cordialement,\n\n"
            + "FormationPlus";

            attestation.value = message;
        })
        .catch(err => {
            console.log("Error Reading data " + err)
    })
}
