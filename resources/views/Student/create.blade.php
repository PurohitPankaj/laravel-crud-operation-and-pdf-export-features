<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<title>
    Add Data
</title>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="card-header">Create/Add Student Data</h1>

                    <div class="card-body">
                 <form action="{{ route('students.store') }}" id="formSubmit" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Student Name</label>
        <input type="text" class="form-control" id="studentName"  name="name">
    </div>
    <div class="form-group">
        <label for="description">Total Amount</label>
        <input type="number" class="form-control" id="amount" name="amount">
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
    <button type="submit" class="btn btn-success">Save</button>
</form>


                    </div>
                </div>
            </div>
        </div>
    </div>
