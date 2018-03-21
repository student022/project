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


 <table class="table table-bordered" id="role_table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Role Name</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>



<script>
$(function() {

    $('#role_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('rolepostdata') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'role_name', name: 'role_name' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action' }
        ]
    });
});

</script>

