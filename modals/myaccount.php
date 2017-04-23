<div class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myaccount" aria-hidden="true" id="myaccount">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h3><span class="glyphicon glyphicon-info-sign"></span> My Account</h3>
        </div><!-- /modal-header -->
        <div class="modal-body">

						<ul class="nav nav-tabs" role="tablist">						

                            <li role="presentation" class="active"><a href="#accountdetails" aria-controls="accountdetails" role="tab" data-toggle="tab" class="text-success">Account Details</a></li>                            
						</ul>
   						<div class="tab-content text-info">
                            <!-- tabpanel 1 -->
                            <div role="tabpanel" class="tab-pane active" id="accountdetails">
                             <ol>

                             	<li><h3>My Info:</h3>

                                    <div class="row margin-top">

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">

                            				<p><span class="glyphicon glyphicon-tag"></span> Name: <strong><?php echo $_SESSION['fname']. ' ' . $_SESSION['lname'] ; ?></strong></p>
                            				<p><span class="glyphicon glyphicon-user"></span> User ID / E-Mail: <strong><?php echo $_SESSION['login_user'] ; ?></strong></p>                                            <p><p><small><span class="glyphicon glyphicon-pencil"></span> <a href="#">Edit</a></small>
                                            
                                        </div>

                                    </div><!-- /row -->

                                </li>                                
                            
                                <li><h3>My Account</h3>
                                    <div class="row margin-top">

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
											
                            					<p>Access: <span class="text-success"><strong>Free</strong></span></p>
                                            

                                        </div>
                                    </div><!-- /row -->   
                                </li>                               
                                <div class="row margin-top">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
		                                    <small><span class="glyphicon glyphicon-trash"></span> <a href="#">Delete Account</a></small></p>                                
                                        </div>
                                </div>    
                              </ol>
                                
                            </div><!-- /tabpanel 1 -->

                        </div><!-- /tab-content -->

        </div><!-- /modal-body -->
		<div class="modal-footer">
 			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>			      	
		</div><!-- /modal-footer -->
        
    </div><!-- /modal-content -->
  </div><!-- /modal-dialog -->
</div><!-- /modal -->	
