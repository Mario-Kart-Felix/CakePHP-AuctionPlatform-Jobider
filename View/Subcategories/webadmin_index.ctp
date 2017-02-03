<style>
    .pull-right.manageed {
        margin-top: -34px;
    }
</style>

<?php //pr($this->params); die;?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Manage Sub Category</h4>
                        <?php //echo $this->Html->link('Back To Category Management', array('controller' => 'categories', 'action' => 'index'), array('class' => 'pull-right manageed  btn btn-primary')); ?>
                        <a class="pull-right manageed  btn btn-primary" href="<?php echo $this->webroot; ?>webadmin/categories/index"><i>
<img class="mrg_r5" src="<?php echo $this->webroot; ?>img/back.png" alt="Back icon image">
</i>
                            Back To Category Management</a>
                    </header>

                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="<?php echo Router::url('/'); ?>webadmin/subcategories/add"><button id="sample_editable_1_new" class=" btn btn-primary" type="button">
                                    Add New <i class="fa fa-plus"></i>
                                </button></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <section id="unseen">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-lg-3 pull-right">
                                        <?php echo $this->Form->create('Subcategory', array('url' => array('controller' => 'subcategories', 'action' => 'index', $this->params['pass'][0]))); ?>
                                        <div class="input-group">
                                            <input type="text" id="searchbar" class="form-control" name="data[Subcategory][search]">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary search_job" type="button">Go</button>
                                            </span>
                                        </div><!-- /input-group -->
                                        <?php echo $this->Form->end(); ?>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-2 pull-left">
                                        <?php echo $this->Form->create('Subcategory', array('id' => 'frm1', 'url' => array('controller' => 'subcategories', 'action' => 'changeselectall', $this->params['pass']['0']))); ?>
                                        <div class="input-group">
                                            <select name="data[Subcategory][select]" class=" form-control selectPart">
                                                <option value="">Select</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary val" type="submit">Go</button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                            </div>
                            &nbsp;
                            <?php echo $this->Session->flash(); ?>
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th><input type='checkbox' name='checkall' onclick='checkedAll(frm1);'></th>
                                        <th>Sr. No</th>
                                        <th>Category Name</th>
                                        <th>Name</th>
                                        <th>Creation Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($blog)) {
                                        $i = '1';
                                        foreach ($blog as $blog) {
                                            ?>
                                            <tr>
                                                <td><input type="checkbox" name="data[Subcategory][chk1][]" value="<?php echo $blog['Subcategory']['id']; ?>" class="checkboxes"></td>
                                                <td><?php echo $i; ?></td> 
                                                <td><?php echo $blog['Category']['name']; ?></td>
                                                <td><?php echo $blog['Subcategory']['category_name']; ?></td>
                                                <td><?php echo $blog['Subcategory']['addedon']; ?></td> 
                                                <td>       <?php
                                                    if ($blog['Subcategory']['status'] == '1') {
                                                        echo $this->Html->link('Active', array('controller' => 'subcategories', 'action' => 'change_status', 'prefix' => 'webadmin', $blog['Subcategory']['id']), array('class' => 'btn btn-primary'));
                                                        ?>
                                                        <?php
                                                    } else {
                                                        echo $this->Html->link('Inactive', array('controller' => 'subcategories', 'action' => 'change_status', 'prefix' => 'webadmin', $blog['Subcategory']['id']), array('class' => 'btn btn-danger'));
                                                        ?>
                                                    <?php }
                                                    ?></td>
                                                <td><?php echo $this->Html->link($this->Html->image("/images/pencil.png", array("alt" => "Edit")), "edit/" . $blog['Subcategory']['id'] . "", array('escape' => false, 'title' => 'Edit User', 'class' => 'edit')); ?> 
                                                    <a href="<?php echo $this->Html->url(array('controller' => 'subcategories', 'action' => 'delete', 'prefix' => 'webadmin', $blog['Subcategory']['id'])); ?>" onclick="return confirm('Are you sure? You Want to Delete it.');"><img src="<?php echo $this->webroot; ?>images/cross.png"></a></td>
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="8">
                                                <div class="alert alert-danger">
                                                    <?php if (!empty($text)) { ?>
                                                        <strong>Sorry!</strong> There is no data related to <strong><?php echo $text; ?></strong> right now.
                                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                    <?php } else { ?>
                                                        NO Data Found In Table
                                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>   
                                                    <?php } ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th><input type='checkbox' name='checkall' onclick='checkedAll(frm1);'></th>
                                        <th>Sr. No</th>
                                        <th>Category Name</th>
                                        <th>Name</th>
                                        <th>Creation Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>  
                                </tfoot>
                                <?php echo $this->Form->end(); ?>
                            </table>
                        </section>
                    </div>
                    <div class="container">
                        <div class="pagi col-md-7 col-md-offset-4">
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
                                            $(document).ready(function() {
                                                $('.val').click(function() {
                                                    if ($('.selectPart').val() === "") {
                                                        alert('Please select the bulk action');
                                                        return false;
                                                    }
                                                    if ($('.selectPart').val() == 'active') {
                                                        if ($('.checkboxes').is(':checked')) {
                                                            alert('Do you want Activate it ?');
                                                        } else {
                                                            alert('Please select the action');
                                                            return false;
                                                        }
                                                    }
                                                    if ($('.selectPart').val() == 'inactive') {
                                                        if ($('.checkboxes').is(':checked')) {
                                                            alert('Do you want Deactivate it ?');
                                                        } else {
                                                            alert('Please select the action');
                                                            return false;
                                                        }
                                                    }
                                                    if ($('.selectPart').val() == 'delete') {
                                                        if ($('.checkboxes').is(':checked')) {
                                                            alert('Do you want to Delete it ?');
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
$(document).ready(function(){
    $(document).on('click','.search_job',function(){
        var search = $('#searchbar').val();
        if(search==''){
            alert('Please enter search keyword !');
            return false;
        }else{
            $('.search_job').attr('type','submit');
            return true;
        }
    });
});


</script>
