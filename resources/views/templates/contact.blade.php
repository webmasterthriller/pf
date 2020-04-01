@extends('templates.mail')

@section('content')
    <div align="left" style="text-align:justify;margin:0 0 10px 0;padding:0;">
        <font face="Helvetica,Arial,sans-serif" size="2" color="#222222" style="font-size:15px;">
            <span>Message de : {{$data['name']}}</span>
            <p>{{$data['message']}}</p>
        </font>
    </div>
@endsection
