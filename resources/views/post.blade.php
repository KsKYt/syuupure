@extends('layout')
@section('content')

    <div class="wrapper">
        <div class="post-header">
            <h1>募集一覧</h1>
        </div>
      
      
       <div class="content-post">
            @foreach($data as $datas)
         
        
               <div class="content-view">
                    <h1><a href="/show/{{$datas->id}}" class="post-title">{{$datas->title}}</a></h1>
            
                    <p>{!! nl2br(e(Str::limit($datas->main, 50))) !!}</p>
                
            
                    @if(file_exists(public_path().'/storage/post_img/'. $datas->id .'.jpg'))
                <img src="/storage/post_img/{{ $datas->id }}.jpg">
            @elseif(file_exists(public_path().'/storage/post_img/'. $datas->id .'.jpeg'))
                <img src="/storage/post_img/{{ $datas->id }}.jpeg">
            @elseif(file_exists(public_path().'/storage/post_img/'. $datas->id .'.png'))
                <img src="/storage/post_img/{{ $datas->id }}.png">
            @elseif(file_exists(public_path().'/storage/post_img/'. $datas->id .'.gif'))
                <img src="/storage/post_img/{{ $datas->id }}.gif">
            @endif
          
               </div>
       
            @endforeach
     
       </div>
       {{ $data->links('pagination::bootstrap-4') }}
        @endsection    