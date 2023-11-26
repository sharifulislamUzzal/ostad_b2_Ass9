@extends('layout.master') 

@section('content')
      <p>This is HOME PAGE.</p>

      <ul>
      @foreach($ulist as $item)
      <li>{{$item['name']}}</li>
      @endforeach
</ul>


@endsection