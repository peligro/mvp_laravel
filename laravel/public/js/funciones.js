function eliminar(ruta)
{
  
    swal({
        title: '¿Realmente desea eliminar este registro?',
        //text: "You won't be able to revert this!",
        type: 'error',
        showCancelButton: true,
        confirmButtonColor: '#4fa7f3',
        cancelButtonColor: '#d57171',
        confirmButtonText: 'SI',
        cancelButtonText: 'NO' 
    }).then(function ( ) {
        window.location=ruta;
    }).catch(()=>{});
}
function cerrarSesion(ruta)
{
  
    swal({
        title: '¿Realmente desea cerrar la sesión?',
        //text: "You won't be able to revert this!",
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
function abrir_modal(title, accion, campos, dato)
{
    document.getElementById("modal_title").innerHTML=title;
    document.getElementById("accion").value=accion;
    if(campos.length>=1)
        {
          campos.forEach(
            (campo) => {
              document.getElementById(campo).value=dato[campo];
            }
            );
            document.getElementById("id").value=dato['id'];
        }else
        {
          document.form.reset();
        }  
}