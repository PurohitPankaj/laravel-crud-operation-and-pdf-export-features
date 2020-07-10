<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <div class="container">
          <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="card-header">Edit Student Details: Id - {{$student->id}}</h1>

                    <div class="card-body">
                 <form  action="{{ route('students.update', $student->id) }}" id="formSubmit" method="post">
                    @method('PUT')
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Student Name</label>
        <input type="text" class="form-control" id="studentName" value="{{$student->name}}" name="name">
    </div>
    <div class="form-group">
        <label for="description">Total Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" value="{{$student->amount}}">
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <a Href="{{route('students.index')}}"type="button" class="btn btn-primary">Back to Home</a>
    <button type="submit" class="btn btn-success">Update</button>
</form>


                    </div>
                </div>
            </div>
        </div>
    </div>
