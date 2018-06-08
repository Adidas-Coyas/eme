/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("drop-list");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    //this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

/* definir o titulo do cabeçalho de notificões*/
if ($('#title').text() == 'Posts') {
   // alert('posts');
    $('#slogan').html("Veja e crie Notiçias");
}else if ($('#title').text() == 'Dashboard') {
    $('#slogan').html("Gerencie seu site");
   // alert('dashboard');
}else if ($('#title').text() == 'Usuarios') {
     $('#slogan').html("Gerencie seus usuarios");
    //alert('usuarios');
}

/* controlar o simbolo baoxo e lado-esquerdo do menu paginas*/
$('#pagina').click(function () {
   // alert($('#flexa').attr('class'));
    //

    if($('#flexa').attr('class') == 'fas fa-chevron-down') {
        $('#flexa').removeClass();
        $('#flexa').addClass("fas fa-chevron-right");
    } else if($('#flexa').attr('class') == 'fas fa-chevron-right') {
        $('#flexa').removeClass();
       $('#flexa').addClass("fas fa-chevron-down");
    }
});

function compare (string1, string2){
    var n = string1.localeCompare(string2);

    return n;
}
/* controlar os icon do menu detalhes( a faixa preta) */
$(document).ready(function() {
   // if (compare($('#iconCabe').attr('class'), 'fas fa-cog')){

    //}
   // alert('post:');

  /*  alert($('#i').attr('class'));
    $('#iconCabe').removeClass();
    alert($('#iconCabe').attr('class'));
    $('#iconCabe').addClass("fas fa-pencil-alt");
    alert($('#iconCabe').attr('class'));*/

   /* $('#posts').click(function () {
        var i;
        for (i = 0; i < 2000; i++) {
            console.log("ola");
        }

        alert($('#i').attr('class'));
        $('#iconCabe').removeClass();
        alert($('#iconCabe').attr('class'));
        $('#iconCabe').addClass("fas fa-pencil-alt");
        alert($('#iconCabe').attr('class'));
    });

});*/
/*$( document ).ready(function() {
    alert('post:'.$('#title').attr('id'));
    if ($('#title').attr('id') == 'Posts') {
        alert('post:'.$('#title').attr('id'));

       // $('#iconCabe').removeClass();
       // $('#iconCabe').addClass("fas fa-pencil-alt");
    }else if($('#title').attr('id') == 'Usuarios'){
       // $('#iconCabe').removeClass();
       // $('#iconCabe').addClass("fas fa-user");
        alert('user:'.$('#title').attr('id'));
    }
});

  /*  $('#posts').click(function () {
        // alert($('#flexa').attr('class'));
        $( document ).ready(function() {
            $('#iconCabe').removeClass();
        $('#iconCabe').addClass("fas fa-pencil-alt");
        });

    });
    $('#users').click(function () {
        // alert($('#flexa').attr('class'));
        $( document ).ready(function() {
            $('#iconCabe').removeClass();
            $('#iconCabe').addClass("fas fa-user");
        });

    });*/


