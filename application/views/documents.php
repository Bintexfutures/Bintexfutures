
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="row mt-4">
		<div class="col-md-12 col-sm-12">
			<div class="card mb-4 border-color">
            	<div class="card-header">Documents</div>
                <div class="card-body row">
				
				
<?php $data1=$this->db->get_where('downloads', array('id'=>7))->row(); ?>
    <div class="col-xl-3 col-sm-6 mb-4">
					  <div class="box bg_info">
						<a href="<?php echo base_url();?>admin/assets/aboutpage/<?php echo $data1->image ?>" target="_blank">
						  <div class="box-head align-items-center justify-content-between">
							  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						  </div>
						  <div class="box-body align-items-center justify-content-between">
							<span>White Paper</span>
						  </div>
						 </a>
					 </div>
					</div>
					
					
					

<?php $data1=$this->db->get_where('downloads', array('id'=>6))->row(); ?>					
                  <div class="col-xl-3 col-sm-6 mb-4">
					  <div class="box bg_primary">
						<a href="<?php echo base_url();?>admin/assets/aboutpage/<?php echo $data1->image ?>" target="_blank">
						  <div class="box-head align-items-center justify-content-between">
							  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						  </div>
						  <div class="box-body align-items-center justify-content-between">
							<span>Terms & Conditions</span>
						  </div>
						 </a>
					 </div>
				</div>               

<?php $data1=$this->db->get_where('downloads', array('id'=>5))->row(); ?>

<div class="col-xl-3 col-sm-6 mb-4">
          <div class="box bg_success">
			<a href="<?php echo base_url();?>admin/assets/aboutpage/<?php echo $data1->image ?>" target="_blank">
              <div class="box-head align-items-center justify-content-between">
                  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
              </div>
              <div class="box-body align-items-center justify-content-between">
                <span>Disclaimer</span>
              </div>
			 </a>
         </div>
        </div>
                </div>
            </div>
		</div>
      </div>
     

    </div>
    