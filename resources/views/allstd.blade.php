<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </head>
 <body>

  <section style="Padding-top:60px;">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
         <div class="card">
          <div class="card-header">
             All student   <a href="/addstd"><button class="btn btn-success btn-sm">Add New Record</button></a>
          </div>
           <div class="card-body">
               <table class="table table-striped">
                 <thead>
                  <tr>
                  <th>Profile Image</th>
                   <th>Name</th>  
                   <th>Action</th>    
                  </tr>
                 </thead>
                 
                 <tbody>
                 @foreach($student as $std)
                  <tr>
                  <td><img src="{{ asset('images')}}/{{ $std->profileimg }}" alt="" style="max-width:60px;"></td>
                   <td>{{ $std->name }}</td>
                   <td>
                    <a href="/editstd/{{$std->id}}" class="btn btn-info">Edit</a>
                    <a href="/delstd/{{$std->id}}" class="btn btn-danger">Delete</a>
                   </td>
                  </tr>
                  @endforeach
                 </tbody>
               
               </table>
           </div>
         </div>
       </div>
      </div>
    </div>
  </section>
  

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->


</body>
</html>