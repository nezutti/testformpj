<style>
*{
 
  margin:0px;
  padding:0px;
}

.find-form{
  width:90%;
  border:2px solid black;
  margin:20px auto;
}

.table1{
  width:90%;
  margin:0 auto;
}

.table2{
  border-collapse:collapse ;
  width:90%;
  margin:40px auto;
  text-align:center;
}

.table2 tr:first-child{
    border-bottom:1px solid black;
}




  .opinion{
    
  width: 26em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

  }

  .search{
  display:block;
  margin:20px auto;
  width:120px;
  padding:5px 8px;
  border:1px solid grey;
  border-radius:5px;
  color:white;
  font-weight:bold;
  background-color:black
  }

  .reset-link{
    text-align:center;
  }

 
  input[type="text"]{
  border:1px solid grey;
  border-radius:5px;
  padding-left:1%;
  margin-left:5%;
  margin:0 auto;;
  height:40px;
  width:250px;
  
  }

  input[type="date"]{
  border:1px solid grey;
  border-radius:5px;
  padding-left:1%;
  margin-left:5%;
  margin:0 auto;;
  height:40px;
  width:250px;
  }

  input[type="radio"]{
    width:20px;
    height:20px;
    margin-left:20px;
    position:relative;
    top:4px;
  }

  h2{
    text-align:center;
    margin-top:20px;
  }
</style>


<div class="find">
  <h2>管理システム</h2>
  <form method="get" action="/contact/search" class="find-form">
    @csrf
    <table  class="table1" cellspacing="20">
      <tr>
        <th><label for="fullname">お名前</label></th>
        <td><input type="text" id="fullname" name="fullname"></td>
        <th><label>性別</label></th>
        <td>
        <label for="male"><input type="radio" id="male" name="gender" value="1">男性</label>
        <label for="female"><input type="radio" id="female" name="gender" value="2">女性</label>
        </td>
      </tr>
      <tr>
        <th><label for="created_at">登録日</label></th>
        <td><input type="date" id="created_at" name="from_time"></td>
        <td><span>~</span></td>
        <td><input type="date" id="created_at" name="to_time"></td>
      </tr>
      <tr>
        <th><label for="email">メールアドレス</label></th>
        <td><input type="text" id="email" name="email"></td>
      </tr>
    </table> 
    
    <input type="submit" value="検索" class="search">
    <div class="reset-link">
      <a href="/contact/find" class="reset">リセット</a> 
    </div>
    
  </form>
  
</div>
<div class="result">
  @if(@isset($items))
  <table class="table2"  cellspacing="20">
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
      <td><p class="opinion" title="{{$item->opinion}}">{{$item->opinion}}</p><td>
      <td>
        <form method="post" action="/contact/delete">
        @csrf
        <input type="submit" value="削除">
        <input type="hidden" name="id" value="{{$item->id}}">
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  {{$items->appends(request()->query())->links()}}
  @endif
</div> 
