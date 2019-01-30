$(document).ready(function(){
  $.ajax({
    url: 'http://localhost/php-basket/data.php',
    method: 'GET',
    success: function(data){
      var players = JSON.parse(data);
      printData(players);
    },
    error: function(){
      alert('Si è verificato un errore');
    }
  });
});

function printData(players){
  for (var i = 0; i < players.length; i++) {
    var giocatore = players[i];
    $('.container').append(`
      <ul>
        <li>
          ` + giocatore.codiceGiocatore +`
          <ul>
            <li>punti: `+ giocatore.punti +` </li>
            <li>rimbalzi: `+ giocatore.rimbalzi +` </li>
            <li>falli:` + giocatore.falli +` </li>
            <li>2punti: `+ giocatore['2punti'] +` </li>
          </ul>
        </li>


      </ul>
    `);
  }
}
