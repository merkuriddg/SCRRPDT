<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    // array of widget prices
    var widgetPrices = [1.25, 2.75, 3.15];
    // loop through widget prices and output values to the console
    console.log("price for " + i + " = " + widgetPrices[i]);
    for (var i = 0; i < widgetPrices.length; i++) {
    }
    // create a function to output the price per unit to the web page
    // loop through prices and output to the table
    // output value at position i to the coorisponding span element for PPU
    document.getElementById("w" + (i+1) + "ppu").innerHTML = widgetPrices[i];
    for (var i = 0; i < widgetPrices.length; i++) {
    }
    function setPPU() {
    }
    // read in the qty for the specified widget, calc total (qty * ppu) and output value
    // i will be the widget number
    // i -1 will be the associated array position for PPU
    // read in the quantity for widget i
    var qty = document.getElementById("w" + i + "qty").value;
    // calculate the total for widget i
    var total = qty * widgetPrices[i-1];
    // output the total to widget i
    document.getElementById("w" + i + "total").innerHTML = total;
    function calcTotal(i) {
    }
    <script>
        // read in the value from text input for widget 1
        var qty = document.getElementById("w1qty").value;
        // output the value read in for confirmation
        console.log(qty);
        // caculate total by multiplying price per unit by quantity
        var total = qty * 1.25;
        // output total for confirmation
        console.log(total);
        // output total to widget 1's span tag of w1total
        document.getElementById("w1total").innerHTML = "$ " + total.toFixed(2);
        function calcW1Total() {
        }
    </script>
</head>

<body onLoad="setPPU()"> <!--run the setPPU function once the body has been loaded-->
<tr>
    <table border="1">
        <td>Item</td>
        <td>Qty</td>
        <td>Price/Unit</td>
        <td>Total</td>
        </tr>
        <!--this method used the calcW1Total() function
        <tr>
        <td>Widget 1</td>
        <td><input type="text" id="w1qty" value="0" onKeyUp="calcW1Total()"/></td>
        <td><span id="w1ppu">$ 1.25</span></td>
        <td><span id="w1total">$ -.--</span></td>
        </tr>
        -->
        <tr>
            <td>Widget 1</td>
            <td><input type="text" id="w1qty" value="0" onKeyUp="calcTotal(1)"/></td>
            <td><span id="w1ppu">$ 91.25</span></td>
            <td><span id="w1total">$ -.--</span></td>
        </tr>
        <tr>
            <td>Widget 2</td>
            <td><input type="text" id="w2qty" value="0" onKeyUp="calcTotal(2)"/></td>
            <td><span id="w2ppu">$ 92.75</span></td>
            <td><span id="w2total">$ -.--</span></td>
        </tr>
        <tr>
            <td>Widget 3</td>
            <td><input type="text" id="w3qty" value="0" onKeyUp="calcTotal(3)"/></td>
            <td><span id="w3ppu">$ 93.15</span></td>
            <td><span id="w3total">$ -.--</span></td>
        </tr>
        <tr>
            <td colspan="3">Grand Total</td>
            <td><span id="grandTotal">$ -.--</span></td>
        </tr>
    </table>
</body>
</html>