<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Movie</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-3">
        <div class="card-body p-5">
            <form method="POST" action="<?=base_url('manage/save-movie')?>">
                <div class="form-group mb-3">
                    <label for="title">Movie Title <small class="text-danger">*</small> </label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title of Movie">
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group mb-3">
                            <label for="genre">Genre <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="genre" id="genre" placeholder="Action, Drama">
                        </div>

                        <div class="form-group mb-3">
                            <label for="url">Download Url <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="url" id="url" placeholder="Download Url">
                        </div>

                        <div class="form-group mb-3">
                            <label for="trailer">Trailer <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="trailer" id="trailer" placeholder="Trailer">
                        </div>
                        <div class="form-group mb-3">
                            <label for="casts">Casts</label>
                            <input type="text" class="form-control" name="casts" id="casts" placeholder="Casts">
                        </div>
                        <div class="form-group mb-3">
                            <label for="year">Year <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" name="year" id="year" placeholder="Year">
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="thumbnail">Thumbnail (jpeg,png) <small class="text-danger">*</small></label>
                            <label for="" class="btn btn-primary btn-block">
                                <i class="fa fa-cloud-upload me-3"></i> Select image
                            </label>
                            <input type="hidden" name="thumbnail" value="image.jpeg">

                        </div>
                        <div class="form-group mb-3">
                            <label for="thumbnail">Thumbnail Preview</label>
                            <div class="card h-100">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="description">Description <small class="text-danger">*</small></label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Movie Description"></textarea>
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script type="application/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable()
    })
</script>
<?= $this->endSection() ?>

