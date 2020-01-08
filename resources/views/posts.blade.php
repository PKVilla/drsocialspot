    @forelse($posts as $eachPost)
    <div class="row mt-5">
      <div class="col-lg-8">
        <div class="card">
         <div class="card-body">
          <div class="row">
           <div class="col-lg-12">
             <div class="col-lg-1">
               <img class="img-fluid rounded-circle" src="/images/avatar.png" alt="">
             </div>
             <div class="col-lg-2 mt-1">
               <h6>{{ '@'.$eachPost->name }}</h6>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-lg-12">
             <p class="text-justify">{{ $eachPost->post }}</p>
           </div>
         </div>
         <div class="row">
           <div class="col-lg-1">
             <form action="/like" method="POST">
               @csrf
               <input type="hidden" name="postid" value="{{ $eachPost->id }}" class="postid">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i>
              @foreach($sum as $sum)
              {{ $sum }}
              @endforeach
               </button>
             </form>
           </div>
           <div class="col-lg-1">
             <form action="/like" method="POST">
               @csrf
               <input type="hidden" name="postid" value="{{ $eachPost->id }}" class="postid">
               <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-thumbs-down"></i></button>
             </form>
           </div>
         </div>
         <div class="row mt-3 mb-3">
          <div class="col-lg-3">
           <span><i class="fas fa-comment-dots"></i> Comment</span>
         </div>
       </div>
       <form action="/saveComment" method="POST">
        @csrf
       <div class="row">
        <div class="col-lg-12">
         <input class="form-control" type="text" name="comment">
         <input type="hidden" name="post_id" value="{{$eachPost->id}}" />
         <button type="submit" class="btn btn-success btn-sm mt-3">Submit</button>
       </div>
     </div>
     </form>
   </div>
 </div>
</div>
</div>
@empty
{{-- <div class="container"> --}}
  <div class="row mt-5">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <nopost></nopost>
    </div>
  </div>
{{-- </div> --}}
@endforelse