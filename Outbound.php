<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberTech Inbound And Outbound </title>
    <style>
* {
    font-family: sans-serif;
}
    info {
            margin: 50px auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 600px;
        }
    body {
        background-color: #efefef;
    }

    .info {
        width: 500px;
        background-color: #fff;
        box-shadow: 0 0 20px 0 #999;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    form{
        margin: 35px;
    }

    .info h3{
        font-size: 40px;
        text-align: center;
        text-transform: uppercase;
        margin: 40px 0;
    }

    .info label{
        font-size: 20px;
        margin: 15px 0;
    }

    .info input{
        width: 400px;
        height: 40px;
        margin-top: 20px;
        padding-left: 10px;
        padding-right: 10px;
        border: 1px solid #777;
        border-radius: 14px;
        outline: none;
    }

    .info input, select{
        width: 400px;
        height: 40px;
        margin-top: 20px;
        padding-left: 10px;
        padding-right: 10px;
        border: 1px solid #777;
        border-radius: 14px;
        outline: none;
    }

    .info button{
        border-radius: 20px;
        color: #fff;
        margin-top: 18px;
        padding: 10px;
        background-color: #47c35a;
        font-size: 12px;
        border: none;
        cursor: pointer;
    }

    </style>
</head>
<body>
    <div class="info">
        <h3>Outbound Transaction</h3>
        <form action="#" method="post">
        <label for="request">Requested By:</label>
            <input type="text" id="request" name="request" placeholder="Requested by:"><br><br>

            <label for="ItemNm">Item Name:</label>
            <input type="text" id="ItemNm" name="ItemNm" placeholder="Item Name:"><br><br>
                    
            <label for="Quantity">Quantity:</label>
            <input type="number" id="Quantity" name="Quantity" placeholder="Quantity:"><br><br>

            <label for="RequestDate">Request Date:</label>
            <input type="date" id="RequestDate" name="RequestDate" placeholder="Request Date:"><br><br>

            <label for="Status">Status</label>
            <input type="text" id="Status" name="Status" placeholder="Status:"><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
		  if (isset($_POST['submit'])){
			echo "Requested By: ".$_POST['request'].'<br />';
			echo "Item Name: ".$_POST['ItemNm'].'<br />';
			echo "Quantity: ".$_POST['Quantity'].'<br />';
			echo "Request Date: ".$_POST['RequestDate'].'<br />';
			echo "Status: ".$_POST['Status'].'<br />';
		  }
		?>

    </div>
</body>
</html>