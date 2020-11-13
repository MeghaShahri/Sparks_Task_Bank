<?php 
    include 'common/_navbar.php';
    include 'common/_dbconnect.php';
?>

<style>

    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin-left:150px;
    margin-top:20px;
    
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #0275d8;
    color: white;
    }
    a{
     color:white;
     text-decoration:none;  
   }
    #view-btn{
        width:80px;
        background-color: #DC143C;
        padding:4px;
        color:white ;
        border-radius: 10px;
        border:white;
        margin-left:60px; 
        text-decoration:none;   
    }

    .select_users{
      margin-top:30px;
      font-size:20px;
      text-align:center;
      margin-bottom:20px;
      display:inline-flex;
      margin-left:150px;
    }

    
 
</style>

<?php
 $sql1 = "SELECT * FROM users" ;

if($result = mysqli_query($conn, $sql1)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id='customers'>";
            echo "<tr>";
                echo "<th>sno</th>";
                echo "<th>Name</th>";
                echo "<th>Email Id</th>";
                echo "<th>Current Balance</th>";
                echo "<th>View Customer</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<form method='post' action='view.php'>";
                echo "<td>" . $row['uid'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['balance'] . "</td>";
                $id_value=$row['uid'] ;
                

                echo " <input type='hidden' name='user_id' value=" .$id_value ."/> ";
                
                echo "<td><a href='view.php?user_id=$id_value'><button  style='text-decoration:none;' id='view-btn'>View</a></button></td>";
                echo "</form>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }}

    echo '
    <form method="get" action="view.php">
    <div class="select_users">
    <label for="select" style="margin-right:10px;font-weight:bold;">Select user :</label>
        <select name="user_id" id="select">';
          $sql1="select Name from users";
          $result1=mysqli_query($conn,$sql1);
          while($row1=mysqli_fetch_assoc($result1)){
              $user_name = $row1['Name'];
              $sql2="select uid from users where Name='$user_name' ";
              $result2=mysqli_query($conn,$sql2);
              $row2=mysqli_fetch_assoc($result2);
              $id_value=$row2['uid'];

              echo '<option value=' . $id_value . '>'. $user_name .'</option>';
              
           }
                        
        echo '</select></div>
        <input type="submit" value="Submit" class="btn btn-primary">
        </form>';

?>
