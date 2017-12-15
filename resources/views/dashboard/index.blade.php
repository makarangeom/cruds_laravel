@extends('master')

@section('content')

  <div class="row">
    <div class="col-lg-12 title">
      <h1>Laravel Simple CRUDS!!!</h1>
    </div>
  </div>

  <div class="row">
  	<div class="col-lg-12">
  		<div class="pull-right">
  			<a class="btn btn-xs btn-success" href="{!! url('articles/create'); !!}">Create New</a>
  		</div>
  	</div>
  </div>

  @if ($message = Session::get('success'))
  	<div class="alert alert-success">
  		<p>{{ $message }}</p>
  	</div>
  @endif

  <table class="table table-bordered">
  	<tr>
  		<th>No</th>
  		<th>Fullname</th>
  		<th>Sex</th>
  		<th>Email</th>
  		<th>DOB</th>
  		<th style="width: 350px;">Address</th>
  		<th>Create at</th>
  		<th>Update at</th>
  		<th style="width: 96px;">Action</th>
  	</tr>

  	@foreach($user_data as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->first_name}} {{$value->last_name}}</td>
        <td>{{$value->sex}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->dob}}</td>
        <td>{{$value->address}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
        <td>
        	<a class="btn btn-xs btn-primary" href="{!! url('articles/preview/'.$value->id) !!}"><i class="fa fa-eye"></i></a>
        	<a class="btn btn-xs btn-primary" href="{!! url('articles/edit/'.$value->id) !!}"><i class="fa fa-edit"></i></a>
        	<a class="btn btn-xs btn-primary" href="#"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
  	
  </table>
  {!! $user_data->render() !!}


@endsection

