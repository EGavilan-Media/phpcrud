<?php

  // Insert the content of connection.php file
  require_once 'connection.php';

  use Dompdf\Dompdf;

?>	
 	
  <img src="images/egm.jpg" width="100" height="90">

  <head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;

    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    td.a {
      text-align: right;
      font-weight: bold;
    }
  </style>
  </head>
<body>

  <table width='100%'>
    <tr>
      <th>ALL RECORDS</th>
    </tr>
  </table>
  <table width='100%'>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Skills</th>
      <th>Designation</th>
      <th>Created</th>
    </tr>
    <?php
        
    $sql = "SELECT * FROM tbl_record";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_row($result)) {
    
      ?>
        <tr>
          <td><?php echo $row[0] ?></td>
          <td><?php echo $row[1] ?></td>
          <td><?php echo $row[2] ?></td>
          <td><?php echo $row[3] ?></td>
          <td><?php echo $row[4] ?></td>
          <td><?php echo $row[5] ?></td>
          <td><?php echo $row[6] ?></td>
        </tr>
      <?php
      
     }
    ?>
  </table>

