<style>
    .section{
        background-color:#ECF0F1 ; 
        margin-top: 2%;
        padding-top:40px;
        padding-bottom:40px;
        margin-left:6%;
        margin-right:6%;
        border-radius:10px;
    }
    .details{
        margin-top:20px;
        margin-left:100px;
    }
    span{
          color: blue;
          font-weight:bold;
          font-size:55px;
          text-align:center;
    }
    #email,#bal{
        color:red;
        font-weight:normal;
        font-size:40px;
    }
    .form-group{
        margin-left:200px;
        margin-right:200px;
        margin-top:20px;
    }
    input[type=text],
    input[type=email]
    {
        width:80%;
    }

    span2{
        margin-left:200px; 
        color:#4BB543;    
        font-size:30px;
        font-weight:bold;
        margin-bottom:10px;
        

    }

    span3{
        margin-left:200px; 
        color:red;    
        font-size:30px;
        font-weight:bold;
        margin-bottom:10px;
        
    }

</style>

<?php 
    session_start();
    include 'common/_navbar.php';
    include 'common/_dbconnect.php';
   
$var_value = $_GET['user_id'];


// if($_SESSION['succ']==1){
//   echo ' <div class="alert alert-success" role="alert">
//     This is a success alert—check it out!
//     </div>';

// }else if($_SESSION['succ']==0){
//    echo '<div class="alert alert-danger" role="alert">
//     This is a danger alert—check it out!
//     </div>';

// }
echo '</div>';

$sql1 = "SELECT * FROM users where uid=$var_value" ;
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($result1);
$name=$row['Name'];
$email=$row['email'];
$receiver_balance=$row['balance'];
$receiver_uid=$row['uid'];

echo '<div class="section">
<div class="details">';
echo '<h1><span>' .$name. '</span></h1>
<h2>EMAIL ID:<span id="email">' .$email. '</span></h2>
<h2 >Current Balance:<span id="bal">Rs ' .$receiver_balance. '</span></h2>';
echo '</div>
</div>

<h1 style="text-align:center; margin-top:20px;">Transfer Money to this user!</h1>
<form method="post" action=#check>

  <div class="form-group">
  <label for="exampleInputEmail1" style="font-size:20px;">Email address:</label>
  <input type="email" class="form-control" id="email_id" name="email_id" aria-describedby="emailHelp" placeholder="Enter your email">
  
</div>

<div class="form-group">
    <label for="exampleInputtext1" style="font-size:20px;">Amount:</label>
    <input type="text" class="form-control" id="amt" name="amt" aria-describedby="text1Help" placeholder="Enter Amount to be transferred">
  </div>
 
  <button type="submit" class="btn btn-primary" style="margin-left:200px;">Transfer</button>
</form>';
?>

<div class="check" id="check">
 <?php 
  include 'common/_dbconnect.php';


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sender_email=$_POST['email_id'];
        $amount=$_POST['amt'];
       
        $sql = "SELECT * FROM `users` WHERE email='$sender_email' ";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);
        $sender_uid=$row['uid'];
        $sender_balance=$row['balance'];

        $sql1 = "SELECT * FROM users where uid=$var_value" ;
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result1);
        $receiver_balance=$row1['balance'];
        $receiver_uid=$row1['uid'];

        $sum=$receiver_balance + $amount;
        $deduct=$sender_balance - $amount;

        if($amount<=$sender_balance){
            $sql2="UPDATE `users` SET `balance` = $sum WHERE `users`.`uid` = $receiver_uid";
            $result2 = mysqli_query($conn, $sql2);
            $set=1;

            $sql3="UPDATE `users` SET `balance` = $deduct WHERE `users`.`uid` = $sender_uid";
            $result3 = mysqli_query($conn, $sql3);

            $sql4="INSERT INTO `transfer money` (`sender_id`, `receiver_id`, `amount`) VALUES ($sender_uid,$receiver_uid,$amount)";
            $result4 = mysqli_query($conn, $sql4);
            
            echo '<span2>Transaction Successful!</span2>';
            
           
        }
        else{
            echo '<span3>Transaction Unsuccessful ! You have insufficient balance</span3>';
         

        }
            
    }
     
 ?>
</div>
