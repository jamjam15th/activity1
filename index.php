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
        <h3>Supplier Info</h3>
        <form action="#" method="post">
            <label for="supplier">Supplier Name:</label>
            <input type="text" id="supplier" name="supplier" placeholder="Supplier Name:">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Address:">
            <label for="contactinfo">Contact Info:</label>
            <input type="text" id="contactinfo" name="contactinfo" placeholder="Contact Info:">
            <label for="ProductT">Product Type:</label>
            <select id="ProductT" name="ProductT">
                <option value="Motherboard">Motherboard</option>
                <option value="Processor">Processor</option>
                <option value="RAM">RAM</option>
            </select>
            <label for="item">Product Name:</label>
            <input type="text" id="item" name="item" placeholder="Product Name:">
            <label for="quantity">Quantity:</label>
            <input type="text" id="quantity" name="quantity" placeholder="Quantity:">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" placeholder="Amount:">
            <label for="orderedby">Ordered By:</label> 
            <input type="text" id="orderedby" name="orderedby" placeholder="Ordered By:">
            <label for="PaymentM">Payment Method:   </label>
            <select id="PaymentM" name="PaymentM">
                <option value="Cash">Cash</option>
                <option value="Credit">Credit</option>
                <option value="Online">Online</option>
            </select>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
	    if (isset($_POST['submit'])){
	      echo "Supplier Name: ".$_POST['supplier'].'<br />';
	      echo "Address: ".$_POST['address'].'<br />';
	      echo "Contact Info: ".$_POST['contactinfo'].'<br />';
	      echo "Product Type: ".$_POST['ProductT'].'<br />';
	      echo "Item: ".$_POST['item'].'<br />';
	      echo "Quantity: ".$_POST['quantity'].'<br />';
	      echo "Amount: ".$_POST['amount'].'<br />';
	      echo "Ordered By: ".$_POST['orderedby'].'<br />';
	      echo "Mode Of Payment: ".$_POST['PaymentM'].'<br />';
	    }
	  ?>

    </div>
</body>
</html>