<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-CASH</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");
      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }
      .card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }
      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: white;
      }
      .justify-content-around span {
        font-size: 12px;
      }
      .justify-content-around div:hover {
        background: #545ebd;
        color: white;
        cursor: pointer;
      }
      .justify-content-around div:nth-child(1) {
        background: red;//#545ebd;
		
		}
      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }
      h6 {
        font-size: 15px;
      }
      .tcash {
        background-color: red !important;
      }
      img {
        border-radius: 15px;
      }
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="tcash"><span>Aertel Money </span></div>
          <div><span>Paypal</span></div>
          <div><span>Card</span></div>
        </div>
        <div class="media mt-4 pl-2">
          <img src="images/CASH_LOGO" class="mr-3" height="75" />
          <div class="media-body">
            <h6 class="mt-1">Enter Amount & Number</h6>
          </div>
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->
            <form class="row g-3" action="./stkpay.php" method="POST">
            
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number">
                </div>
             
                <div class="col-12">
                  <button type="submit" class="btn btn-danger" name="submit" value="submit">PAY</button><br><br>
				  <a href="index.php">Use M-PESA instead?</a>
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>