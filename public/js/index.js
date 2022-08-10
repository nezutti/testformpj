




const address = document.getElementById('address');
const building_name = document.getElementById('building_name');

const email = document.getElementById('email');


document.addEventListener('DOMContentLoaded', () => {
  'use strict'
  const email = document.getElementById('email');
  email.addEventListener('input', function () {
  const errMsgEmail = document.getElementById('err-msg-email');
 
    if (!email.value.match(email)) {
      errMsgEmail.classList.add('form-invalid'); //エラーにクラス追加//
      errMsgEmail.textContent = 'ちがいます';//クラス内のテキスト追加//
      email.classList.add('input-invalid');//eメールにクラス追加//
      return;
      
    } else {
    
    errMsgEmail.textContent = '';//クラス内のテキストをなくす//
    email.classList.remove('input-invalid');//eメールに追加したクラス削除
    }
  
  const opinion = document.getElementById('opinion');
  const errMsgOpi = document.getElementById('err-msg-opinion');

    if (opinion.value.length > 120) {
      errMsgOpi.classList.add('form-invalid');
      errMsgOpi.textContent = '120文字以内で入力してください';
      opinion.classList.add('input-invalid');
      return;
    } 

  
    
  }
  )
}


);

//1,まず'DOMContentLoaded'を指定　2,'const fullnameは１の中に定義//