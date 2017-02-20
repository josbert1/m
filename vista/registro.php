<style>
	body{
		background-color: #fafbfb;
	}
</style>
<div class="top_wrapper">
    <div class="header">
	<?php $registro = "hola"; ?>
    </div>
 </div>
 <div class="header_fader_wrapper">
	<div class="fade one"></div>
	<div class="fade two"></div>
	<div class="fade three"></div>
	<div class="fade four"></div>
	<div class="fade five"></div>
	<div class="fade six"></div>
</div>
<div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
				        <img class="section-icon" src="<?php echo $archivos; ?>/images/sing.png" alt="Testimonial icon">
				      
				        <h1 class="wizzard-h1">Requisitos de ingreso</h1>
				      </div>
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                <form action="#" method="">
		                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">Crear cuenta</h3>

		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#location" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
											
											</a>
										</li>
			                            <li>
											<a href="#type" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-direction-alt"></i>
												</div>
										
											</a>
										</li>
			                            <li>
											<a href="#facilities" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-panel"></i>
												</div>
										
											</a>
										</li>
			                            <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-comments"></i>
												</div>
											
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-md-12">

		                            		</div>
		                                	<div class="col-md-6">
		                                    	<div class="input-group input-signup-footer-container">
		                                    	<label>Country</label>
								                      <input type="text" id="input-registro" placeholder="Usuario" name="name" required="" style="background-color: #fafbfb">
								                      
								                    </div>
		                                	</div>
		                                	<div class="col-md-6">
		                                    	<div class="form-group">
		                                    	<label>Country</label>
		                                            <div class="input-group input-signup-footer-container">
								                      <input type="text" id="input-registro" placeholder="Usuario" name="name" required="" style="background-color: #fafbfb">
								                      
								                    </div>

		                                        </div>
		                                	</div>

		                                	<div class="col-md-6">
		                                	<label>Country</label>
		                                		<select name="" class="select-input">
		                                                <option disabled="" selected="">- Select -</option>

		                                            </select>
		                                	</div>
		                                	<div class="col-md-6">
		                                	<label>Country</label>
		                                		<select name="" class="select-input">
		                                                <option disabled="" selected="">- Select -</option>

		                                            </select>
		                                	</div>
		                               
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="type">
		                                <h5 class="info-text">What type of location do you have? </h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4 col-sm-offset-2">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-home"></i>
															<p>Home</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-package"></i>
															<p>Apartment</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h5 class="info-text">Tell us more about facilities. </h5>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Your place is good for</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- type -</option>
			                                            <option>Business</option>
			                                            <option>Vacation </option>
			                                            <option>Work</option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Is air conditioning included ?</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option>Yes</option>
			                                            <option>No </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group">
		                                        	<label>Does your place have wi-fi?</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option>Yes</option>
			                                            <option>No </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group">
		                                        	<label>Is breakfast included?</label>
		                                        	<select class="form-control">
			                                            <option disabled="" selected="">- response -</option>
			                                            <option>Yes</option>
			                                            <option>No </option>
		                                        	</select>
		                                    	</div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h5 class="info-text"> Drop us a small description. </h5>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>Place description</label>
		                                            <textarea class="form-control" placeholder="" rows="9"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                        <div class="form-group">
		                                            <label>Example</label>
		                                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill  btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill  btn-wd' name='finish' value='Finish' />
									</div>

	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->