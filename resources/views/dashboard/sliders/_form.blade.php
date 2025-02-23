<div class="card-body grid gap-5">
    <div class="flex items-center flex-wrap gap-2.5">
        <label class="form-label max-w-56">
            Photo
        </label>
        <div class="flex items-center justify-between flex-wrap grow gap-2.5">
          <span class="text-2sm text-gray-700">
           150x150px JPEG, PNG Image
          </span>
            <div class="size-16" data-image-input="true">
                <input accept=".png, .jpg, .jpeg" name="image" type="file">
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="form-label flex items-center gap-1 max-w-56">
                Title
            </label>
            <input class="input" name="title" type="text" value="{{old('title',(isset($slider) ? $slider->title : ""))}}">
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
            <input class="input" type="text" value="{{old('url', isset($slider) ? $slider->url : "")}}" name="url">
            @error('url')
            <p>{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="w-full">
        <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
            <label class="form-label flex items-center gap-1 max-w-56">
                URL Title
            </label>
            <input class="input" placeholder="Click Now" type="text" value="{{old('url_title',isset($slider) ? $slider->url_title : "")}}" name="url_title"/>
            @error('url_title')
            <p>{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="flex justify-end pt-2.5">
        <button class="btn btn-primary">
            Save
        </button>
    </div>
</div>
