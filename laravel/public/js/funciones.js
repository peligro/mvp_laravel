 
function cerrarSesion(ruta)
{
  
    swal({
        title: '¿Realmente desea cerrar la sesión?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#4fa7f3',
        cancelButtonColor: '#d57171',
        confirmButtonText: 'SI',
        cancelButtonText: 'NO' 
    }).then(function ( ) {
        window.location=ruta;
    }).catch(()=>{});
}