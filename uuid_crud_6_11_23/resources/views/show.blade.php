@extends('app.layout')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1>SCHOOL MANAGEMENT</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('schools.index') }}"><button type="button" class="btn btn-danger">Back</button></a>
        </div>
    </div>
    <div class="row" style="padding: 20px; margin: 20px;">
        <div class="col-2"></div>
        <div class="col-8">
            <h5 style="color: blue; text-decoration: underline;">School Record</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">School_ID</th>
                        <th scope="col">School Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Addition of Record</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($school) && !empty($school))
                    <tr>
                        <td>{{$school->id}}</td>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->city }}</td>
                        <td>{{$school->created_at}}</td>  
                    </tr>
                @endif
                    
                </tbody>
        </table>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row" style="padding: 20px; margin: 20px;">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <h5 style="color: blue; text-decoration: underline;">Assigned Students</h5>
                        <thead>
                            <tr>
                                <th scope="col">Student_ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Class</th>
                                <th scope="col">Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($students) && !empty($students))
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->father_name }}</td>
                                    <td>{{$student->address}}</td>  
                                    <td>{{$student->class}}</td>   
                                    <td>{{$student->profile}}</td>  
                                </tr>
                            @endforeach
                        @endif
                            
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
        <div class="col-1"></div>
    </div>
@endsection 