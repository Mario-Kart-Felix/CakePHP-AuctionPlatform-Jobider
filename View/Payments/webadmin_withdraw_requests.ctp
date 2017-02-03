<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h3>Withdraw Requests</h3>
                    </header>
                    <div class="col-md-6">
                        <div class="btn-group">
                        </div>
                    </div>
                    <div class="panel-body">
                        <section id="unseen">

                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>

                                        <th>Sr. No</th>
                                        <th>Total Amount</th>
                                        <th>Freelancer </th>
                                        <th>Withdraw Amount</th> 
                                        <th>Milestone Title</th> 
                                        <th>Receiver Email </th>

                                         <th>Action</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
//                                    pr($record);
//                                    die;
                                    if (!empty($record)) {
                                        $i = '1';
                                        foreach ($record as $record) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td> 
                                                <td><?php echo $record['Withdrawrequest']['total_amount']; ?></td> 
                                                <td><?php echo $record['User']['first_name'] . ' ' . $record['User']['last_name']; ?></td> 
                                                <td><?php echo $record['Withdrawrequest']['withdraw_amount']; ?></td> 
                                                <td><?php echo $record['Milestone']['milestone_title']; ?></td> 
                                                <td><?php echo $record['Withdrawrequest']['receiver_email']; ?></td> 
                                            
                                                <td><a href="<?php echo $this->Html->url(array('controller' => 'payments', 'action' => 'view_withdraw', 'prefix' => 'webadmin', $record['Withdrawrequest']['id'])); ?>" class="fa fa-eye"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->Html->url(array('controller' => 'payments', 'action' => 'delete_withdraw', 'prefix' => 'webadmin', $record['Withdrawrequest']['id'])); ?>" class="fa fa-trash-o" onclick="return confirm('Are you sure? You Want to Delete it.');"></a></td> 

                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                    }else{?>
                                            <tr><td colspan="7" style="text-align: center;padding: 35px;font-size: 17px;"><?php echo 'No Record(s) Found !'; ?></td></tr>  
                                  <?php   }
                                    ?>

                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Total Amount</th>
                                        <th>Freelancer </th>
                                        <th>Withdraw Amount</th> 
                                        <th>Milestone Title</th> 
                                        <th>Receiver Email </th>
                                        <th>Action</th>
                                    </tr> 
                                </tfoot>
                                <?php echo $this->Form->end(); ?>
                            </table>
                        </section>
                        <div class="pagi ">
                            <?php ?>
                            <ul class="pagination pull-right">
                                <li><?php echo $this->Paginator->prev('<<', null, null, array('class' => 'disabled')); ?></li>
                                <?php
                                echo $this->Paginator->numbers(array(
                                    'before' => '',
                                    'after' => '',
                                    'separator' => '',
                                    'tag' => 'li',
                                    'spanClass' => 'sr-only',
                                    'currentClass' => 'active',
                                    'currentTag' => 'a',
                                ));
                                ?> 
                                <li><?php echo $this->Paginator->next('>>', null, null, array('class' => 'disabled')); ?></li>
                            </ul>

                        </div>

                    </div>

                </section>

            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<style>
    .current{
        /*background: none repeat scroll 0 0 #FF0000 !important;*/
        background: none repeat scroll 0 0 #DA423D !important;
        float: left;
        height: 34px !important;
        margin-top: 2px;
        width: 36px;
        padding-top: 6px;
        padding-left: 12px;
        color: white;
    }
    .next{
        color:white !important;
    }
    .prev{
        color:white !important;
    }

    .input-group-addon.grrenbtn {
        background: #1fb5ad;
        color: #fff;
        font-size: 14px;
    }


</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
                                                   $(document).ready(function () {
                                                       $('.val').click(function () {
                                                           if ($('.selectPart').val() === "") {
                                                               alert('Please select the bulk action');
                                                               return false;
                                                           }
                                                           if ($('.selectPart').val() == 'active') {
                                                               if ($('.checkboxes').is(':checked')) {
                                                                   alert('Do you want to Activate it ?');
                                                               } else {
                                                                   alert('Please select the action');
                                                                   return false;
                                                               }
                                                           }
                                                           if ($('.selectPart').val() == 'inactive') {
                                                               if ($('.checkboxes').is(':checked')) {
                                                                   alert('Do you want to Deactivate it ?');
                                                               } else {
                                                                   alert('Please select the action');
                                                                   return false;
                                                               }
                                                           }
                                                           if ($('.selectPart').val() == 'delete') {
                                                               if ($('.checkboxes').is(':checked')) {
                                                                   alert('Do you want to delete it ?');
                                                               } else {
                                                                   alert('Please select the action');
                                                                   return false;
                                                               }
                                                           }
                                                       });
                                                   });
</script>

<style>

    .col-lg-2.pull-left {
        margin-left: -106px;
    }
</style>

<script>
    $(document).ready(function () {
        $(document).on('click', '.search_job', function () {
            var search = $('#searchbar').val();
            if (search == '') {
                alert('Please Enter the Search keyword !');
                return false;
            } else {
                $('.search_job').attr('type', 'submit');
                return true;
            }
        });
    });

</script>