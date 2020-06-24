<div class="container p-5">
    <div class="row ">
        <div class="col-12 text-center">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
            Checkpoint <?php echo $_SESSION['cpid'];?>
        </div>
        <div class="card-body">
            <form action="<?= base_url();?>checkpoint" id="basicform" method="post" >
                <div class="form-group">
                    <label for="inputteamid">Team Name</label>
                    <select name="teamid" class="form-control">
                        <?php
                        foreach($team->result_array() as $tm):?>
                        <option value="<?= $tm['teamid']; ?>"><?= $tm['teamname'];?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputscore">Score</label>
                    <select name="score" class="form-control">
                        <option value="+10">+10</option>
                        <option value="+15">+15</option>
                        <option value="-20">-20</option>
                        <option value="-30">-30</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Submit">

                </div>
            </form>
            
        </div>
    </div>

</div>