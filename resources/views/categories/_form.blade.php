@csrf
<input type="text" name="name" placeholder="Enter Name" value="{{old('name', isset($category) ? $category->name : "")}}"><br><br>
@error('name')
<p style="color: #f00">{{$message}}</p><br>
@enderror
<input type="text" name="slug" placeholder="Enter Slug" value="{{old('slug', isset($category) ? $category->slug : "")}}"><br><br>
<textarea name="description" placeholder="Ener description">{{old('description', isset($category) ? $category->description : "")}}</textarea><br><br>
@error('description')
<p style="color: #f00">{{$message}}</p><br>
@enderror
<button type="submit">Save</button>

