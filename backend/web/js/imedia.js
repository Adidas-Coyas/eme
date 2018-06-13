// Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("drop-list");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
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

/* controlar o simbolo baixo e lado-esquerdo do menu paginas*/
$('#pagina').click(function () {
    //

    if($('#flexa').attr('class') == 'fas fa-chevron-down') {
        $('#flexa').removeClass();
        $('#flexa').addClass("fas fa-chevron-right");
    } else if($('#flexa').attr('class') == 'fas fa-chevron-right') {
        $('#flexa').removeClass();
       $('#flexa').addClass("fas fa-chevron-down");
    }
});

$('.delete').onsubmit(function () {
    
});

/**
 * Override the default yii confirm dialog. This function is
 * called by yii when a confirmation is requested.
 *
 * @param message the message to display
 * @param okCallback triggered when confirmation is true
 * @param cancelCallback callback triggered when cancelled
 */
yii.confirm = function (message, okCallback, cancelCallback) {
    swal({
        title: message,
        type: 'warning',
        showCancelButton: true,
        closeOnConfirm: true,
        allowOutsideClick: true
    }, okCallback);
};





