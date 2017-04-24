<?php 
require_once('settings.php');
?>
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
                            				<p><span class="glyphicon glyphicon-user"></span> User ID / E-Mail: <strong><?php echo $_SESSION['login_user'] ; ?></strong></p>                     <p><p><small><span class="glyphicon glyphicon-pencil"></span> <a href="#" id="editAccount">Edit</a></small>

                                            
                                        </div>



                                    </div><!-- /row -->
                                    <div id="editAccountArea" hidden>
                                        <form class="form-horizontal" id="formUpdateAccount">
                                            <input type="hidden" name="updateaccount" value="updateaccount">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">First Name:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?php echo $_SESSION['fname'] ; ?>" name="firstname" id="firstname" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Last Name:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?php echo $_SESSION['lname'] ; ?>" name="lastname" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">E-Mail:</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" value="<?php echo $_SESSION['login_user'] ; ?>" name="username" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default" name="updateAccount" id="btnUpdateAccount">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
		                                    <small><span class="glyphicon glyphicon-trash"></span> <a href="#" id="btnDelete">Delete Account</a></small></p>                                
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

<div class="modal fade bs-danger-modal" tabindex="100" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModalDanger">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning</h4>
            </div>
            <div class="modal-body">
                <p style="color: black">Are you sure you want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="deleteAccount()">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-warning-modal" tabindex="100" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModalWarning">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning</h4>
            </div>
            <div class="modal-body">
                <p style="color: black"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-ok-modal" tabindex="100" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="myModalOK">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" onclick="goToHome()">&times;</span></button>
                <h4 class="modal-title">Congratulation!</h4>
            </div>
            <div class="modal-body">
                <p style="color: black"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="goToHome()">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#editAccount").click(function(){
        $("#editAccountArea").slideToggle();
    });
    $('#formUpdateAccount').submit(function(e) {
        e.preventDefault();
        if ($(this).validate()) {
            $.post(
                "updateaccount.php",
                $('#formUpdateAccount').serialize(),
                function(data, status){
                    console.log(data);
                    var data = $.parseJSON(data);
                    

                    if(data.title == 'ok') {

                        $('#myModalOK p').html(data.data);
                        $('#myModalOK').modal('show');
                    }
                    else {
                        $('#myModalWarning p').html(data.data);
                        $('#myModalWarning').modal('show');
                    }
                }
            );

        }
    });

    $('#btnDelete').click(function() {
        $('#myModalDanger').modal('show');
    });

    function goToHome() {
        window.location = 'index_alex.php';
    }
    function deleteAccount() {
        <?php
            if(array_key_exists('login_user',$_SESSION) && isset($_SESSION['login_user'])) {
                $mysqli = new mysqli($server, $db_user_name, $db_password, $database); 

                if ($mysqli->connect_error) {
                    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
                }
                $userid = $_SESSION['user_id'];
                $results = $mysqli->query("delete from users where id='$userid'");

                if($results) {
                    echo "window.location='logout.php'";
                }
            }
        ?>
    }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
