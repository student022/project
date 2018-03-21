@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Role</h1>
@stop


<script src="//code.jquery.com/jquery.js"></script>

@section('content')
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

              @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="row">
            <!--row starts-->

            <div class="col-md-12">
               
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                           Role
                        </h3>
                </div>

                <div class="panel-body">
                        <form class="form-horizontal" action="{{ url('rolepost') }}" method="post">

                            <!-- CSRF Token -->
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <!-- Name input-->
                              
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Role Name</label>
                                    <div class="col-md-9">
                                        <input id="rolename" name="rolename" type="text" placeholder="Enter the role name" class="form-control"></div>
                                </div>
                               
                                <!-- Form actions -->
                                <div class="form-position">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
               



            </div>
            <!--md-12 ends-->
        </div>


 
