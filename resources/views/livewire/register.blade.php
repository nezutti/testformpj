<div>
    
    <form wire:submit.prevent="register" method="post" action="{{route('contact.confirm')}}">
        @csrf
        <label for="fullname">お名前</label>
        <input type="text" name="fullname"  id="fullname" wire:model="fullname" value="{{ old('fullname') }}">
        <br/>
        @error('fullname')<a class="error">{{$message}}</a> @enderror
        <br/>
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" wire:model="email" value="{{ old('email') }}"  >
        <br/>
        @error('email')<span class="error">{{$message}}</span> @enderror
        <br/>
        <div class="h-adr">
        <span class="p-country-name" style="display:none;">Japan</span>
        <label for="postcode">郵便番号</label>
        <label for="postcode">〒<input type="text" id="postcode" name="postcode" class="p-postal-code" wire:model="postcode" value="{{ old('postcode') }}"  ></label>
        <br/>
        @error('postcode')<apan class="error">{{$message}}</pan> @enderror
        <br>
        <label for="address">住所</label>
        <input type="text" id="address" name="address" class="p-region p-locality p-street-address p-extended-address" value="{{ old('address') }}" />
        <br/>
        @error('address')<apan class="error">{{$message}}</pan> @enderror
        <br/>
        </div>
        <br/>
        <label for="buliding_name">建物名</label>
        <input type="text" id="building_name" name="building_name" value="{{ old('building_name') }}" >
        <br/>
        @error('building_name')<apan class="error">{{$message}}</pan> @enderror
        <br/>
        <label for="opinion">ご意見</label>
        <textarea name="opinion" id="opinion" wire:model="opinion" value="{{ old('opinion') }}" ></textarea>
        <br/>
        @error('opinion')<sapan class="error">{{$message}}</span> @enderror
        <br/>
        <input type="submit" value="確認する">
      
    </form>
    
</div> 
