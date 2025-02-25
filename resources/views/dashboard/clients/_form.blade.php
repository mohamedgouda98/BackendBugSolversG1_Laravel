    {{-- 
logo
image
url
description --}}
<div class="card-body grid gap-5">

  <div class="w-full">
      <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
          <label class="form-label flex items-center gap-1 max-w-56">
              Name
          </label>
          <input class="input" name="name" type="text" value="{{old('name',(isset($client) ? $client->name : ""))}}">
          
          @error('title')
          <p>{{$message}}</p>
          @enderror
      </div>
  </div>
  <div class="w-full">
      <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
          <label class="form-label flex items-center gap-1 max-w-56">
              URL
          </label>
          <input class="input" type="url" value="{{old('url', isset($client) ? $client->url : "")}}" name="url">
          @error('url')
          <p>{{$message}}</p>
          @enderror
      </div>
  </div>

  <div class="w-full">
      <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
          <label class="form-label flex items-center gap-1 max-w-56">
              Description
          </label>
          <input class="input" type="text" value="{{old('description',isset($client) ? $client->description : "")}}" name="description"/>
          @error('description')
          <p>{{$message}}</p>
          @enderror
      </div>
  </div>

  <div class="w-full">
    <div class="flex items-center flex-wrap gap-2.5">
  
        <label class="form-label max-w-56">
            Logo
        </label>
        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
          <span class="text-2sm text-gray-700">
           150x150px JPEG, PNG Image
          </span>
            <div class="size-16" data-image-input="true">
                <input accept=".png, .jpg, .jpeg" name="logo" type="file">
            </div>
        </div>
    </div>
  </div>
  <div class="w-full">
    <div class="flex items-center flex-wrap gap-2.5">
  
        <label class="form-label max-w-56">
            Image
        </label>
        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
          <span class="text-2sm text-gray-700">
           150x150px JPEG, PNG Image
          </span>
            <div class="size-16" data-image-input="true">
                <input accept=".png, .jpg, .jpeg" name="image" type="file">
            </div>
        </div>
    </div>
  </div>
  <div class="flex justify-end pt-2.5">
      <button type="submit" class="btn btn-primary">
          Save
      </button>
  </div>
</div>
