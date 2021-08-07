<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

  <section style="Padding-top:60px;">
    <div class="container">
      <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="card">
          <div class="card-header">
             Edit student
          </div>
           <div class="card-body">
           @if(Session::has('update'))
           <div class="alert alert-success" role="alert">
             {{ Session::get('update') }}
           </div>
           @endif
              <form action="/updatedata" method="POST"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $student->id }}"/>
                 <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                 </div>
              
                 <div class="form-group">
                  <label for="file" value="{{$student->profileimg}}">Choose Profile Image</label>
                  <input type="file" name="file" class="form-control" value="{{$student->profileimg }}" onchange="previewFile(this)"/>
                  <img id="previewImg" scr=""  alt="profile image" src="{{ asset('images')}}/{{$student->profileimg}}" style="max-width:130px;margin-top:20px;">
                 </div>

               <button type="submit" class="btn btn-primary">update</button>
        
              </form>
           </div>
         </div>
       </div>
      </div>
    </div>
  </section>
  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
  function previewFile(input)
{
  var file=$("input[type=file]").get(0).files[0];
  if(file)
  {
    var reader=new FileReader();
    reader.onload=function(){
      $('#previewImg').attr("src",reader.result);
    }
    reader.readAsDataURL(file);
  }
}
</script>


</body>
</html>