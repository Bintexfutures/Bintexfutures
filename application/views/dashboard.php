<div class="content-wrapper">
    <div class="container-fluid">
    

		<div class="row">
			<div class="col-md-12">
				<div class="card mb-4 border-color">
            <div class="card-header text_md_center">Latest Updates</div>
            <div class="card-body">
              <ul class="timeline_wrap list_none fc-scroll p-0">
              
                 <?php
    $data1=$this->db->order_by('id', 'desc')->get_where('latestupdates')->result();
    ?>
    <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
    
    
    <li>
                   <div class="timeline_icon"></div>
                   	<div class="timeline_content"><h6><?php echo $h->session; ?></h6>
                   </div>
                </li>
         <?php $i++; ?>
         <?php }?>
                         
            </ul>
            </div>
          </div>
			</div>
		</div>
      <div class="row">
		<div class="col-md-4 col-sm-5">
          <div class="card mb-4  border-color">
            <div class="card-header text_md_center">Token Statistics</div>
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="111"></canvas>
            </div>
          </div>
        </div>
      	<div class="col-md-8 col-sm-7">
      		<div class="card mb-4  border-color">
            	<div class="card-header">Sales Analytics</div>
                <div class="card-body">
                  <canvas id="myAreaChart" width="100%" height="50"></canvas>
                </div>
            </div>
      	</div>		
      </div>
	  <div class="row">
      	<div class="col-md-12">
      		<div class="card mb-4  border-color">
            	<div class="card-header">ICO Stages</div>
                <div class="card-wrap">
                	<ul role="tablist" id="pills-tab" class="nav nav_tab">
                      
                      <?php
    $data1=$this->db->order_by('id', 'desc')->get_where('ico')->result();
    $i=0;
    foreach($data1 as $h){?>
    
    <li class="nav-item ">
                        <a href="#tab<?php echo $h->id; ?>" data-toggle="tab" class="nav-link <?php if(!$i) echo 'active'; $i++; ?>"><?php echo $h->cat; ?></a>
                      </li>
<?php $i++; ?>
         <?php }?>
         
         
       
                    </ul>
                    <div class="tab-content card-body">
		
<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('ico')->result();
    $i=0;
    foreach($data1 as $h){?>
                        <div role="tabpanel" id="tab<?php echo $h->id; ?>" class="tab-pane fade show <?php if(!$i) echo 'active'; $i++; ?>">
                        	<div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $h->time; ?></p>
                                    <ul>
										<li><?php echo $h->session; ?></li>
									</ul>
                                </div>
                            </div>
                        </div>
                        
                        
         <?php $i++; ?>
         <?php }?>
         
         
                   
                    </div>
                </div>
            </div>
      	</div>
      </div>
	  
    </div>

