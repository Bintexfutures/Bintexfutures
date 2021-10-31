<link src="https:///cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />

<!-- START SECTION MARKETS -->
<section class="small_pt small_pb">
    <div class="row-fluid">
           <div class="row-fluid latest-news">
        <div class="container align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 pad-lr0">
            	<div class="news_box">
                    <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="6">
                        <?php if(!empty($markets_cap->data)){ foreach($markets_cap->data as $key=>$result){ ?>
                               <div class="market_price">
                                            <h6><?php echo  $result->name; ?> <i class="fa fa-area-chart chart fa-2x"></i></h6>
                                            <p><p1> </p1>  <p2><?php echo $result->quote->USD->price; ?></p2> </p>
                                            <p><p3><?php echo $result->quote->USD->percent_change_24h; ?></p3> <p4>Volume: <?php echo  $result->quote->USD->volume_24h; ?> USDT</p4></p>
                                            </div>
                            <?php if($key==3){break;}} }else{?> 
                            <div  class="row table_m">
                                
                            </div>
                             
                            <?php } ?>
                    </marquee>
                </div>
            </div>
        </div>
        </div>
                <!-- <?php foreach($markets_cap->data as $key=>$result){ ?>
                       <div class="col-lg-3 col-md-3">
            	        <div class="market_price">
                        <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;"><?php echo  $result->name; ?> <i class="fa fa-area-chart chart fa-2x"></i></h6>
                        <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1> </p1>  <p2><?php echo $result->quote->USD->price; ?></p2> </p>
                        <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3><?php echo $result->quote->USD->percent_change_24h; ?></p3> <p4>Volume: <?php echo  $result->quote->USD->volume_24h; ?> USDT</p4></p>
                        </div>
                    </div>
                <?php if($key==3){break;}} ?> -->
                 <!--<div class="col-lg-3 col-md-4 col-6">
            	<div class="market_price">
                      <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNB / USDT <i class="fa fa-area-chart chart fa-3x"></i></h6>
                      <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1>24.2652 </p1>  <p2>$24.27</p2> </p>
                      <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3>-7.15%</p3> <p4>Volume: 89,009,934,72 USDT</p4></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            	<div class="market_price">
                      <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNB / USDT <i class="fa fa-area-chart chart fa-3x"></i></h6>
                      <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1>24.2652 </p1>  <p2>$24.27</p2> </p>
                      <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3>-7.15%</p3> <p4>Volume: 89,009,934,72 USDT</p4></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            	<div class="market_price">
                      <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNB / USDT <i class="fa fa-area-chart chart fa-3x"></i></h6>
                      <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1>24.2652 </p1>  <p2>$24.27</p2> </p>
                      <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3>-7.15%</p3> <p4>Volume: 89,009,934,72 USDT</p4></p>
                </div>
            </div>-->
            </div>
            </div>
	<div class="row-fluid">
            <div class="small_space">
            <div class="col-lg-12 col-md-12" >
  <table class="table table-responsive cust-table" id="myTable"><!--id="myTable"-->
    <thead>
        <tr>
            <th width="8%">S.NO</th>
            <th width="12%">Name</th>
            <th width="16%">Market Cap</th>
            <th width="16%">Price</th>
            <th width="16%">Volume (24)</th>
            <th width="16%">Circulating Supply</th>
            <th width="16%">Change (24)</th>
        </tr>
    </thead>
    <tbody >
        <?php if(!empty($crypto)){ 
        foreach($crypto as $key=> $b){
        ?>
    <tr>
                    <td> <?php echo $b->market_cap_rank; ?></td>
                    <td><img src="<?php echo $b->image; ?>"  style="overflow:hidden;width: 25px;max-height: 25px;"/>&nbsp;<?php echo $b->name; ?></td>
                    <td>$<?php echo $b->market_cap; ?></td>
                    <td>$<?php echo $b->current_price; ?> </td>
                    <td>$<?php echo  $b->total_volume; ?></td>
                    <td><?php echo $b->circulating_supply; ?></td> 
                    <td><?php echo $b->price_change_percentage_24h; ?>%</td>
    </tr>
                    
                    <?php  } } ?>
       <!-- <?php if(!empty($markets_cap->data)){ foreach($markets_cap->data as $key=>$result){ ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo  $result->name; ?></td>
            <td>$<?php echo  $result->quote->USD->market_cap; ?></td>
            <td>$<?php echo  $result->quote->USD->price; ?></td>
            <td>$<?php echo  $result->quote->USD->volume_24h; ?></td>
            <td><?php echo  $result->circulating_supply; ?></td>
            <td><?php echo floatval($result->quote->USD->percent_change_24h);  ?></td>
      </tr>
      <?php } }else{echo "Comming soon....";} ?>-->
        
    
    </tbody>
  </table>
</div>
</div>
</div>
</section>
<!-- END SECTION MARKETS -->
