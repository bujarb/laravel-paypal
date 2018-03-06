<html>
    <head>
        <title>Pay with PayPal</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="row" style="margin-top: 200px;">
            <div class="col-md-2 col-md-offset-5">
                <form action="{{ URL::to('paypal') }}" method="POST" id="payment-form">

                    {{csrf_field()}}

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">Pay with paypal</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group text-center">
                                        <label for="" class="col-form-label">Enter amount</label>
                                        <input type="text" class="form-control" id="amount" name="amount">
                                        <button class="btn btn-success btn-block" style="margin-top: 10px;">Pay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>