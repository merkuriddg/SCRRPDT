<!-- SignUpSuccess Modal -->
<div id="DELETE" class="modal fade in" role="dialog" data-show="true"  aria-labelledby="SignUpModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Delete <?php echo $id; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&nbsp;&nbsp;&nbsp;&times;</span></button>
            </div>

            <div class="modal-body">
                <h4 class=''>Please check your email to activate your account.<br>We look forward to hearing from you!</h4>
            </div>
        </div>
    </div>
</div>



<!-- Comment Modal -->
<div id="CommentModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title_right">Comment on this Story:</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&nbsp;&nbsp;&nbsp;<i class="fa fa-window-close hvr-grow"></i></span></button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" id="main_form" autocomplete="on">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <?php
                                if (isset($_SESSION['uid'])) {
                                    echo "Hi " . $_SESSION['myfname'] . "!<br>";
                                } else {
                                    echo "Hi fellow PennySaver!<br>";
                                }
                                switch (rand(0, 3)) {
                                    case "0":
                                        echo "A penny for your thoughts...<br>No, seriously, tell us what you're thinking!";
                                        break;
                                    case "1":
                                        echo "Want to tell us something?<br>Fill out the form below...thanks!";
                                        break;
                                    case "2":
                                        echo "We'd love to hear from you!<br>Please tell us what you're thinking!";
                                        break;
                                    case "3":
                                        echo "A picture is worth a thousand words<br>But, we just need a few words from you!";
                                        break;

                                }
                                if (!isset($_SESSION['uid'])) {
                                    ?>
                                    <label for="fullname">Your Name</label>
                                    <input type="name" class="form-control hvr-grow" id="fullname" placeholder="Your name">

                                    <label for="emailaddr">Email</label>
                                    <input type="email" class="form-control hvr-grow" id="emailaddr" placeholder="Your email">

                                    <label for="zipcode">City</label>
                                    <input type="name" class="form-control hvr-grow" id="zipcode" placeholder="Your zip code">

                                <?php } ?>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea class="form-control hvr-buzz-out" type="textarea" name="message" id="message" placeholder="Your comments here" maxlength="6000" rows="5"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
                                </div>
                                <div class="form-group col-xs-10 col-sm-6 col-md-6 col-lg-6">
                                </div>
                                <button type="submit" class="hvr-forward btn btn-lg btn-success btn-block" id="btnContactUs">Send It! &rarr;</button>

                </form>

            </div>
        </div>
    </div>


    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
</div>

