




const address = document.getElementById('address');
const building_name = document.getElementById('building_name');

const email = document.getElementById('email');


document.addEventListener('DOMContentLoaded', () => {
  'use strict'
  const email = document.getElementById('email');
  email.addEventListener('input', function () {
    
    var pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
 
    if (pattern.test(email.value)) {
      result1.textContent = ""
    }
    else {
      result1.textContent = "メールアドレスではありません。@をつけてください"
    }
  })

  

  const postcode = document.getElementById('postcode');
  postcode.addEventListener('input', function () {
    var pattern = /^(([0-9]{3}-[0-9]{4}))$/;

    if (pattern.test(postcode.value)) {
      result2.textContent=""
    } else {
      result2.textContent="正しい記述方法して"
    }
    
  })
  
  const opinion = document.getElementById('opinion');
  opinion.addEventListener('input', function () {
  if (opinion.value.length > 120) {
    result3.textContent="120文字以内でお願いします"
  } else {
    result3.textContent=""
  }
  
  })

  
  
  
}


);

//1,まず'DOMContentLoaded'を指定　2,'const fullnameは１の中に定義//
//一つ一つにきちんとaddEventListener('input',function())を行う//