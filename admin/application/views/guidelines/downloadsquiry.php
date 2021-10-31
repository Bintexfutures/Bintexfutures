



        <div class="page-content page-thin">

          <div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header panel-controls">
                  <h3><i class="fa fa-table"></i> <strong>Downloads Reports</strong></h3>
                </div>
                <div class="panel-content">
                  
                  
                  <table class="table table-hover dataTable" id="table-editable">
                    <thead>
                      <tr>
                        <th>Sl.No.</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>contact</th>
                        <th>country</th>
                        <th>mesage</th>
                        <th>IP Address</th>
                        <th>Date</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php $i=1; $re=$this->db->get('downloadsquiry')->result(); foreach ($re as $a) { ?>   

                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $a->title; ?>. <?php echo $a->firstname; ?> <?php echo $a->lastname; ?></td>
                        <td><?php echo $a->email; ?></td>
                        <td><?php echo $a->phone; ?></td>
                        <td><?php echo $a->country; ?></td>
                        <td><?php echo $a->message; ?></td>
                        <td><?php echo $a->ip; ?></td>
                        <td><?php echo $a->crdate; ?></td>
                      </tr>

                    <?php } ?>     

                      

                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

