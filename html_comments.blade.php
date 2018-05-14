<div class="card">
  <div class="card-header" style=" background-color: #2ab27b; color: #fff; border-top-right-radius: 0px; border-top-left-radius: 0px;"><i class="fa fa-clock-o" style="color: #eee"></i> <small style="color: #eee">2 min ago</small></div>
  <div class="card-body" style="background: #f9f9f9; "> 
    <div class="row">
      <div class="col-md-3" id="img_comment">
        <img src="{{asset('images/profile.png')}}" width="100%">
        <br>
        <div class="comment_user">
        <b>telukcoding</b>
        </div>
      </div>
      <div class="col-md-8">
      Komentar muncul disini.
      </div>
    </div>
</div>
<div class="card-footer link_a">
  <div class="info_comment">
   <a data-toggle="collapse" href="#1-collapse1info"><i class="fa fa-info-circle"></i> Info</a>
  </div>
 <div class="reply_comment">
 <a data-toggle="collapse" href="#2-collapse1reply"><i class="fa fa-comment-o"></i> Reply</a>
 </div>
</div>
 <div id="1-collapse1info" class="card-collapse collapse">
      <div class="card-body">*Klik 'Reply' untuk melihat atau membuat komentar balasan.</div> 
    </div>
 <div id="2-collapse1reply" class="card-collapse collapse">
  <div class="card-body">
    <!-- forelse reply-->
  <div class="card">
      <div class="card-header" style="background-color: #2ab27b; color: #fff; border-top-right-radius: 0px; border-top-left-radius: 0px;"><i class="fa fa-clock-o" style="color: #eee"></i> <small style="color: #eee">2 min ago </small></div>
      <div class="card-body" style="background: #f9f9f9;"> 
        <div class="row">
      <div class="col-md-8">
      komentar balasan disini.
      </div>
       <div class="col-md-3" id="img_comment_reply">
        <img src="{{asset('images/profile.png')}}" width="100%">
        <br>
        <div class="comment_user">
        <b>telukcoding</b>
        </div>
      </div>
    </div>
    </div>
    </div>

   </div>
      <div class="panel-body" style="    border-top: 1px solid #eee;">
        <form action="#" method="post" style="    padding: 0 16px;">
      {{csrf_field()}}
      <div class="form-group">
      <input type="text" name="content" class="form-control" id="input_reply" placeholder="Reply here..">        
      </div>
      <button class="btn btn-success" type="submit">Submit</button>
      </form>
      </div>
    </div>
  </div>
<!-- endforelse -->
  <hr>