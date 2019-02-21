@extends('master')

@section('content')
	<form class="form-horizontal" action="store" method="POST" >
      <div class="row-fluid">
        <div class="span12"> 
          <div class="panel panel-primary">
            <div class="panel-heading">Create a new field data</div>
            <div class="panel-body">
            
              <div class="row">
                <div class="col-sm-3"></div>

                <div class="col-sm-6 col-xs-1">
                  <table class="table-condensed" id="tables" style="100%;"> 
                    <tbody>
                        <tr>
                          @if ($message = Session::get('danger'))
                            <div class="alert alert-success danger-msg">
                              <p>{{ $message }}</p>
                            </div>
                          @endif
                        </tr>
                        <tr>
                            <th><label>First Name: </label></th>
                            <td class="gold">
                              <input class="form-control required" name="firstname" id="input" type="text" value="{{ old('firstname') }}" placeholder="Enter firstname">
                              <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th><label>Last Name: </label></th>
                            <td>
                              	<input class="form-control" name="lastname" id="input" type="text" value="{{ old('lastname') }}" placeholder="Enter lastname">
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                              </td>
                        </tr>
                        <tr>
                            <th><label>Sex: </label></th>
                            <td>
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female
                                <input type="radio" name="gender" value="other"> Other
                            </td>
                        </tr>
                        <tr>
                            <th><label>Email: </label></th>
                            <td>
                              <input class="form-control" name="email" id="input" type="text" value="{{ old('email') }}" placeholder="Enter email">
                              <span class="text-danger">{{ $errors->first('email') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th><label>Date Of Birth: </label></th>
                            <td>
                              <input class="form-control" name="dob" id="date" type="date" value="{{ old('dob') }}" placeholder="Enter date of birth">
                              <span class="text-danger">{{ $errors->first('dob') }}</span>
                            </td>
                        </tr>
                        <tr>
                            <th><label>Address: </label></th>
                            <td>
                                <textarea class="form-control" name="address" placeholder="Enter address" rows="5"></textarea>
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                          	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                          	<a class="btn btn-sm btn-danger" href="{!! url('/articles'); !!}">Cancel</a>
                          	<!-- <a class="btn btn-md btn-primary" href="#" type="submit">Save</a> -->
                          	<button type="submit" class="btn btn-md btn-primary" name="submit">Save</button>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-sm-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
@endsection