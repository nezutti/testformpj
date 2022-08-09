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
    <button type="submit">送信</button>
    <br>
    <button type="submit"  name="back" >戻る</a>
  </from>
  
    
