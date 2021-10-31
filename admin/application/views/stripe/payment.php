<?php include('../includes/db.php'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
  //echo "conncection sucess";
}
?>


<?php
// Starting session
session_start();
?>  <?php //print_r($_SESSION);
  if(!$_SESSION['regid']){
header('location:../','refresh');
  }
  $reg=$_SESSION['regdata'];
  $regid=$_SESSION['regid'];
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Secure Payment Form</title>
<link rel="stylesheet" href="css/bootstrap-min.css">
<link rel="stylesheet" href="css/bootstrap-formhelpers-min.css" media="screen">
<link rel="stylesheet" href="css/bootstrapValidator-min.css"/>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
<link rel="stylesheet" href="css/bootstrap-side-notes.css" />
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Abril+Fatface|Quicksand:300,400,500,700);
body{ font:500 13.5px/23px 'Quicksand', Arial, Helvetica, sans-serif;   }
.form-control{ font:700 15px/23px 'Quicksand', Arial, Helvetica, sans-serif; }
.col-centered {
    display:inline-block;
    float:none;
    text-align:left;
    margin-right:-4px;
}
.row-centered {
	margin-left: 9px;
	margin-right: 9px;
}
</style>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap-min.js"></script>
<script src="js/bootstrap-formhelpers-min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator-min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#payment-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		submitHandler: function(validator, form, submitButton) {
                    // createToken returns immediately - the supplied callback submits the form if there are no errors
                    Stripe.card.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val(),
			name: $('.card-holder-name').val(),
			address_line1: $('.address').val(),
			address_city: $('.city').val(),
			address_zip: $('.zip').val(),
      address_state: $('.state').val(),
			address_country: $('.country').val()
                    }, stripeResponseHandler);
                    return false; // submit from callback
        },
        fields: {
            street: {
                validators: {
                    notEmpty: {
                        message: 'The street is required and cannot be empty'
                    },
					stringLength: {
                        min: 6,
                        max: 96,
                        message: 'The street must be more than 6 and less than 96 characters long'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required and cannot be empty'
                    }
                }
            },
			zip: {
                validators: {
                    notEmpty: {
                        message: 'The zip is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
					stringLength: {
                        min: 6,
                        max: 65,
                        message: 'The email must be more than 6 and less than 65 characters long'
                    }
                }
            },
			cardholdername: {
                validators: {
                    notEmpty: {
                        message: 'The card holder name is required and can\'t be empty'
                    },
					stringLength: {
                        min: 6,
                        max: 70,
                        message: 'The card holder name must be more than 6 and less than 70 characters long'
                    }
                }
            },
			cardnumber: {
		selector: '#cardnumber',
                validators: {
                    notEmpty: {
                        message: 'The credit card number is required and can\'t be empty'
                    },
					creditCard: {
						message: 'The credit card number is invalid'
					},
                }
            },
			expMonth: {
                selector: '[data-stripe="exp-month"]',
                validators: {
                    notEmpty: {
                        message: 'The expiration month is required'
                    },
                    digits: {
                        message: 'The expiration month can contain digits only'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator) {
                            value = parseInt(value, 10);
                            var year         = validator.getFieldElements('expYear').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < 0 || value > 12) {
                                return false;
                            }
                            if (year == '') {
                                return true;
                            }
                            year = parseInt(year, 10);
                            if (year > currentYear || (year == currentYear && value > currentMonth)) {
                                validator.updateStatus('expYear', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
            expYear: {
                selector: '[data-stripe="exp-year"]',
                validators: {
                    notEmpty: {
                        message: 'The expiration year is required'
                    },
                    digits: {
                        message: 'The expiration year can contain digits only'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator) {
                            value = parseInt(value, 10);
                            var month        = validator.getFieldElements('expMonth').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < currentYear || value > currentYear + 100) {
                                return false;
                            }
                            if (month == '') {
                                return false;
                            }
                            month = parseInt(month, 10);
                            if (value > currentYear || (value == currentYear && month > currentMonth)) {
                                validator.updateStatus('expMonth', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
			cvv: {
		selector: '#cvv',
                validators: {
                    notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },
					cvv: {
                        message: 'The value is not a valid CVV',
                        creditCardField: 'cardnumber'
                    }
                }
            },
        }
    });
});
</script>
<script type="text/javascript">
            // this identifies your website in the createToken call below
            Stripe.setPublishableKey('pk_live_SwcPpiXawfP2zM30x4cuGvUx00ZJdecLYI');
 
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    // re-enable the submit button
                    $('.submit-button').removeAttr("disabled");
					// show hidden div
					document.getElementById('a_x200').style.display = 'block';
                    // show the errors on the form
                    $(".payment-errors").html(response.error.message);
                } else {
                    var form$ = $("#payment-form");
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    // and submit
                    form$.get(0).submit();
                }
            }
 

</script>
</head>
<body>

<div class="row">
  <div class="col-md-12 text-center">

  <?php  $sql = "SELECT * FROM logo";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
       <a href="index.php"> 
    <img src="../admin/assets/aboutpage/<?php echo $row['image']; ?>" style="max-width: 200px;margin: 0px;"> 
</a> 
    
<?php }  ?></div>


</div>

  <div class="row row-centered">
<div class="col-md-1"></div>
    <div class="col-md-5">

   <div class="sfdsdf">
    <div class="sdfsdf">Registration Details</div>
      <div class="dfgrtg">
      <table width="100%">
        <tr>
          <td>Fullname</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['title']; ?> <?php echo $reg['first_name']; ?> <?php echo $reg['last_name']; ?></td>
        </tr>

         <tr>
          <td>Company Name</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['companyname']; ?></td>
        </tr>

        <tr>
          <td>City</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['city']; ?></td>
        </tr>

        <tr>
          <td>State</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['state']; ?></td>
        </tr>

        <tr>
          <td>Country</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['country']; ?></td>
        </tr>

        <tr>
          <td>Email</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['email']; ?></td>
        </tr>

        <tr>
          <td>phone</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['phone']; ?></td>
        </tr>

        <tr>
          <td>Address</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['address']; ?></td>
        </tr>

        <tr>
          <td>Total Amount</td>
          <td style="width:50px; text-align:center;">:</td>
          <td><?php echo $reg['amount']; ?></td>
        </tr>

      </table>
    </div>
    </div>


    <style type="text/css">
      .sfdsdf{ line-height: 30px;
        width: 95%; margin: 20px auto 50px auto; background: #eee;  border: 1px solid #4cae4c; border-radius: 6px;
      }
      .sfdsdf .dfgrtg{ padding: 15px; }
      .sdfsdf{ background: #4cae4c; padding: 6px 20px; font-size: 25px; color: #fff; border-radius: 5px 5px 0px 0px; }

      .has-feedback .form-control {
    padding-right: 37.5px  !important;
}

    </style>


    </div>


  <div class="col-md-5">
    <div class="sfdsdf">
    <div class="sdfsdf">Secure Payment Form</div>
      <div class="dfgrtg">
        
        <form action="" method="POST" id="payment-form" class="form-horizontal">
           <noscript>
  <div class="bs-callout bs-callout-danger">
    <h4 class="">JavaScript is not enabled!</h4>
    <p>This payment form requires your browser to have JavaScript enabled. Please activate JavaScript and reload this page. Check <a href="http://enable-javascript.com" target="_blank">enable-javascript.com</a> for more informations.</p>
  </div>
  </noscript>
  <?php
require 'lib/Stripe.php';

$error = '';
$success = '';
    
if ($_POST) {
  \Stripe\Stripe::setApiKey("sk_live_ysQyvJIjqqk6MjTJsro2T7Eq00EzBkCKEJ");

  try {
  if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip']))
      throw new Exception("Fill out all required fields.");
    if (!isset($_POST['stripeToken']))
      throw new Exception("The Stripe Token was not generated correctly");
        
  \Stripe\Charge::create([
    "amount" => $reg['amount']*100,
    //"amount" => 2,
    "currency" => "USD",
    "source"   => $_POST['stripeToken'], // obtained with Stripe.js
    "description" => $_POST['email']
  ]);
    //print_r($_POST);  
    //update payment success    
    $success = '<div class="alert alert-success">
                <strong>Success!</strong> Your payment was successful.
        </div>
        <SCRIPT>
        setTimeout(function(){ 
        location.href="../"; }, 3000);
        </script>';
        unset($_SESSION['regid']);
        unset($_SESSION['regdata']);
  }
  catch (Exception $e) {
  $error = '<div class="alert alert-danger">
        <strong>Error!</strong> '.$e->getMessage().'
        </div>';
  }
}
?>
  <div class="alert alert-danger" id="a_x200" style="display: none;"> <strong>Error!</strong> <span class="payment-errors"></span> </div>
  <span class="payment-success">
  <?= $success ?>
  <?= $error ?>
  </span>
  <fieldset style="display: none;">
  
  <!-- Form Name -->
  <legend>Billing Details</legend>
  
  <!-- Street -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Street</label>
    <div class="col-sm-6">
      <input type="text" name="street" value="<?php echo $reg['address']; ?>" placeholder="Street" class="address form-control">
    </div>
  </div>
  
  <!-- City -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">City</label>
    <div class="col-sm-6">
      <input type="text" name="city" value="<?php echo $reg['city']; ?>" placeholder="City" class="city form-control">
    </div>
  </div>
  
  <!-- State -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">State</label>
    <div class="col-sm-6">
      <input type="text" name="state" value="<?php echo $reg['state']; ?>" maxlength="65" placeholder="State" class="state form-control">
    </div>
  </div>
  
  <!-- Postcal Code -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Postal Code</label>
    <div class="col-sm-6">
      <input type="text" name="zip" value="<?php echo $regid; ?>" placeholder="Postal Code" class="zip form-control">
    </div>
  </div>
  
  <!-- Country -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Country</label>
    <div class="col-sm-6"> 
      <input type="text" name="country" placeholder="Country" value="<?php echo $reg['country']; ?>" class="country form-control">
     <!--  <div class="country bfh-selectbox bfh-countries" value="<?php echo $reg['country']; ?>" name="country" placeholder="Select Country" data-flags="true" data-filter="true"> </div> -->
    </div>
  </div>
  
  <!-- Email -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" maxlength="65" value="<?php echo $reg['email']; ?>" placeholder="Email" class="email form-control">
    </div>
  </div>
  </fieldset>
  <fieldset>
    
    <!-- Card Holder Name -->
    <div class="form-group">
      <label class="col-sm-4 control-label"  for="textinput">Card Holder's Name</label>
      <div class="col-sm-6">
        <input type="text" name="cardholdername" maxlength="70" placeholder="Card Holder Name" class="card-holder-name form-control">
      </div>
    </div>
    
    <!-- Card Number -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Card Number</label>
      <div class="col-sm-6">
        <input type="text" id="cardnumber" maxlength="19" placeholder="Card Number" class="card-number form-control">
      </div>
    </div>
    
    <!-- Expiry-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Card Expiry Date</label>
      <div class="col-sm-6">
        <div class="form-inline">
          <select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
            <option value="01" selected="selected">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <span> / </span>
          <select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
          </select>
          <script type="text/javascript">
            var select = $(".card-expiry-year"),
            year = new Date().getFullYear();
 
            for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
            }
        </script> 
        </div>
      </div>
    </div>
    
    <!-- CVV -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">CVV/CVV2</label>
      <div class="col-sm-3">
        <input type="text" id="cvv" placeholder="CVV" maxlength="4" class="card-cvc form-control">
      </div>
    </div>
    
    <!-- Important notice -->
    <div class="form-group">
    <div class="panel panel-success" style="display: none;">
      <div class="panel-heading">
        <h3 class="panel-title">Important notice</h3>
      </div>
      <div class="panel-body">
        <p>Your card will be charged 30€ after submit.</p>
        <p>Your account statement will show the following booking text:
          XXXXXXX </p>
      </div>
    </div>
    </div>
    <!-- Submit -->

    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput"></label>
      <div class="col-sm-3">
       <button class="btn btn-success" type="submit">Pay Now</button>
      </div>
    </div>


    
  </fieldset>
</form>

      </div>
    </div>
 
 
</body>
</html>
