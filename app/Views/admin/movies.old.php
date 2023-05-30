<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Movies</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="m-0 font-weight-bold text-primary">Movies</h5>
                </div>
                <div class="col-md-4 text-end">
                    <a class="btn btn-success btn-sm px-3 text-end" href="<?=base_url()?>manage/add-movie">Add Movie <i class="fa fa-plus"></i></a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Date</th>
                            <th>Rating</th>
                            <th>Date Added</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($movies as $movie): ?>
                        <tr>
                            <td><?= $movie->title ?></td>
                            <td><?= $movie->genre ?></td>
                            <td><?= $movie->year ?></td>
                            <td>7.1</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script type="application/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable()
    })
</script>
<?= $this->endSection() ?>

