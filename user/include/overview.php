            <div class="row">
               
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
								<?php 
									$sql = mysqli_query($conn,"SELECT COUNT(c_id) as total from clients");
										while ($row = mysqli_fetch_assoc($sql)) {
								?>
                                    <div class="huge"><?php echo $row['total']; ?></div>
										<div>All Clients</div> <?php } ?>
                                </div>
                            </div>
                        </div>
                        <a href="client_list.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
								<?php 
									
									$sql = mysqli_query($conn,"SELECT COUNT(id) as total from advocates");
										while ($row = mysqli_fetch_assoc($sql)) {
								?>
                                    <div class="huge"><?php echo $row['total'] ?></div>
                                    <div>Advocates</div>
										<?php } ?>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                
                
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
								<?php 
									
									$sql = mysqli_query($conn,"SELECT COUNT(t_id) as total from taxes");
										while ($row = mysqli_fetch_assoc($sql)) {
								?>
                                    <div class="huge"><?php echo $row['total']; ?></div>
										<?php } ?>
                                    <div>Civil Case</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total TAX Entry</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                
                
       
                
            </div>
			<?php 
			date_default_timezone_set("Asia/Dhaka");
			$date = date('Y-m-d');
			echo $next_date = date('Y-m-d', strtotime($date .' +1 day'));