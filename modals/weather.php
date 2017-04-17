<!-- Weather Modal -->
		<!-- Temperature -->
		<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="weathermodal" aria-hidden="true" id="temp">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<div class="row">
                    	<div class="col-lg-2">
                    <!--   <div class="text-left">
                                <a href="#weatherhelp" data-toggle="modal" data-target="#weatherhelp"><span class="glyphicon glyphicon-question-sign"></span></a>
                           </div> -->                           
                        </div>
                        <div class="col-lg-8">
                            <div class="text-center">
                                <h3 class="modal-title"><i class="fa fa-cloud"></i> Weather</h3>
                            </div>                        
                        </div>
                        <div class="col-lg-2 text-right">
                    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                    </div>
					</div><!-- /modal-header -->
					<div class="modal-body">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
						<!--	<li role="presentation" class="active"><a href="#current_city" aria-controls="home" role="tab" data-toggle="tab">City</a></li> -->
                            <li role="presentation" class="active"><a href="#current_temp" aria-controls="home" role="tab" data-toggle="tab" class="text-success">Current Weather&deg;</a></li>							
							<li role="presentation"><a href="#suntimes" aria-controls="profile" role="tab" data-toggle="tab" class="text-success">Sunrise/Sunset</a></li>
                            <li role="presentation"><a href="#weather_help" aria-controls="profile" role="tab" data-toggle="tab" class="text-danger"><span class="text-info glyphicon glyphicon-cog"></span> Settings</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content text-info text-center">
				<!--			<div role="tabpanel" class="tab-pane active" id="current_city">								
                                    <h2 class="weather_city">Weather Setup</h2>
                                     
                                    <span class="bottomspace"></span>
                                    <div class="form-inline">
                                    	<div class="form-group">
                                        	<div class="input-group">
                                                <input type="text" class="form-control padding-top-10px" placeholder="New City" id="weather_search" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info" id="weather_search_button"><span class="glyphicon glyphicon-search"></span> Search</button><br>
                                            <span class="text-muted small small small">(i.e. Dallas, Texas | Chicago, IL | Denver, USA)</span>
                                    </div>
							</div>
                  -->
                            
                            <div role="tabpanel" class="tab-pane active" id="current_temp">
                                <h2 class="weather_city"></h2>								
								<h2 class="current_temp"></h2>
                                <h3>Current Weather: <h1 class="text-primary weather_temp"></h1></h3>                                                                
                                <img class="weather_icon" />
                                <h4 class="weather_desc center" id="weather_desc"></h4>
                                <span id="weather_search_info"></span>
                                <hr class="text-muted">
   								<h3>5-Day Forecast:</h3>
                                <div id="weather_forecast"></div>
                                
							</div>
							<!-- <div role="tabpanel" class="tab-pane" id="5day">
								<h2 class="weather_city"></h2>
								<div id="weather_forecast"></div>
							</div> -->
							<div role="tabpanel" class="tab-pane" id="suntimes">
								<h2 class="weather_city">Please choose city..</h2>
								<h3><i class="fa fa-sun-o"></i> Sunrise: <span class="text-primary weather_sunrise"></span></h3>
								<h3><i class="fa fa-moon-o"></i> Sunset: <span class="text-primary weather_sunset"></span></h3>
							</div>
							<div role="tabpanel" class="tab-pane" id="weather_help">
								<h3 class="text-info padding-top-10px"><span class="glyphicon glyphicon glyphicon-cog"></span> Weather Help/Preferences</h3> 
                                    <div class="form-inline">
                                    	<h4>Current City: <h2 class="weather_city"></h2></h4>
                                        <div class="form-group">
                                        	<div class="input-group">
                                                <input type="text" class="form-control padding-top-10px" placeholder="New City" id="weather_search" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info" id="weather_search_button"><span class="glyphicon glyphicon-search"></span> Search</button><br>
                                            <span class="text-muted small">(i.e. Dallas, Texas | Chicago, IL | Denver, USA)</span>
                                    </div>

                                
                                <div class="text-info">
                                	
                                    <hr>
                                    	<div class="row">
                                        	<div class="col-lg-6 col-md-6 col-sm-12">
                                                <h4>Temperature</h4>            
                                                <label for="weather_fahrenheit" class="radio-inline">Fahrenheit</label>
                                                <input type="radio" name="weather_units" value="imperial" id="weather_fahrenheit" />
                                                <label for="weather_celsius" class="radio-inline">Celsius</label>
                                                <input type="radio" name="weather_units" value="metric" id="weather_celsius" />
                                            </div>
                                        	<div class="col-lg-6 col-md-6 col-sm-12">
                                                <h4>Clock</h4>
                                                <label for="weather_12" class="radio-inline" >AM/PM</label>
                                                <input type="radio" name="weather_timeformat" value="12" id="weather_12" />
                                                <label for="weather_24" class="radio-inline">24-hour</label>
                                                <input type="radio" name="weather_timeformat" value="24" id="weather_24" />										
                                            </div>
                                        </div>
                                        <hr>                                    	
                                	<p class="text-left text-muted padding-top-10px"><small>Your default city will be listed, unless you search for and save a different city. Temperature and time updates will be reflected the next time you refresh or load the homepage.</small></p>
                                </div>
							</div>
						</div>
					</div><!-- /modal-body -->
					
					<div class="modal-footer">
						<div class="text-center">
							<button type="button" class="btn btn-primary" data-dismiss="modal" id="weather_city_save">Reset City</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                                    	

						</div>      	
					</div><!-- /modal-footer -->
				</div><!-- /modal-content -->
			</div><!-- /modal-dialog -->
		</div><!-- /modal --> 
