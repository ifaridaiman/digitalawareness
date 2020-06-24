<div class="container p-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header text-center">
                Game Day SK Alam Mega 3
            </div>
            <div class="card-body">
                <table class="table table-striped table-dark text-center table-responsive{-sm|-md|-lg|-xl}">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team Name</th>

                            <th scope="col">Total Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        foreach ($currentstats->result_array() as $cs) : ?>
        
                            <tr>
                                <th scope="row"><?= $num; ?></th>
                                <td><?= $cs['teamname']; ?></td>
                                <td><?= $cs['scoretotal']; ?></td>
                            </tr>
                        <?php 
                        $num++;
                        endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>