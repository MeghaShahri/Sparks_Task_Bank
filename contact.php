<?php 
    include 'common/_navbar.php'
?>

<style>
   
    h1{
        margin-top:20px;
    }
    .form-group{
        margin-left:250px;
        margin-top:20px;
    }
    input[type=text],
    input[type=email]
    {
        width:80%;
    }

    #submit-btn{
      margin-left:250px;
    }

</style>


<h1 style="text-align:center">Enter your query here!</h1>
<form>
<div class="form-group">
    <label for="exampleInputtext1">First Name:</label>
    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="text1Help" placeholder="Enter First Name">
  </div>

  <div class="form-group">
    <label for="exampleInputtext2">Last Name:</label>
    <input type="text" class="form-control" id="exampleInputtext2" aria-describedby="text2Help" placeholder="Enter Last Name">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Query:</label>
    <textarea style="width:80%" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


  <button type="submit" id="submit-btn" class="btn btn-primary">Submit</button>
</form>