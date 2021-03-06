<?php
if ($this->params['controller'] == 'freelancer' && $this->params['action'] == 'archieve_message') {
    $archieve = 'active';
} else {
    $archieve = '';
}
if ($this->params['controller'] == 'freelancer' && $this->params['action'] == 'sent_message') {
    $Sent = 'active';
} else {
    $Sent = '';
}
if ($this->params['controller'] == 'freelancer' && $this->params['action'] == 'mymessage') {
    $inbox = 'active';
} else {
    $inbox = '';
}
?>
<div class="container">
    <div class="row marg_tb15">
        <div class="col-md-3 pad_l0 col-sm-3">
            <div class="panel panel-default green_bg1">
                <div class="panel-heading">My Messages</div>
                <div class="panel-body bg_grey1 padd_0">
                    <ul class="nav ">
                        <?php if (isset($count_inbox) and !empty($count_inbox) and $count_inbox == 0) { ?>
                            <li class='<?php echo $inbox; ?>'><a href="<?php echo $this->webroot; ?>freelancer/mymessage"> Inbox</a></li>
                         <?php } else { ?>
                             <li class='<?php echo $inbox; ?>'><a href="<?php echo $this->webroot; ?>freelancer/mymessage"> Inbox <?php echo '(' . $count_inbox . ')'; ?></a></li>
                        <?php } ?>
                        <li class='<?php echo $Sent; ?>'><a href="<?php echo $this->webroot; ?>freelancer/sent_message"> Sent messages</a></li>
                        <li class="<?php echo $archieve; ?>"><a href="<?php ?>"> Archive </a></li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default green_bg1">
                <div class="panel-heading">Earning</div>
                <div class="panel-body bg_grey1 padd_tb15">
                    <p>Available now : <?php  if(!empty($Payment_earning)){ echo '$'.$Payment_earning.'.00';}else{ echo '$0.00';} ?> </p>
<!--                    <p class="text-center">
                        <?php echo $this->Form->create('Job', array('url' => array('controller' => 'freelancer', 'action' => 'withdraw'))); ?> 
                        <button type="submit" class="btn btn-danger">Withdraw</button>
                        <?php echo $this->Form->end(); ?>
                    </p>-->
                     <p><i><img src="<?php echo $this->webroot; ?>img/view.png" class="mrg_r5" alt="view icon image"/></i><a href="<?php echo $this->webroot;  ?>freelancer/viewearning">View pending earnings >></a></p>
<!--                     </ul>-->
                </div>
            </div>
         </div>
        
        
        
         <div class="col-md-9 col-sm-9  pad_r0 ">
             <div class="bg_white">
                 <div class="green">
                     Archive Messages <span class="pull-right"><a href="#"></a></span>
                 </div>
                <?php
                if (isset($message) and !empty($message)) {
                    foreach ($message as $keyy => $val) {
                        ?>
                        <div class="detail  brder_btm padd_tb15">
                            <div class="col-md-2 col-sm-2">
                                <div class="user_imgbox">
                                    <img src="<?php echo $this->webroot; ?>uploads/<?php echo $val['Message']['user']['User']['image']; ?>" alt="login user image" width="100" height="100">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 pad_l0"> 
                                <div class="user_content pull-left">
                                    <h4 class="marg_0 text-danger"><?php echo $val['Message']['user']['User']['first_name'] . '  ' . $val['Message']['user']['User']['last_name']; ?></h4>
                                    <small class="text_1"><?php echo $date = date('F d,Y', strtotime($val['Message']['created'])); ?></small>
                                </div> </div>
                            <div class="col-md-8 col-sm-8">
                                <p class="text_1"><?php echo $val['Message']['reply']; ?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                    } } else {
                    ?>
                    <div class="detail  brder_btm padd_tb15">
                        <p style="color: #C7C4C8; text-align: center; font-size: 18px;"> 
                            <strong>You have no archived messages.</strong>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                <?php } ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>