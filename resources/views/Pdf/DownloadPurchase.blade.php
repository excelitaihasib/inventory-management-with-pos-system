<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #invoice-POS{
  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
  padding:2mm;
  margin: 0 auto;
  width: 70mm;
  background: #FFF;


h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
}

#top, #mid,#bot{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
}

#top{min-height: 100px;}
#mid{min-height: 80px;}
#bot{ min-height: 50px;}

#top .logo{
  //float: left;
	height: 60px;
	width: 60px;
	background: url{{public_path('assets/images/excelit.png')}} no-repeat;
	background-size: 60px 60px;
}
.clientlogo{
  float: left;
	height: 60px;
	width: 60px;
	background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
	background-size: 60px 60px;
  border-radius: 50px;
}
.info{
  display: block;
  //float:left;
  margin-left: 0;
}
.title{
  float: right;
}
.title p{text-align: right;}
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  //padding: 5px 0 5px 15px;
  //border: 1px solid #EEE
}
.tabletitle{
  //padding: 5px;
  font-size: .5em;
  background: #EEE;
}
.service{border-bottom: 1px solid #EEE;}
.item{width: 24mm;}
.itemtext{font-size: .5em;}

#legalcopy{
  margin-top: 5mm;
}



}
</style>
<body>
    <div id="invoice-POS">

        <center id="top">
          <div class=""> <img src="{{public_path('assets/images/excelit.png')}}" height="50px" width="200px" alt="eXCELIT LOGO
            "></div>
          <div class="info">
            <h2>EXCELIT AI </h2>
          </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
          <div class="info">
            <h2>Contact Info</h2>
            <p>
                Address : 17, Alhaz Samsuddin Mansion (9th Floor), Moghbazar, New Easkaton, Ramna, Dhaka-1217</br>
                Email   : info@excelitai.com</br>
                Phone   : +88 01611 815656</br>
            </p>
          </div>
          <div>
            <p>sales_date:</p>
            <p>created_by:</p>
            <p>customer_name:</p>
            <p>Product Name:</p>
        </div>
        </div><!--End Invoice Mid-->

        <div id="bot">

                        <div id="table">
                            <table>
                                <tr class="tabletitle">
                                    <td class="item"><h2>Details</h2></td>
                                    <td class="Hours"><h2>Qty</h2></td>
                                    <td class="Rate"><h2>Sub Total</h2></td>
                                </tr>

                                <tr class="service">
                                    <td class="tableitem"><p class="itemtext">Amount</p></td>
                                    <td class="tableitem"><p class="itemtext">5</p></td>
                                    <td class="tableitem"><p class="itemtext">$375.00</p></td>
                                </tr>

                                <tr class="service">
                                    <td class="tableitem"><p class="itemtext">Discount</p></td>
                                    <td class="tableitem"><p class="itemtext">3</p></td>
                                    <td class="tableitem"><p class="itemtext">$225.00</p></td>
                                </tr>

                                <tr class="service">
                                    <td class="tableitem"><p class="itemtext">Tax</p></td>
                                    <td class="tableitem"><p class="itemtext">5</p></td>
                                    <td class="tableitem"><p class="itemtext">$375.00</p></td>
                                </tr>

                                <tr class="service">
                                    <td class="tableitem"><p class="itemtext">Payment</p></td>
                                    <td class="tableitem"><p class="itemtext">20</p></td>
                                    <td class="tableitem"><p class="itemtext">$1500.00</p></td>
                                </tr>

                                <tr class="service">
                                    <td class="tableitem"><p class="itemtext">Due</p></td>
                                    <td class="tableitem"><p class="itemtext">10</p></td>
                                    <td class="tableitem"><p class="itemtext">$750.00</p></td>
                                </tr>



                                <tr class="tabletitle">
                                    <td></td>
                                    <td class="Rate"><h2>Total</h2></td>
                                    <td class="payment"><h2>$3,644.25</h2></td>
                                </tr>

                            </table>
                        </div><!--End Table-->

                        <div id="legalcopy">
                            <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
                            </p>
                        </div>

                    </div><!--End InvoiceBot-->
      </div><!--End Invoice-->

</body>
</html>
