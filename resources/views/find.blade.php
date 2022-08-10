<style>
  .opinion{
    
  width: 26em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

  }
</style>


<div class="find">
  <h2>管理システム</h2>
  <form method="get" action="/contact/search">
    @csrf
    <label for="fullname">お名前</label>
    <input type="text" id="fullname" name="fullname">
    <label>性別
      <label>全て<input type="radio" name="gender" value="1,2" selected></label>
      <label for="male">男性<input type="radio" id="male" name="gender" value="1"></label>
      <label for="female">女性<input type="radio" id="female" name="gender" value="2"></label>
    </label>
      
    <br/>
    <label for="created_at">登録日</label>
    <input type="date" id="created_at" name="from_time">
    <span>~</span>
    <input type="date" id="created_at" name="to_time">
    <br/>
    <label for="email">メールアドレス</label>
    <input type="text" id="email" name="email">
    <br/>
    <input type="submit" value="検索">
  </form>
  <a href="/contact/find">リセット</a>
</div>
<div class="result">
  @if(@isset($items))
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
    </tr>
   
    @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->fullname}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->email}}</td>
      <td><p class="opinion" title="{{$item->opinion}}">{{$item->opinion}}</p></td>
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
  {{$items->links()}}
  @endif
</div> 
