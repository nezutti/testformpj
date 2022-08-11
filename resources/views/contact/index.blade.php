<style>
*{
   outline: 1px solid red !important;
   margin:0px;
   padding:0px;
}

h2{
  margin-top:20px;
  text-align:center;
}

p{

  font-size:12px;
  color:red;

}

span{
  color:red;
}

.form{
  width:80%;
  margin:0 auto;
}

.form2{
  width:80%;
  margin:0 auto;
  margin-top:30px;
}

input[type="text"]{
  border:1px solid grey;
  border-radius:5px;
  padding-left:1%;
  margin-left:5%;
  margin-bottom:20px;
  height:30px;
  width:60%;
}

input[type="radio"]{
   margin-left:5%;
   margin-bottom:20px;
   width:20px;
   height:20px;
   position: relative;
   top:6px;
}


textarea{
  border:1px solid grey;
  border-radius:5px;
  width:60%;
  height:140px;
  padding:1%;
}

label{
  font-weight:bold;
  font-size:12px;
}

.p-postal-code{
  padding-left:20px;
}

.confirm{
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

.radio{
  margin-top:2px;
}
</style>

<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

<script src="{{asset('js/character.js')}}"></script>
  <div class="form">
    <h2>お問い合わせ</h2>
    <form method="post" action="{{route('contact.post')}}" id="form" class="form2">
      @csrf
      <label for="fullname">お名前<span>*</span></label>
      <input type="text" name="fullname"  id="fullname" value="{{old('fullname')}}">
      <br>
      @if ($errors->has('fullname'))
        <p> {{$errors->first('fullname')}}</p>
      @endif
      <label>性別<span>*</span>
        <input type="radio" name="gender" id="male"  value="1" class="radio"  checked>
        <label for="male">男性</label>
        <input type="radio" name="gender" id="female" class="radio" value="2">
        <label for="female">女性</label>
      </label>
      <br>
      @if ($errors->has('gender'))
        <p> {{$errors->first('gender')}}</p>
      @endif
      <label for="email">メールアドレス<span>*</span></label>
      <input type="text" id="email" name="email" value="{{old('email')}}">
      <p id="result1"></p>
      @if ($errors->has('email'))
        <p> {{$errors->first('email')}}</p>
      @endif
      <div class="h-adr">
      <span class="p-country-name" style="display:none;">Japan</span>
      <label for="postcode">郵便番号<span>*</span></label>
      <label for="postcode">〒<input type="text" id="postcode" name="postcode" class="p-postal-code" value="{{old('postcode')}}" ></label>
      <p id="result2"></p>
      @if ($errors->has('postcode'))
        <p> {{$errors->first('postcode')}}</p>
      @endif
      <label for="address">住所<span>*</span></label>
      <input type="text" id="address" name="address" class="p-region p-locality p-street-address p-extended-address" value="{{old('address')}}" />
      @if ($errors->has('address'))
        <p> {{$errors->first('address')}}</p>
      @endif
      </div>
      <br>
      <label for="buliding_name">建物名</label>
      <input type="text" id="building_name" name="building_name" value="{{old('building_name')}}">
      <br>
      <label for="opinion">ご意見<span>*</span></label>
      <textarea name="opinion" id="opinion">{{old('opinion')}}</textarea>
      <p id="result3"></p>
      @if ($errors->has('opinion'))
        <p> {{$errors->first('opinion')}}</p>
      @endif
      <button type="submit" class="confirm">内容確認</button>
      
    </form>
    
 

  </div> 
  <script src="{{ asset('js/index.js') }}"></script>








