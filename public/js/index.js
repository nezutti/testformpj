


const postcode = document.getElementById('postcode');
const address = document.getElementById('address');
const building_name = document.getElementById('building_name');
const opinion = document.getElementById('opinion');
const email = document.getElementById('email');


document.addEventListener('DOMContentLoaded', ()=> {
  'use strict'
  const email = document.getElementById('email');
  email.addEventListener('input', function () {
  const error = document.querySelector('.error');
 
    if (email.value=="あみん") {
      error.classList.add('form-invalid');
      error.textContent = 'ちがいます';
      email.classList.add('input-invalid');
      return;
    }else{
            // エラーメッセージのテキストに空文字を代入
            error.textContent ='';
            // クラスを削除
            email.classList.remove('input-invalid');
        }
  })
 
  
});

//1,まず'DOMContentLoaded'を指定　2,'const fullnameは１の中に定義//