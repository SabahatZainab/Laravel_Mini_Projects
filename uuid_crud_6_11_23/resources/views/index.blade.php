@extends('app.layout')
@section('content')

<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" ></script> -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1>SCHOOL MANAGEMENT</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('schools.create') }}"><button type="button" class="btn btn-success">Create</button></a>
        </div>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success')}}
        </div>
    @endif
    <div class="container">
    <div class="card">
        <div class="card-body">
            
                
            <div class="form-group">
                <label><strong>School Name:</strong></label>
                <select id='school_name' class="form-control" style="width: 200px">
                    <option value="">--Select School Name--</option>
                @if(isset($schools) && !empty($schools))
                    @foreach($schools as $school)
                        <option value="{{ $school->name }}">{{ $school->name }}</option>
                    @endforeach
                @endif
                </select>   
            </div>
            <div class="form-group">
                <label><strong>School City :</strong></label>
                <select id='school_city' class="form-control" style="width: 200px">
                    <option value="">--Select School City--</option>
                @if(isset($schools) && !empty($schools))
                    @foreach($schools as $school)
                        <option value="{{ $school->city }}">{{ $school->city }}</option>
                    @endforeach
                @endif
                </select>
            </div>
        </div>
    </div>
    </div>
    <div class="row" style="padding: 20px; margin: 20px;">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table data-table" id="data-table">
                <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">School Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <!-- @if(isset($schools) && !empty($schools))
                    @foreach($schools as $school)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->city }}</td>
                        <td>{{ $school->date }}</td> 
                        <td class="col-sm-4">
                        <form action="{{ route('schools.destroy', $school->id) }}" method="POST">

                        
                        <a class="btn btn-info" href="{{ route('schools.show', $school->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('schools.edit', $school->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>     
                    </tr>
                    @endforeach
                @endif -->
                    
                </tbody>
        </table>
     
        </div>
        <div class="col-2"></div>
    </div>
    
    <script type="text/javascript">

    
        // $(document).ready(function() {
        //     var table = $('.data-table').dataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax: {
        //     url: "{{ route('schools.index') }}",
        //     data: function (d) {
        //         d.school_name = $('#school_name').val(),
        //         d.school_city = $('#school_city').val(),
        //         d.search = $('input[type="search"]').val()
                
        //         }
        //     },
        //     columns: [
        //         {data: 'name', name: 'name'},
        //         {data: 'city', name: 'city'},
        //         {data: 'date', name: 'date'},
        //         // {data: 'status', name: 'status'},
        //     ]
        //     });
  
            
        //     $('#school_name, #school_city').change(function(){
        //         table.draw();
        //         // $('.data-table').draw();
        //     });
        //     // $('#school_name, #school_city').change(function(){
        //     //     table.draw();
        //     // });
        // });

                $(document).ready(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('schools.index') }}",
                    data: function (d) {
                        d.school_name = $('#school_name').val(),
                        d.school_city = $('#school_city').val(),
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'city', name: 'city'},
                    {data: 'date', name: 'date'},
                    // {data: 'status', name: 'status'},
                ]
            });

            $('#school_name, #school_city').change(function(){
                table.draw();
            });
        });

        

    </script>
@endsection

