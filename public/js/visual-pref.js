

fetch('/profile/stampa').then(onFavResp).then(onJSONFav);


function onFavResp(response) {
    console.log('Risposta di visualizzazione ricevuta');
    return response.json();
}

function onJSONFav(json) {
    const library = document.querySelector('#album-view');
	library.innerHTML = '';
		for(const element of json){
			const album = document.createElement('div');
			album.classList.add('album');
			//artista
			const artista = document.createElement('div');
			artista.classList.add('artista');
			artista.innerHTML = element.autore;
			//immagine copertina album
			const img = document.createElement('img');
			var cover_url = element.immagine;
			img.src = cover_url;
			//nome canzone
			const nome = document.createElement('div');
        	nome.innerHTML = element.canzone;
			nome.classList.add('canzone');
			//link canzone
			const link = document.createElement('a');
        	link.setAttribute('href',element.link);
        	link.innerHTML = 'ascolta canzone';
			//bottone elimina dei preferiti
			const button_del = document.createElement('button');
			button_del.innerHTML = 'Elimina preferito';
			button_del.classList.add('btn-danger');
			
			
			

			album.appendChild(artista)
			album.appendChild(nome);
			album.appendChild(img);
			album.appendChild(link);
			album.appendChild(button_del);

			
			
			library.appendChild(album);
			

		}

		function DelChoice(event) {
		  let canzone = event.currentTarget.parentNode.childNodes[1].innerText;
		  fetch("/profile/rimuovi/"+canzone).then(onBack).then(onFavorite);
		}

		const choice_del = document.querySelectorAll('button');
        for(const choice of choice_del){
        choice.addEventListener("click",DelChoice);
        }  
	

function onBack(response) {
		
	  }
function onFavorite(json) {
		location.reload();
	  }
}
