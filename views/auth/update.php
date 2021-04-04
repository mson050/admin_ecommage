<?php getHeader(); ?>
<div  class="container" style="padding-top: 200px;padding-bottom: 200px">
    <div class="row">
        <div class="col-md-6">
            <form id="update_form" action="" method="POST" role="form">
                <legend>Update profile</legend>

                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Input field">
                </div>

                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" name="job" class="form-control" id="job" placeholder="Input field">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
        <div class="col-md-6">
            <img src="https://static.fortytwo.com/assets/wp-content/uploads/2016/08/11082912/icons_2-02.png" class="img-responsive" alt="Image">
        </div>
    </div>
</div>
<?php getFooter(); ?>
