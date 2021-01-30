<?php
require 'import_a.php';
$_SESSION['page']="Order History";
require 'header.php';
?>
<head>
<style type="text/css">
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
            border-width: 1px;
            border-color: white;
            border-style: solid;

        }
        .tab tr:nth-child(even)
        {
            background-color: #f2f2f2;
        }
        .tab tr:nth-child(odd)
        {
            background-color: #ffffff;
        }
        .tab tr:first-child,th
        {
            color:white;
            padding:0.5rem;
           background-color: tomato;

        }
         @media screen and (max-width:850px)
        {
            .head
            {
                flex-direction:column;
                align-items: center;
            }
            .head h1
            {
                margin-bottom: 1rem;
                text-align:center;
            }
            nav ul
            {
                flex-direction: column;
                text-align:center;


            }

        }
        td,th
        {
            border-width: 0.1rem;
            border-color: white;
            border-style: solid;
        }
        td,th
        {
            font-size: 1.2rem;
            padding: 0.9rem;
        }
    </style>
</head>
    <div class="tabcontainer">
    <table class="tab">
        <tr>
            <th rowspan="2">date</th>
            <th colspan="5">My order details</th>
        </tr>
        <tr>
            <th>Image</th>
            <th>ProductName</th>
            <th>CostperUnit</th>
            <th>Quantity</th>
            <th>Status</th>
        </tr>
        <?php
        $user=$_SESSION['user1'];
        $query="select * from history where orderedby='$user'";
        $result=mysqli_query($link,$query);
        while($row=mysqli_fetch_array($result))
        {
        ?>
        <tr>
            <?php
                $orders=explode(',',$row['finalorder']);
                array_pop($orders);
                $length=count($orders);
                $order=explode(":",$orders[count($orders)-1]);
                array_pop($orders);
            ?>
            <td style="background-color: tomato;color: white;" rowspan="<?php echo $length?>"><?php echo $row['date']?></td>
            <?php
                $query1="select * from pizza where id='$order[0]'";
                $result1=mysqli_query($link,$query1);
                $row1=mysqli_fetch_array($result1);
            ?>
            <td><img src="<?php echo $row1['src']?>"alt="img not found" style="width:20%;"></td>
            <td><?php echo $row1['name'];?></td>
            <td><?php echo $row1['price'];?></td>
            <td><?php echo $order[1];?></td>
            <td rowspan="<?php echo $length?>"><?php
            if($row['status']==1)
            {
                echo 'accepted';
            }
            else if($row['status']==-1)
            {
                echo 'rejected';
            }
            else
            {
                echo 'Status unknown';
            }
            ?></td>
        </tr>
        <?php
        foreach ($orders as $x)
        {
            $order=explode(":",$x);
            $query1="select * from pizza where id='$order[0]'";
            $result1=mysqli_query($link,$query1);
            $row1=mysqli_fetch_array($result1);
        ?>
        <tr>
            <td><img src="<?php echo $row1['src']?>" alt="img not found" style="width:20%;"></td>
            <td><?php echo $row1['name'];?></td>
            <td><?php echo $row1['price'];?></td>
            <td><?php echo $order[1];?></td>

        </tr>
        <?php
        }
        ?>
        <?php
        }
        ?>
    </div>
    </table>
</body>
</html>
