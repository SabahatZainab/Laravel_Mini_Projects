@extends('app.layout')
@section('content')    
    <form action="{{ route('schools.store') }}" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8" style="background-color: violet; padding: 10px; margin: 10px;">
            <h5><b>Add School</b></h5>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-md-8">
                    @csrf
                    <div class="form-group">
                        <!-- <label for="name">Name</label> -->
                        <input type="hidden" class="form-control" id="school_id" name="school_id">
                    </div>
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input type="text" class="form-control" id="sch_name" name="sch_name">
                    </div>
                    <div class="form-group">
                        <label for="city"><b>City</b></label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="date"><b>Date</b></label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-label"><b>Upload Image of School</b></label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <!-- Add Student Button -->
                    <!-- <button type="button" class="btn btn-primary" id="addStudent">Add Student</button> -->

                    <!-- Submit Button -->
                    <!-- <button type="submit" class="btn btn-primary mt-3">Create School</button> -->
                
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8" style="background-color: violet; padding: 10px; margin: 10px;">
            <h5><b>Add Student</b></h5>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <table class="table table-bordered" id="dynamicTable" style="padding:20px; margin:20px;">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Address</th>
                <th scope="col">Class</th>
                <th scope="col">Profile</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="addmore[0][name]" placeholder="Student Name" class="form-control" /></td>  
                    <td><input type="text" name="addmore[0][father]" placeholder="Father Name" class="form-control" /></td>  
                    <td><input type="text" name="addmore[0][address]" placeholder="Address" class="form-control" /></td>  
                    <td><input type="text" name="addmore[0][class]" placeholder="Class" class="form-control" /></td>  
                    <td><input type="text" name="addmore[0][profile]" placeholder="Profile" class="form-control" /></td>  
                    <td><button type="button" name="add" id="add" class="btn btn-success">AddMore</button></td>  
                        
                </tr>
                
            </tbody>
            
        </table>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('schools.index') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
        </div>
        <div class="col-2"></div>
    </div>
    
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
    var i = 0;
    $(document).ready(function() {
        $("#add").click(function () 
        {
            ++i;
            $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]" placeholder="Student Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][father]" placeholder="Father Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][address]" placeholder="Address" class="form-control" /></td><td><input type="text" name="addmore['+i+'][class]" placeholder="Class" class="form-control" /></td><td><input type="text" name="addmore['+i+'][profile]" placeholder="Profile" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
        });
        $(document).on('click', '.remove-tr', function(){  
                $(this).parents('tr').remove();
        }); 
    });
</script>