<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Create PDF from View in CodeIgniter Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>

<h1>Framing Details</h1>
<div class="button" id="grand-total"></div>

<table class="table table-striped table-hover">
    <tr>
        <th>Artwork</th>
        <th>Size</th>
        <th>Price / Sq.ft</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td> <p id="artworkName">-</p></td>
        <td> <p id="artworkSize"></p></td>
        <td> <p id="artworkPrice">-</p></td>
        <td> <p id="artworkSubtotal"> </p></td>
    </tr>
    <tr>
        <th col-span=3>Mat # 1</th>
    </tr>
    <tr>
        <td> <p id="Mat_1"><?php if(isset($invoice['top_matColor']) == ""){
           echo "Null";
        }else{ echo $invoice['top_matColor'];} ?></p></td>
        <td> <p id="Mat1Size"><?php $invoice['mat_price']; ?></p></td>
        <td> <p id="Mat1Amount"></p></td>
    </tr>
    <tr>
        <th col-span=3>Mat # 2</th>
    </tr>
    <tr>
        <td> <p id="Mat_2"><?php if(isset($invoice['middle_matColor']) == ""){
           echo "Null ";
        }else{echo $invoice['middle_matColor'];} ?></p></td>
        <td> <p id="Mat2Size">-</p></td>
        <td> <p id="Mat2Amount">-</p></td>
    </tr>
    <tr>
        <th col-span=3>Mat # 3</th>
    </tr>
    <tr>
        <td> <p id="Mat_3"><?php if(isset($invoice['bottom_matColor']) == ""){
           echo "Null ";
        }else{echo $invoice['bottom_matColor'];} ?></p></td>
        <td> <p id="Mat3Size">-</p></td>
        <td> <p id="Mat3Amount">-</p></td>
    </tr>
    <tr>
        <th col-span=3>Mat Sub-Total</th>
    </tr>
    <tr>
        <td> <p id="Mat_Subtotal">Subtotal : Rs 100</p></td>
    </tr>
    <tr>
        <th col-span=3>Frames</th>
    </tr>
    <tr>
        <td>Outer</td>
        <td>Size : 34 x 20</td>
        <td>Price : Rs 100</td>
    </tr>
    <tr>
        <td>Inner</td>
        <td>Size : 34 x 20</td>
        <td>Price : Rs 100</td>
    </tr>
    <tr>
        <td> <p id="Mat_Subtotal">Subtotal : Rs 200</p></td>
    </tr>
    <tr>
        <th>Grand Total : Rs <span id="grandTotalInside"></span></th>
    </tr>

</table>


</body>
</html>