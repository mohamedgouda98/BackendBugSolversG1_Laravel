<h4>Students Page</h4>

@foreach($students as $student)
    <h1>{{$student->name}}</h1>
    <h5>{{$student->id}}</h5>
@endforeach
