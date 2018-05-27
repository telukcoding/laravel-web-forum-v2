@extends('layouts.app')
@section('title','Popular')
@section('content')
<div class="container">
  <div class="jumbotron" id="tc_jumbotron">
    <div class="card-body" id="xx" style="color: #fff; border:1px solid #fff;">
        <div class="text-center"> 
           <h1 style="font-size: 3.5rem;">Popular</h1> 
          <p>Menampilkan thread populer. </p>  
      </div>
    </div> 
  </div> 
</div>  
<div class="container"> 
    <div class="row">
        <div class="col-md-12" id="tc_container_wrap">
            <div class="card" id="tc_paneldefault"> 
                <div class="card-body" id="tc_panelbody"  style="background: #f9f9f9;"> 
                   <div class="card">
                       <div class="card-header" style="background-color: #2ab27b;padding: 6px 11px 6px 23px;">
                          <div class="menu_a" style="float: left;">
                          <a href="{{route('popular')}}">Populer</a> 
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
                  </div><br>
                  <div class="card"  style="background: #f9f9f9;">    
                  <div class="list-group">
                    @foreach($populars as $popular) 
                    <a href="{{route('forumslug', $popular->slug)}}" class="list-group-item" id="index_hover">{{$popular->title}}</a> 
                    @endforeach
                  </div> 
                  </div> 
                  <br>
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
@endsection
 