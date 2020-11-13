<?php 
    include 'common/_navbar.php'
?>
<style>

    .contentpane h1{
        font-size: 60px;
        font-weight: bold;
        text-align:center;
    }

    span{
          color: blue;
    }
    .contentpane h3{
        font-size: 30px;
        font-weight: normal;
        text-align:center;
    }

    #get-started{
        width:210px;
        background-color: #DC143C;
        padding:12px;
        color:white ;
        border-radius: 19px;
        border:white;
        margin-left: 580px;
        margin-top:20px;
    }
    .services h1{
        text-align:center;
        margin-top:30px;

    }
    .mycard{
        margin-top:20px;
    }
    .mycard .card{
        display: inline-flex;
        max-width: 300px;
        height:150px;
        padding: 20px;
        margin-left: 40px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 0px 50px 50px 0px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);

    }

    .card .card-body .card-title{
        text-align: center;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        margin-left:25px;
        margin-top:13px;
    }
    .card .card-body .card-text{
        text-align: center;
    }
  

</style>

<div class="contentpane pt-xl-5 pt-2">
            <h1>Welcome to <span>Sparks</span> Bank</h1>
            <h3>Your money is safe!</h3>
    </div>
    <a href="#services"><button id="get-started">Get Started</button></a>
                    
    <div class="services" id=services>
    <h1>Services we provide</h1>
    <div class="mycard">
    <div class="row">
        <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/view_user.jpg" class="card-img" style="width:8.5rem; margin-top:5px;">
              </div>
              
              <div class="col-md-6">
                <div class="card-body">
                <h5 class="card-title">View Users</h5>
                
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3">
            <div class="row no-gutters">
            
              <div class="col-md-4">
                <img src="images/transfer.jpg" class="card-img" style="width:8rem; margin-top:10px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Transfer Money</h5>
                  
                </div>
              </div>
              
            </div>
          </div>

          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/history.jpg" class="card-img" >
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">Transaction History</h5>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/contact.jpg" class="card-img" style="width:8.5rem; height:6rem; margin-top:8px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title" style="margin-left:40px; margin-top:25px;">Contact Us</h5>
                  
                </div>
              </div>
            </div>
          </div>
       </div>
    </div>
    </div>