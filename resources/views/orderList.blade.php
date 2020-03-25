<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Food Order</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Food Order</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/food-category">Food Category</a></li>
            <li><a href="food-list">Food List</a></li>
            <li class="active"><a href="/order-list">Order List</a></li>
            <li><a href="/customer">Customer List</a></li>
            <li><a href="/payment-method">Payment Methods</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h2>Food Order List</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Order No</th>
            <th>Order Qty</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orderLists as $orderList)
        <tr>
            <td>{{$orderList->order_id}}</td>
            <td>{{$orderList->qty}}</td>
            <td>{{$orderList->total_price}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>


</div>
</body>
</html>
