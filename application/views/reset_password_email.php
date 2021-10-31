<!--
<div style="padding:50px;">
 <h1>Friendly Matrimony</h1>
   <a href="<?php echo base_url('register/resetpassword?link='.$link); ?>"> Click here to reset your password</a>
<br>

   <div 
   style="font-size: 26px;
   font-weight: 700;
   letter-spacing: -0.02em;
   line-height: 32px;
   color: #41637e;
   font-family: sans-serif;
   text-align: center" align="center" id="emb-email-header">
       <img style="border: 0;-ms-interpolation-mode: bicubic;
                 display: block;
                 Margin-left: auto;
                 Margin-right: auto;
                 max-width: 152px" src="<?php echo base_url(); ?>/assets/images/logo-new.png" alt="" width="152" height="108"></div>
  
<div> -->
    
<table style="max-width:699px;
             width:100%;
             font-family:Calibri;
             background:#f4f3f4" cellspacing="0" cellpadding="20" border="0" align="center">

 <tbody> 
 <tr> 
 <td> 
  <div style="border-radius:8px;
              background:#fff;
              border:solid 1px #bfbfbf;
              overflow:hidden"> 


<table class="m_852120989219799036fullWidth" cellspacing="0" cellpadding="0" border="0"> 
    <tbody> 
       <tr> 
          <td style="padding:10px 15px" bgcolor="#FFFFFF" align="center"> 

<table class="m_852120989219799036halfWidth" width="220" cellspacing="0" cellpadding="0" border="0" align="left">
   <tbody> 
     <tr> 
       <td> 
         <img src="" class="CToWUd" width="100%">
      </td> 
     </tr> 
    </tbody> 
</table>  
    </td> 
    </tr> 
   
    <tr> 
      <td align="center"> 
        <img src="https://friendlymatrimony.com/assets/images/tri.jpg" class="CToWUd">
      </td> 
    </tr> 
    
   <tr> 
     <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;
               padding:15px;
               padding-top:10px;
               color:#4c4c4c"> 
  <div style="background:#f4f3f4;border-radius:5px;padding:15px;border:solid 1px #bfbfbf;">  	
<span style="font-size:22px;">Reset your password?</span> <br /><br />

We are pleased to inform that the password for your Friendly Matrimony account has been Reset as per click the button below. 
If you didn't make this request, ignore this email.

 <br> 
 <br> 


 <a href="<?php echo base_url('register/resetpassword?link='.$link); ?>" style="color:#fff;
           border-radius:5px;
           background:#097B00;
           padding:10px 15px;
           display:block;
           width:225px;
           font-family:Arial,Helvetica,sans-serif;font-size:14px;
           text-decoration:none" >Confirm Registration</a> </div> </td> </tr> 

 <tr></tr>  </tbody> </table> <table class="m_852120989219799036fullwidth" width="100%" cellspacing="0" cellpadding="0" border="0"> <tbody> <tr> <td bgcolor="#097B00"> <table class="m_852120989219799036fullWidth" width="100%" height="51" cellspacing="0" cellpadding="0" border="0" align="left"> <tbody> <tr> <td width="100%" style="text-align: center; color: #fff; font-size: 14px"> Wish you a successful partner search. <br> Team friendlymatrimony </td> </tr> </tbody> </table>  
 </td> </tr> </tbody> </table> </div> </td> </tr> </tbody> </table>



	<div class="container" style="padding-top: 150px; padding-bottom: 60px;">
        <div class="col-md-6 col-sm-6 offset-md-3">
            	<div style='background-color:#eeefef; padding:15px 20px;'>
            	     <div class='col-md-12'>
                        <div style='margin:0 auto; text-align: center!important;'>
                            <a href="https://bintexfutures.com">
                        <img style='float: right;' src='<?php echo base_url();?>assets/images/dashboard_logo.png' alt='logo' height='32' width='100'/></a>
                        <h5 style='margin-left:70px;'>Email Verification</h5>
                        </div>
                    </div>
                    
                    <div class='col-md-12 col-lg-12'>
                        <div>
                         <i class='fa fa-check-circle fa-3x' aria-hidden='true' style='float: left; background-color: #cce7d4; color: #6d9648;'></i>
                         <p style='font-size: 12px; background-color: #ffffff; font-weight: bold;'>We have received a request to reset the password associated with your Bintex Futures account
                            (<?php $re=$this->db->limit('1')->order_by('id', "desc")->get('users')->row(); ?> <?php echo $re->email; ?>) To confirm this request and assign a new password, please click the button below: </p>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 offset-md-4'>
                        <button type="submit" name="submit" class="btn btn-default">Confirm Registration</button>
                    </div>
              	</div>
		</div>
    </div>
