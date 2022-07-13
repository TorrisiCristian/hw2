//Codice dedicato alla chiamata API REST di Spotify partendo da Javascript per poi passare in PHP mediante fetch

//Token per la transazione(differenza rispetto al PHP)
const csrfToken = document.querySelector("[name=csrf-token][content]").content;



let canzoni = [];
let indice_max;
function onJsonSpotify(json) {
    //Variabili utili
    console.log('JSON Spotify ricevuto');
    console.log(json);
    const items = json.tracks.items;
    //Stampo tutti i risultati della ricerca
   // console.log(items);
    indice_max = json.tracks.limit;
    //console.log(indice_max);
     //Creo l'area dedicata alla ricerca
     const bacheca = document.querySelector('#album-view');
     bacheca.innerHTML= '';
   for (let i = 0; i < indice_max; i++) {

        //Variabile riferito all'artista
        var artist_name = items[i].album.artists[0].name;
        //Variabile rifereita all'url dell'immagine dell'album
         var url_album_image = items[i].album.images[0].url;
        //Varibile riferita all'url della canzone nel sito di Spotify
          var url_song = items[i].external_urls.spotify;
        
        //Const riferito al nome della canzone
        const song_name = items[i].name;
        

        canzoni[i] = song_name;
        
       
        //Creazione foto album
        const album = document.createElement('div');
        album.classList.add('album');
        const album_img = document.createElement('img');
        album_img.src = url_album_image;
        const artista = document.createElement('div');
        artista.innerHTML = artist_name
        //Creazione nome artista
        artista.setAttribute('class','artista')
        const nome = document.createElement('div');
        nome.innerHTML = song_name;
        nome.setAttribute('class','canzone')
        //Creazione link canzone
        const url_canzone = document.createElement('a');
        url_canzone.setAttribute('href',url_song);
        url_canzone.innerHTML = 'link canzone';
        //Creazione Bottone
        const button_pref = document.createElement('button');
        button_pref.innerHTML = 'Aggiungi preferiti';
        button_pref.classList.add('btn-secondary');
      //Aggiungi alla Bacheca  
      album.appendChild(artista);
      album.appendChild(nome);
      album.appendChild(album_img);
      album.appendChild(url_canzone);
      album.appendChild(button_pref);
      bacheca.appendChild(album);
        } 
        function Choice(event) {
          
          let canzone = event.currentTarget.parentNode.childNodes[1].innerText;
          let artista = event.currentTarget.parentNode.childNodes[0].innerText
          let img = event.currentTarget.parentNode.childNodes[2].src;
          let link = event.currentTarget.parentNode.childNodes[3].href;
          
          let data = {
            song : canzone,
            artist : artista,
            img: img,
            link: link,
          };
          
          const input=JSON.stringify(data);

          console.log(input);
          //Fetch per aggiungiungere a preferiti(differenza rispetto al HW1)
          fetch("/cerca/aggiungi",{
            method: 'POST',
            body: input,
            headers:{
              "Content-Type": "application/json",
              "Accept": "application/json, text-plain, */*",
              "X-Requested-With": "XMLHttpRequest",
              "X-CSRF-TOKEN": csrfToken
            },
          }).then(onBack).then(onFavorite);

          
        }
        //Evento di aggiunta a preferiti
        const choice_pref = document.querySelectorAll('button');
        for(const choice of choice_pref){
          choice.addEventListener("click",Choice);
        }   
}
function onBack(response) {
  return response.text()
}
function onFavorite() {
}
 
function onResponse(response) {
  console.log('Risposta ricevuta');
  return  response.json();
}
function Collect(event) {
    //Evito che il submit ricarichi la pagina
    event.preventDefault();
    const content = document.querySelector('#autore').value;
     //Verifica inserimento
     if (content) {
       const text_search = encodeURIComponent(content);
	    console.log('Ricerca di elementi: ' + text_search);

      fetch("/cerca/" + content ,{mode: 'no-cors'}).then(onResponse).then(onJsonSpotify);    
     }
     
   
      
}
//Richiamo la funzione CollectFromForm() per raccogliere i parametri dal form di controll-form.js
const form = document.querySelector("#spo");
form .addEventListener('submit',Collect);
