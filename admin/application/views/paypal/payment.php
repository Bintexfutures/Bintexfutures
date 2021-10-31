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
  <!--<script-->
  <!--  src="https://www.paypal.com/sdk/js?currency=INR&client-id=AWeKEsrIgFEbjgTqa4bRaKLqhz6ADdv6HC0a8V1oL2PyUov_dY7aUHPYODIcQi2fbMcOSxFrtJ32Vz2y">-->
  <!--</script>-->

  <script
    src="https://www.paypal.com/sdk/js?currency=USD&client-id=AWeKEsrIgFEbjgTqa4bRaKLqhz6ADdv6HC0a8V1oL2PyUov_dY7aUHPYODIcQi2fbMcOSxFrtJ32Vz2y">
  </script> 



  <link rel="stylesheet" href="../stripe/css/bootstrap-min.css">
<link rel="stylesheet" href="../stripe/css/bootstrap-formhelpers-min.css" media="screen">
<link rel="stylesheet" href="../stripe/css/bootstrapValidator-min.css"/>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
<link rel="stylesheet" href="../stripe/css/bootstrap-side-notes.css" />


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
    </style>
    </div>

    <div class="col-md-5">


   <div class="sfdsdf">
    <div class="sdfsdf">Secure Payment Form
 
</div>
      <div class="dfgrtg">
  <br />
        <div id="paypal-button-container"></div>

        <br />
        <br />
      


      </div>
    </div>
  </div>

  
</div>
</div>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $reg['amount']; ?>'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
        location.href="../";
        // Call your server to save the transaction
      return fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        });
      });
    }
  }).render('#paypal-button-container');
</script>


<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Abril+Fatface|Quicksand:300,400,500,700);
body{ font-weight: 500 !important; font-size: 13.5px !important; font-family: 'Quicksand', Arial, Helvetica, sans-serif  ;  }
body table tr td{ font-weight: 500 !important; line-height: 25px !important; font-size: 13.5px !important; font-family: 'Quicksand', Arial, Helvetica, sans-serif  ;  }
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