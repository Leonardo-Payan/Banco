function pagina(cual) 
{
  window.open(`${cual}.php`,"_self");
}
function confirmar(cual)
{
  if(confirm("¿Estás seguro de que deseas realizar esta operación?"))
  {
    pagina(cual);
  }
}
