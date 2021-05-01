<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="card" >
        <div class="card-body">
        <form>
            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
            </div>   
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">              
            </div>
            <div class="form-group">
                
                <input type="file" class="form-control" id="profile"  style="visibility:hidden;" >
                <button type="button" class="btn btn-primary"  id="add-image">Add Image</button>
            </div> 
            <input type="hidden"  name="_token"  id="token" value="{{csrf_token()}}">
                     
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        </div>
    </div>    
</div>


<script>
$(document).ready(function(){
    $('#add-image').on('click',function(){
        $("#profile").trigger("click");

        var token = $('#token').val();


        $(document).on('change', '#profile', function(){
                var name = document.getElementById("profile").files[0].name;
                var form_data = new FormData();               
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("profile").files[0]);      
                form_data.append("_token",token);         
               
                form_data.append("profile_name", document.getElementById('profile').files[0]);
                $.ajax({
                    url:"/aavas/public/members/profile_upload",
                    method:"POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend:function(){
                    $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
                    },   
                    success:function(data)
                    {
                    $('#uploaded_image').html(data);
                    }
                });
                
                });
    });
});
</script>


    
</body>
</html>