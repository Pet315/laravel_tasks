<h1>

    <u>Account:</u> <br>{{$account}}<br><br>

    <u>This account orders:</u> <br>{{$account_orders}}<br><br>

    <u>Products:</u> <br>
    @foreach($products as $pr)
        {{$pr['id']}}. {{$pr['name']}}
        {{$pr['price']}} {{$pr['currency']}}<br>
    @endforeach

    <br><u>Product {{$product_id}} orders:</u> <br>{{$product_orders}}

</h1>

{{--<h1>--}}
{{--{{$account}}--}}
{{--</h1>--}}
