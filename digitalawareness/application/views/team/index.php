<div class="container p-5 text-center">
    <div class="row">
        <div class="col col-lg-2">&nbsp;</div>
        <div class="col-md-auto">
            <div class="card">
                <div class="card-header">
                    My Team Score
                </div>
                <div class="card-body">
                    <h5 class="card-title">Current Score</h5>
                    <?php 
                    foreach($myscore->result_array() as $my):?>
                        <h1><?= $my['scoretotal'];?></h1>
                    <?php endforeach;?>
                     
                </div>
            </div>
        </div>
        <div class="col col-lg-2">&nbsp;</div>
    </div>
</div>