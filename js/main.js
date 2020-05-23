$(document).ready(function () {

    $('.third-button').on('click', function () {
  
      $('.animated-icon3').toggleClass('open');
    });
  });

  function playTrailer(x){  

    let params = x.split(",");
    console.log(params[0] +"      "+params[1]);

    let name = params[0];
    let year = params[1];

    let url = 'trailer/trailer.php?name='+name+'&year='+year;

    window.location = url;

}

$('html').bind('keypress', function(e)
{
   if(e.keyCode == 13)
   {
      var field = document.createElement('input');
      field.setAttribute('type', 'text');
      document.body.appendChild(field);
      
      setTimeout(function() {
          field.focus();
          setTimeout(function() {
              field.setAttribute('style', 'display:none;');
          }, 50);
      }, 50);
        return false;

   }
});