<div class="find">
  <h2>管理システム</h2>
  <form method="get" action="/contact/search">
    @csrf
    <label for="fullname">お名前</label>
    <input type="text" id="fullname" name="fullname">
    <br/>
    <label for="created_at">登録日</label>
    <input type="date" id="created_at" name="$from_time">
    <span>~</span>
    <input type="date" id="created_at" name="to_time">
    <br/>
    <label for="email">メールアドレス</label>
    <input type="text" id="email" name="email">
    <br/>
    <input type="submit" value="検索">
  </form>
</div>
<div class="result">
  @if(@isset($items))
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
   
    @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->fullname}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->opinion}}</td>
      <form method="post" action="/contact/delete">
      @csrf
      <td>
        <input type="submit" value="削除">
        <input type="hidden" name="id" value="{{$item->id}}">
      </td>
      </form>
    </tr>
    @endforeach
  </table>
  @endif
</div> 
