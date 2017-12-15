@extends('master')

@section('content')
	<form class="form-horizontal">
      <div class="row-fluid">
        <div class="span12"> 
          <div class="panel panel-primary">
            <div class="panel-heading">Preview Field Data</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-4"></div>

                <div class="col-sm-4 col-xs-1">
                  <table class="table-condensed" id="tables" style="100%;"> 
                    <tbody>
                        <tr>
                            <th><label>First Name: </label></th>
                            <td class="preview">
                                {{$users->first_name}}
                            </td>
                        </tr>
                        <tr>
                            <th><label>Last Name: </label></th>
                            <td>
                              	{{$users->last_name}}
                            </td>
                        </tr>
                        <tr>
                            <th><label>Sex: </label></th>
                            <td>
                                {{$users->sex}}
                            </td>
                        </tr>
                        <tr>
                            <th><label>Email: </label></th>
                            <td>
                                {{$users->email}}
                            </td>
                        </tr>
                        <tr>
                            <th><label>Date Of Birth: </label></th>
                            <td>
                                {{$users->dob}}
                            </td>
                        </tr>
                        <tr>
                            <th><label>Address: </label></th>
                            <td>
                                {{$users->address}}
                            </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                          	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                          	<a id="cancel_preview" class="btn btn-sm btn-primary" href="{!! url('/articles'); !!}"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>&nbsp;Back</a>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>

                <div class="col-sm-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
@endsection