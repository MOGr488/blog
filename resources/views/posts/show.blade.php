

@section('title', $post->title)

<x-layout>
  <x-post :post="$post" :comments="$comments" class="font-weight-bold" />
  <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">تعديل المقالة</a>
 

  

  <div class="row mt-3">
    <div class="col-8">
      <h3>أضف تعليقاً</h3>
 <x-createComment :post="$post" />
</div>
</div>

</div><!-- /.blog-main -->

</div><!-- /.row -->

</main><!-- /.container -->


</x-layout>