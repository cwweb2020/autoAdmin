$(document).ready(function (e) { 

  
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


 


  });