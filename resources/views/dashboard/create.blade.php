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
                            <th><label>First Name: </label></th>
                            <td class="gold">
                              <input class="form-control required" name="firstname" id="input" type="text" placeholder="Enter firstname">
                            </td>
                        </tr>
                        <tr>
                            <th><label>Last Name: </label></th>
                            <td>
                              	<input class="form-control" name="lastname" id="input" type="text" placeholder="Enter lastname">
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
                              <input class="form-control" name="email" id="input" type="text" placeholder="Enter email">
                            </td>
                        </tr>
                        <tr>
                            <th><label>Date Of Birth: </label></th>
                            <td>
                              <input class="form-control" name="dob" id="date" type="date" placeholder="Enter date of birth">
                            </td>
                        </tr>
                        <tr>
                            <th><label>Address: </label></th>
                            <td>
                                <textarea class="form-control" name="address" placeholder="Enter address" rows="5"></textarea>
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