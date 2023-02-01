<form action="/posts/{{ $post->id }}/comments" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">الاسم</label>
      <input name="name" class="form-control" id="name">
      @error('name')
            <div class="alert alert-danger mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>
  
    <div class="form-group">
        <label for="body">التعليق</label>
        <textarea class="form-control" name="body" id="body" rows="3"></textarea>
        
        @error('body')
            <div class="alert alert-danger mt-1">
                {{ $message }}
            </div>
        @enderror
      </div>
   
    <button type="submit" class="btn btn-primary">حفظ</button>
  </form>