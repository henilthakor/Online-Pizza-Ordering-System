<?php
require 'import_a.php';
$_SESSION['page']="Cart";
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        .name
        {
            background-color:tomato;
            text-align:center;
            color:white;
            font-size:2.5rem;
            margin: 1.3rem 0rem;
        }
        .tabcontainer
        {
            overflow-x:auto;
        }
        .tab
        {
            width:80%;
            text-align: center;
            margin:auto;
            border-collapse: collapse;
        }
        .tab tr:nth-child(even)
        {
            background-color: #f2f2f2;
        }
        .tab tr:first-child,th
        {
            color:white;
            padding:0.5rem;
           background-color: tomato;

        }
        .tab tr td button
        {
            color:white;
            background-color:tomato;
            border:none;
            border-radius: 5px;
            padding:0.5rem;
        }
        .last
        {
            width:80%;
            margin:auto;
            text-align: right;
        }
        .last button
        {
            color:white;
            background-color:lightgreen;
            border:none;
            border-radius: 5px;
            padding:0.5rem;
        }
        @media screen and (max-width:850px)
        {
            .last button
            {
                text-align: center;
            }
        }
</style>
</head>
<?php require 'header.php';?>
    <div class="tabcontainer">
        <?php
              if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
                echo "<div id='disappear' style='width:100%;'>Payment successful</div>";
                 unset($_SESSION['success']);
               }
            ?>
    <table class="tab">
        <tr>
            <th>Transaction.ID.</th>
            <th>Image</th>
            <th>ProductName</th>
            <th>CostperUnit</th>
            <th>Quantity</th>
            <th>TotalCost</th>
            <th>Action</th>
        </tr>
        <?php
        $totalcost=0;
        $user=$_SESSION['user1'];
        $query = "select * from cart where orderedby='$user'";
        $result = mysqli_query($link, $query);
        while($row1=mysqli_fetch_array($result))
        {
            $id=$row1['pizzaid'];
            $query1="select * from pizza where id=$id";
            $result1=mysqli_query($link, $query1);
            $row=mysqli_fetch_array($result1);
            $total=$row['price']*$row1['quantity'];
            $totalcost=$totalcost+$total;
        ?>
            <tr>
                <td>1</td>
                <td><img src="<?php echo $row['src'];?>" alt="img not found" style="width:20%;"></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><input type="number" min=1 style="width:15%" value="<?php echo $row1['quantity'];?>" readonly></td>
                <td><?php echo $total;?></td>
                <form action="editcart.php" method="POST">
                    <td><button type="submit" value="<?php echo $row1['id']?>" name="delete">Delete</button></td>
                </form>
            </tr>
        <?php
        }
        if($totalcost==0)
        {
               echo  '<td colspan="7"><h3><br>Cart is empty</h3></td>';
        }
    ?>
    </div>

    </table>
    <br><br>
    <div class="last">
        <form action="payment.php" method="POST">
            <button type="submit" value="<?php echo $totalcost?>" name="checkout">Proceed to Checkout</button>
        </form>
    <br>
    <div style="background-color: #ccc;text-align: right;padding:1.5rem;font-size: 1rem;">
        <?php echo $totalcost;?>
    </div>
    </div>
</body>
</html>
<script>
    var x=document.querySelector('nav ul a:nth-child(5)');
    var y=document.querySelectorAll('.dropdown');
    function ok()
    {
         y[0].style.display="block";
          y[1].style.display="block";
    }
    function notok()
    {
        y[0].style.display="none";
          y[1].style.display="none";

    }
</script>
