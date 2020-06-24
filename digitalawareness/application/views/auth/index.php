<div class="container p-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <?= $this->session->flashdata('message'); ?>

        <div class="card">
            <div class="card-header">
                
                Login Your Team
            </div>

            <div class="card-body">
                <form action="<?= base_url('auth'); ?>" method="POST">
                    <div class="form-group">
                        <label for="idInput">Team Id</label>
                        <input type="text" class="form-control" id="idInput" placeholder="Enter Your ID" name="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>