<div class="container p-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('team');?>/teamname" method="post">
                    <div class="form-group">
                        <label for="teamname">Team Name</label>
                        <input type="text" class="form-control" id="teamname" placeholder="Enter Your Team Name" name="teamname">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>

    </div>
</div>