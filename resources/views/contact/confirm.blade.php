<style>
*{
  
  margin:0px;
  padding:0px;
}

h2{
  text-align:center;
}

label{
  font-weight:bold;
  font-size:14px;
  margin:auto;
}

table{
  width:80%;
  margin:20px auto;
}

th{
  width:30%;
  padding:20px 0px;
  
}

tr{
  padding-bottom:30px;
}

td{
  font-size:14px;
}

.submit{
  display:block;
  margin:20px auto;
  width:120px;
  padding:5px 8px;
  border:1px solid grey;
  border-radius:5px;
  color:white;
  font-weight:bold;
  background-color:black;
}

.back{
  display:block;
  margin:auto;
}



</style>

<div class="confirm">
  <h2>内容確認</h2>
  <form method="post" action="{{ route('contact.send') }}">
    @csrf
    <table>
      <tr>
        <th><label>フルネーム<label></th>
        <td> {{$input['fullname']}}</td>
      </tr>
      <tr>
        <th><label>性別</label></th>
        <td>{{$input['gender']}}</td>
      <tr>
        <th><label>メールアドレス<label></th>
        <td> {{$input['email']}}</td>
      </tr>
      <tr>
        <th><label>郵便番号<label></th>
        <td> {{$input['postcode']}}</td>
      </tr>
      <tr>
        <th><label>住所<label></th>
        <td> {{$input['address']}}</td>
      </tr>
      <tr>
        <th><label>建物<label></th>
        <td> {{$input['building_name']}}</td>
      </tr>
      <tr>
        <th><label>ご意見<label></th>
        <td> {{$input['opinion']}}</td>
      </tr>
    </table>
    <button type="submit" class="submit">送信</button>
    <button type="submit"  name="back" class="back">戻る</a>
  </from>
  
    
