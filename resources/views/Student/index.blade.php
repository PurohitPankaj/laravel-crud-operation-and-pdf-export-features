<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Students</title>
    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.bootstrap4.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>
    .addStudent{
            text-align: right;
            margin: 10px;
            align-content: center;
            color:blue;
        }
    .main-navbar{
        text-align:center;
    }
    .footer-wrapper{
        bottom:0;
        text-align:center;
    }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="row main-navbar">
              <h1>Students Data</h1>
              <h3 class="addStudent"><a href="{{ route('students.create') }}"> + Add New Data</a></h3>
          </div>
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">

		<div class="col-12">
		    <table id="studentTable" class="table table-striped display" style="width:100%">
		        <thead>
                    <tr>
                        <th style="width:50px;">#Id</th>
                        <th>Student</th> 
                        <th >Amount</th>        
                        <th style="width:200px;">Action</th>               
                    </tr>
                </thead>
                <tbody>
                    @if(count($students) < 1)
                    <tr><td colspan="3" >No Student Data Available</td></tr>
                    @else


                        @foreach ($students as $student)
                        <tr><td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td   >{{'₹'. $student->amount}}</td>                            
                        <td>
                            <a href="{{url('students/pdfexport/' . $student->id)}}" class="btn btn-primary btn-xs">PDF</a>
                            <a href="{{ route('students.edit', $student->id) }}"
                                class="btn btn-warning btn-xs">Edit</a>
                            <a href="{{url('students/delete/' . $student->id)}}" class="btn btn-danger btn-xs">Del</a>
                            </td></tr>                            
                        @endforeach
                    @endif
                </tbody>
                 <tfoot>
		                        <tr>
		                            <th>#Id</th>
		                            <th>Student Name</th>
		                            <th>Amount</th>
		                            <th>Action</th>
		                        </tr>
		                    </tfoot>
            </table>
        </div>
    </div>
    @include('student.footerscript')
  </body>
</html>