<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="http://juvenilepacersbd.com/wp-content/uploads/2017/03/jp-logo.png"
                                 style="width:100%; max-width:300px;">
                        </td>

                        <td>
                            Invoice #: 123<br>
                            Created: January 1, 2015<br>
                            Due: February 1, 2015
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            Acme Corp.<br>
                            John Doe<br>
                            john@example.com
                        </td>

                        <td>
                            Acme Corp.<br>
                            John Doe<br>
                            john@example.com
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>
                Payment Method
            </td>

            <td>
                Check #
            </td>
        </tr>

        <tr class="details">
            <td>
                COD
            </td>

            <td>
                1000
            </td>
        </tr>

        <tr class="heading">
            <td>
                Item
            </td>

            <td>
                Price
            </td>
        </tr>


        <?php
        if ($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach ($cartItems as $item) {
                ?>

                <tr class="item">
                    <td>
                        <?php echo $item["name"]; ?>
                    </td>

                    <td>
                        <?php echo '$' . $item["price"] . ' USD'; ?>
                    </td>
                </tr>


            <?php }
        }else{ ?>
        <tr>
            <td colspan="5"><p>Your cart is empty.....</p></td>
            <?php } ?>

        <tr class="total">
            <td></td>

            <td>
                <?php echo '$' . $cart->total() . ' USD'; ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>