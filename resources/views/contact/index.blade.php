<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <div class="form" id="form">
    <form method="post" action="{{route('contact.post')}}" >
      @csrf
      <label for="fullname">お名前</label>
      <input type="text" name="fullname"  id="fullname" value="{{old('fullname')}}">
      
      <br> 
      <label for="email">メールアドレス</label>
      <input type="email" id="email" name="email" value="{{old('email')}}">
      <br>
      <div class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      <label for="postcode">郵便番号</label>
      <label for="postcode">〒<input type="text" id="postcode" name="postcode" class="p-postal-code" value="{{old('postcode')}}"></label>
      <br>
      <label for="address">住所</label>
      <input type="text" id="address" name="address" class="p-region p-locality p-street-address p-extended-address" value="{{old('address')}}" />
      </div>
      <br>
      <label for="buliding_name">建物名</label>
      <input type="text" id="building_name" name="building_name" value="{{old('building_name')}}">
      <br>
      <label for="opinion">ご意見</label>
      <textarea name="opinion" id="opinion">{{old('opinion')}}</textarea>
      <br>
      <button type="submit">内容確認</button>
      
    </form>
    <a href="/contact/change">修正する</a>
    
  </div> 