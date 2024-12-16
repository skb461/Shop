<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Address</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from form ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["fname"]?> <?=$row["lname"]?></td>
      <td><?=$row["mail"]?></td>
      <td><?=$row["num"]?></td>
      <td><?=$row["address"]?></td>
      <!-- <td><?=$row["registered_at"]?></td> -->
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>