<?php require 'inc/header_view.php'; ?>

<?php require 'home/home_one_view.php'; ?>

<div class="row" id="contact">
						  <h2 class="text-center">Contact Us <small> for more</small></h2>
                          <?php echo form_open('subscribe/send_mail','class="form-horizontal"'); ?>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" name="name" type="text" id="inputName" placeholder="Name">
                                    </div>
                                    <?php echo form_error('name', '<div class="error-subscribe text-primary text-right">', '</div>'); ?>
                                </div> 
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <label for="inputEmail" class="col-sm-2 control-label" >Email</label>
                                    <div class="col-sm-10">
                                      <input class="form-control" name="email" type="email" id="inputEmail" placeholder="Email">
                                     </div>
                                     <?php echo form_error('email', '<div class="error-subscribe text-primary text-right">', '</div>'); ?>
                                </div>
                            </div>    
                            <div class="form-group ">
                                <div class="col-sm-8 col-sm-offset-4">
                                        <div class="checkbox">
                                          <label>
                                            <input id="inputAddList" type="checkbox">Add me to e-mail blast
                                          </label>
                                        </div>
                                  </div>
                            </div>
                             <div class="form-group ">
                                    <div class="col-sm-8 col-sm-offset-2">
                                          <label for="inputComments" class="col-sm-2 control-label">Comments</label>
                                          <div class="col-sm-10">
                                            <textarea class="form-control" name="comments" id="inputComments" placeholder="Contact us.."></textarea>
                                          </div>
                                          <?php echo form_error('comments', '<div class="error-subscribe text-primary text-right">', '</div>'); ?>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-3">
                                  <input class="btn btn-default" type="submit" value="Submit">
                                </div>
                            </div>  
						<?php echo form_close(); ?>
                  </div>
    

<?php require 'inc/footer_view.php'; ?>

<script>

$(document).ready(function() {
    window.scrollTo(650,2500);
});

</script>