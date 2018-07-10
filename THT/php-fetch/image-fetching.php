 <?php

//collect search keyword
if(isset($_POST['insert'])) 
{$conn=mysqli_connect("localhost","root","") ;
mysqli_select_db($conn, "complete_minor") ;
 $enteredID = $_POST['unique_ID'];
  
  $sqlquery = "SELECT * FROM tenant WHERE unique_ID = '$enteredID'";

  $query = mysqli_query($conn,$sqlquery);
  $count = mysqli_num_rows($query);
  if($count == 0)
  {
    echo "No search results";;
  }
    else
      {
      while($row = mysqli_fetch_array($query)){
        $image = $row['pic'];
        
        $output = '<img src="uploads/'.$row['pic'].'" style="width: 200px; height: 200px; background-size: cover; display: block; border-radius: 100px; -webkit-border-radius: 100px; -moz-border-radius: 100px;" />';
        echo $output;
      }
}}

?>
