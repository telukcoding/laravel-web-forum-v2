@extends('layouts.app')
@section('title','Tags')
@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron">
    <div class="card-body"style="color: #fff;border:1px solid #fff;">
        <div class="text-center">
           <h1 style="font-size: 3.5rem;">Tags</h1> 
          <p>Pilih thread berdasarkan tag. </p> 
      </div>
    </div>
  </div>
</div>  
<div class="container">
    <div class="row">
        <div class="col-md-12" id="tc_container_wrap">
            <div class="card">
                <div class="card-body" style="background: #f9f9f9;"> 
                    <div class="card">
                       <div class="card-header" style="background-color: #2ab27b;padding: 6px 11px 6px 23px;">
                          <div class="menu_a" style="float: left;">
                          <a href="{{route('populars')}}">Populer</a> 
                          <a href="{{route('tag.index')}}">Tag</a> 
                          </div>
                          <div class="search" style="margin: 3px;">
                          <div class="col-md-4 float-right" style="    padding-right: 0;">
                          <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for..." style=" margin-right: 3px;background: #f5f8fa;">
                          <span class="input-group-btn">
                          <button class="btn btn-warning" type="button" style="color: #fff;" >Go!</button>
                        </span>
                        </div>
                       </div>
                     </div>
                    </div>
                  </div>  
      <br>
<div class="row">
   <div class="col-md-8">
     @foreach($tags as $tag)
       <a href="{{route('tagshow', $tag->name)}}" class="btn btn-success btn-sm">{{$tag->name}} ({{$tag->forums->count()}} <small>thread</small>)</a>
     @endforeach
    </div>
       <div class="col-md-4">
          @include('layouts.popular')
           </div>
           </div><br><br>
            <div class="card">
              <div class="card-header"></div>
               <div class="card-body" style="background: rgb(90, 90, 90)"></div>
              <div class="card-header"></div>
             </div>
            </div>
           </div>
         </div>
      </div>
    </div>
 <br>
@endsection
 