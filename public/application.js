/* $(document).ready(function (e) { 

  
  let btnrojo = document.querySelector('.rojo')
  let btnnegro = document.querySelector('.negro')
  btnnegro.addEventListener('click',function () {  
      btnnegro.style.backgroundColor='white';
      btnrojo.style.backgroundColor='lightgrey';
  })

  btnrojo.addEventListener('click',function () {  
    btnnegro.style.backgroundColor='lightgrey';
    btnrojo.style.backgroundColor='white';
})



  }); */

  // MENU LATERAL 
  let titulo = document.getElementById('tituloproducto')
  let listado = document.querySelectorAll('.cat')
  let notebook = document.querySelector('.cat1')

  notebook.style.backgroundColor = 'grey'

  console.log(listado);
  for (let index = 0; index < listado.length; index++) {
    const element = listado[index];
    element.addEventListener('click',function (e) { 
       
        titulo.innerHTML=this.innerHTML
        for (let index = 0; index < listado.length; index++) {
          const element = listado[index];
          element.style.backgroundColor = null
         
      }
      this.style.backgroundColor = 'grey'
      
     })
     
   }

// move 
(function () { 
  $('#produp').on('click',function(){
    var position= $('.titulodelista').offset().top;
    $('bod,html').animate({
        scrollTop:position + 'px'
    },1300);
    cerrar.Close();
});

$('#whoup').on('click',function(){
  var position= $('#whodown').offset().top;
  $('bod,html').animate({
      scrollTop:position + 'px'
  },1100);
  cerrar.Close();
});

 })()

 // Iniciar AOS

 AOS.init({
      delay: 100,
      duration:1700
 });

// ____________________________








