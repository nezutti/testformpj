<div class="confirm">
  <h2>内容確認</h2>
  <from methid="post" action="/contact/add">
    @csrf
    <table>
      <tr>
        <th><label>フルネーム<label></th>
        <td> {{$inputs["fullname"]}}</td>
      </tr>
      <tr>
        <th><label>性別<label></th>
        <td> {{$inputs["gender"]}}</td>
      </tr>
      <tr>
        <th><label>メールアドレス<label></th>
        <td> {{$inputs["email"]}}</td>
      </tr>
      <tr>
        <th><label>郵便番号<label></th>
        <td> {{$inputs["postcode"]}}</td>
      </tr>
      <tr>
        <th><label>住所<label></th>
        <td> {{$inputs["address"]}}</td>
      </tr>
      <tr>
        <th><label>建物<label></th>
        <td> {{$inputs["building_name"]}}</td>
      </tr>
      <tr>
        <th><label>ご意見<label></th>
        <td> {{$inputs["opinion"]}}</td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </from>
  <a href="/">戻る</a>
    
