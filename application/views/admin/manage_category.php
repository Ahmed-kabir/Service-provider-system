<div class="card-body">

    <div class="col-sm-8" style="text-align: left; ">

        <a href="<?php echo base_url()?>Welcome/add_category"  class="btn btn-success btn-lg">
            <b>Add Category</b>
        </a>

        <p style="text-align: center">
        <h3 style="text-align: center;color:green "> <?php
            $message=$this->session->userdata('message');
            echo $message;
            $this->session->unset_userdata('message');
            ?>
        </h3>
        </p>

    </div>




</div>
<br />
<form action="<?php echo base_url()?>welcome/search_inventory" method="post">
    <div class="row ">
        <div class="col-md-12">

            <div class="col-md-8 ">
                <input type="text" class="form-control" placeholder="Enter Code.." name="search">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </div>
</form>

<table class="table">
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
            <?php foreach ($category as $cat) {?>

        <tr>

            <td><?php echo $cat->id; ?></td>
            <td><?php echo $cat->category_name; ?></td>
            <td><?php echo $cat->description; ?></td>




            <td>
                <a href="<?php echo base_url();?>welcome/edit_category/<?php echo $cat->id; ?>" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit">Edit</span></a>
                <a href="<?php echo base_url();?>welcome/delete_category/<?php echo $cat->id; ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-edit">Delete</span></a>

            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>
</div>