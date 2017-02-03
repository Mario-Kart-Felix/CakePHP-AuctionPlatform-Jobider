<?php if ( isset($Record) and !empty($Record)) { ?>
    <div class="bg_white marg_btm30">
        <div class="green">
            <input type="hidden" class="hidden_id_freelancer" value="6">
            <span class="pull-right">Total Applicants : <?php echo $count_record; ?> </span>
            <div class="clearfix"></div>
        </div>
        <div class="table-responsive">
            <table class="table cust_table11 table-striped">
                <thead>
                    <tr>
                        <th>Freelancer   </th>
                        <th> Profile Title  </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Record as $kk => $vv) {
                        ?>
                        <tr> 
                            <td>
                                <div class="active col-md-5 pad_l0">
                                    <div class="user_imgbox">
                                        <img height="100" width="100" src="<?php echo $this->webroot; ?>uploads/<?php echo $vv['User']['image']; ?>" alt="login user image">
                                    </div>
                                </div>
                                <div class="col-md-7 pad_l0">
                                    <input type="hidden" class="users_id" value="1" name="user_id">      <h4 class="marg_0 "><?php echo ucfirst($vv['User']['first_name']) . ' ' . ucfirst($vv['User']['last_name']); ?></h4>
                                    <small class="text-danger"><img src="<?php echo $this->webroot; ?>img/location1.png" alt="image"><?php  echo $vv['Country']; ?></small>
                                </div>
                            </td>
                            <td><?php echo $vv['Job']['job_title']; ?></td>
                            <td class="text-center"><a href="/client/job_application/<?php echo $vv['Acceptinterview']['job_id']; ?>"><button class="btn-sm btn-danger btn_red11">View Detail</button></a>   <br>
                                <input type="hidden" name="data[User]['job_id]" class="jobdata" id="<?php echo $vv['Acceptinterview']['job_id']; ?>">
                                <a id="<?php echo $vv['User']['id']; ?>" data-target="#myModal" data-toggle="modal" href="#" class="font_14 btn_data">Send Message</a></td> </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
<?php } else { ?>
    <div class="bg_white marg_btm30">
        <div class="green">
            <span class="pull-right">Total Applicants : 0 </span>
            <div class="clearfix"></div>
        </div>
        <div class="detail padd_tb15"> 
            <div class="col-md-2 col-xs-3">
                <div class="right_side view_img">
                    <p> <img class="img-responsive " src="/img/freelancer.png" alt="image"></p>
                </div>
            </div>
            <div class="col-md-10 col-xs-9">
                <h3 class="empty"> Your applicant list is empty </h3>
                <p class="text_1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
            </div>
            <div class="col-md-12  marg_tb30">
                <p class="text-center"> <a href="/client/searchfreelancer"><button class="btn-green"> View Recommended Freelancers </button></a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php } ?>
