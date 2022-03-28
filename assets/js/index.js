const minus1 = document.querySelector('.minus1');
const shows1 = document.querySelector('.shows1').value;
const plus1 = document.querySelector('.plus1');
const minus2 = document.querySelector('.minus2');
const shows2 = document.querySelector('.shows2').value;
const plus2 = document.querySelector('.plus2');
const minus3 = document.querySelector('.minus3');
const shows3 = document.querySelector('.shows3').value;
const plus3 = document.querySelector('.plus3');

let qty1 = shows1.value;
plus1.addEventListener('click',()=>{
    shows1.value = qty1++;
})

minus1.addEventListener('click',()=>{
  if (shows1.value == 1) {
      shows1.value = 1
  }else{
    shows1.value = qty1--
  }
})

// plus1.addEventListener('click',()=>{
    
//     valueCount = document.querySelector('.shows1').value;
//     valueCount++;
//     document.querySelector('.shows1').value = valueCount

// });

// minus1.addEventListener('click',()=>{
//     valueCount = document.querySelector('.shows1').value;
//     valueCount--;
//    let qty = document.querySelector('.shows1').value ;
    
//     qty = valueCount;
// });

// plus2.addEventListener('click',()=>{
    
//     valueCount = document.querySelector('.shows2').value;
//     valueCount++;
//     document.querySelector('.shows2').value = valueCount

    
// });

// minus2.addEventListener('click',()=>{
//     valueCount = document.querySelector('.shows2').value;
//     valueCount--;
//     document.querySelector('.shows2').value = valueCount
    
// });

// plus3.addEventListener('click',()=>{
    
//     valueCount = document.querySelector('.shows3').value;
//     valueCount++;
//     document.querySelector('.shows3').value = valueCount

    
// });

// minus3.addEventListener('click',()=>{
//     valueCount = document.querySelector('.shows3').value;
//     valueCount--;
//     document.querySelector('.shows3').value = valueCount
    
// });