  <div class="modal-dialog">
        <div class="modal-content" id="edit_rate">
<?php echo $this->Form->create('Userbudget', array('role' => 'form')); ?>
            <div class="modal-header green">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Change Hourly Rate</h4>
            </div>
            <div class="modal-body">
                <h5 class="marg_0">Changing your pay rate only affects future contracts.
                </h5>                <!--        <form role="form">-->
                <div class="row" style="margin-top: 25px;">

                    <label class="col-sm-3">Hourly Rate</label>
                    <div class="col-sm-6">
                        <p class="marg_0">Propose a Hourly Rate  of :</p>

                        <div class="bg_grey1">

                            <div class="row">
                                <div class="col-md-5">Your Rate</div>

                                <div class="col-md-0">

                                    <font class="pull-left mrg_r5">$</font>
                                    
    <?php echo $this->Form->input('budget', array('type' => 'text', 'class' => 'pull-left paid', 'placeholder' => '0.00', 'label' => false)); ?>


                                    <span>/hr</span>
                                </div>
                            </div>


                            <br>
                            <div class="row">
                                <div class="col-md-5">-10% Jobider Fee </div>

                                <div class="col-md-5">

                                    <font>$</font> <span class='ten'>0.00/hr</span>
                               <input type="hidden" name="data[Userbudget][fee]" id="tens1">

                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-5">You'll earn</div>

                                <div class="col-md-0">

                                    <font class="pull-left mrg_r5">$</font><input type='text' class="pull-left tens" placeholder="0.00" name="data[Userbudget][earn]"><span>/hr</span>


                                </div>
                            </div>
                        </div>
                   <!--     <p class="marg_0">Lorem ipsum sit amiet.</p>
                        -->
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <p class=" text-center">
                    <button type="button" class="btn btn_red font_18 col-md-1 col-md-offset-4 " id="saverate">SAVE</button>
                    <button type="button" class="btn btn_red font_18  col-md-1 marg_l20  " data-dismiss="modal">CANCEL</button>
                <div class="clearfix"></div>
                </p>
            </div>
        </div>

<?php echo $this->Form->end(); ?>
    </div>


<script>
    var data=$('#UserbudgetEditRateForm');
    $('#saverate').click(function(){
        $.ajax({
           type:'post',
           dataType:'json',
           url:'<?php  echo $this->base;?>/freelancer/save_rate',
           data:data.serialize(),
           success:function(msg){
              if(msg.suc=='yes'){
                 // alert('sdcbhsdchvsd');
                  $('#rates').append(msg.budget);
                  $('.editPrice').attr('data-target',"#myModal8");
                  $('.editPrice').html('Add more');
                  $('.editPrice').addClass('editprice');
                  $('.editprice').removeClass('editPrice');
//                  $('.editPrice').html('<a href="#" class="marg_l20 font_14 editprice" data-toggle="modal" data-target="#myModal8">Add more</a>');
                 $('#edit_rate').hide();
                   $('.fade').removeClass('in');
              } 
           }
        });
    });
     $('.paid').on('keyup', function() {
            var paid = $('.paid').val();
            var ten = paid / 10;
            var tens = parseInt(paid) - ten;
            if(ten>1){
                 $('.ten').html(ten)
            }else{
                 $('.ten').html(ten + '.00/hr')
            }
           if(tens>10){
               
            $('.tens').val(tens)
        }else{
             $('.tens').val(tens + '.00') 
        }
            $('#tens1').val(ten);
        });
    </script>