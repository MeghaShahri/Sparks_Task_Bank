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
   
 
</style>

<?php

 $sql1 = "SELECT * FROM `transfer money`" ;
 
if($result = mysqli_query($conn, $sql1)){
   
    if(mysqli_num_rows($result) > 0){
       
        echo "<table id='customers'>";
            echo "<tr>";
                echo "<th>Sender Name</th>";
                echo "<th>Receiver Name</th>";
                echo "<th>Amount Transferred</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<form>";
                $sender_id=$row['sender_id'] ;
                $rec_id=$row['receiver_id'];

                $sql2 = "SELECT Name FROM users where uid=$sender_id" ;
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_array($result2);
                $sender_name=$row2['Name'];

                $sql3 = "SELECT Name FROM users where uid=$rec_id" ;
                $result3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($result3);
                $rec_name=$row3['Name'];


                echo "<td>" . $sender_name . "</td>";
                echo "<td>" . $rec_name . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                
                echo "</form>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }}

?>
