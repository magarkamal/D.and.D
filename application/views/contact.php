<section class="bg-dark"id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="light">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
    </div>
</section>
<section class="no-padding">
   <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.2590302242131!2d85.31789335623833!3d27.685278460674784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b42ebb8815%3A0x4112c55c92a51177!2sD.+and+D.+Architect+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1471260180040" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--    <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>-->
</section>
<section class="bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <?php echo form_open('email/index',['class'=>'form-horizontal','method'=>'post'])?>
                        <fieldset>
                            <legend class="text-center header">Contact Us</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Name" class="form-control" value="<?php echo set_value('name'); ?>">
                                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" value="<?php echo set_value('email');?>">
                                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control" value="<?php echo set_value('subject'); ?>">
                                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here." rows="7" ><?php echo set_value('message'); ?></textarea>
                                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    <?php echo form_close();?>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

