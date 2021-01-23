let contcard = document.getElementById('contcard')
let cardd = document.getElementById('cardd')
console.log(contcard,cardd);


// motion
contcard.addEventListener('mousemove',(e) =>{
   let xAxis= (window.innerWidth / 2 - e.pageX) / 8;
   let yAxis= (window.innerHeight / 2 - e.pageY) / 8;
 
   cardd.style.transform= `rotateY(${xAxis}deg) rotateX(${yAxis}deg) rotateZ(-1deg)`
  
})

// back to normal
//contcard.addEventListener('mouseleave',(e) =>{
  //  cardd.style.transform= `rotateY(0deg) rotateX(0deg) `
//})




//sitcky
//let menu = document.querySelector('.secNavwrapper')
//let sticky = menu.offsetTop
//console.log(sticky);
//
//window.onscroll= ()=>{
  //if (window.pageYOffset >= sticky) {
  //   menu.classList.add('sticky')
  //} else {
  //  menu.classList.remove('sticky')
  //}
//}

