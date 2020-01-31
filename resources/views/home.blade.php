@extends('layouts.app')

@section('content')

<h1>Home</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
 Autem quisquam quo, error necessitatibus quam magni neque porro
  possimus saepe officiis aperiam alias
 a quaerat tenetur repellendus cumque, totam provident dolore?</p>
@endsection

@section('sidebar')
@parent
<p> This is appendded sidebar</p>
@endsection