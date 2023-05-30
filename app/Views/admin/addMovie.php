<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add Movie</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">

                <form method="post" action="<?= base_url('manage/save-movie')?>" class="form" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-12 col-md-5 form__cover">

                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="thumbnail">Upload cover (190 x 270)</label>
                                        <input id="thumbnail" name="thumbnail" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="title" placeholder="Title">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="text" name="description" class="form__textarea" placeholder="Description"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="form__group">
                                        <input type="text" class="form__input" name="year" placeholder="Release year">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="form__group">
                                        <input type="time" class="form__input" name="duration" placeholder="Duration">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="form__group">
                                        <select name="quality" id="quality">
                                            <option value="FullHD">FullHD</option>
                                            <option value="HD">HD</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <select name="country" id="country">
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <select class="js-example-basic-multiple" name="genre" id="genre" multiple="multiple">
                                            <option value="Action">Action</option>
                                            <option value="Animation">Animation</option>
                                            <option value="Comedy">Comedy</option>
                                            <option value="Crime">Crime</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Fantasy">Fantasy</option>
                                            <option value="Historical">Historical</option>
                                            <option value="Horror">Horror</option>
                                            <option value="Romance">Romance</option>
                                            <option value="Science-fiction">Science-fiction</option>
                                            <option value="Thriller">Thriller</option>
                                            <option value="Western">Western</option>
                                            <option value="Otheer">Otheer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" name="casts" class="form__input" placeholder="Casts">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="form__radio">
                                <li>
                                    <span>Item type:</span>
                                </li>
                                <li>
                                    <input id="type1" type="radio" name="type" value="movie" checked="">
                                    <label for="type1">Movie</label>
                                </li>
                                <li>
                                    <input id="type2" type="radio" name="type" value="series">
                                    <label for="type2">TV Show</label>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form__group form__group--link">
                                        <input type="text" name="trailer" class="form__input" placeholder="Trailer">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group form__group--link">
                                        <input type="text" name="url" class="form__input" placeholder="Download Url">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="form__btn">publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>

    <!-- modal delete -->
    <a href="#modal-message" id="sessionModal" class="main__table-btn main__table-btn--delete open-modal">
    </a>
    <div id="modal-message" class="zoom-anim-dialog mfp-show modal">
        <h6 class="modal__title">Item delete</h6>

        <p class="modal__text">
            <?php if(session()->getFlashdata('message')): ?>

                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message') ?>
                </div>

            <?php endif; ?>
        </p>

        <div class="modal__btns">
<!--            <button class="modal__btn modal__btn--apply" type="button">Delete</button>-->
            <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        </div>
    </div>
    <!-- end modal delete -->
</main>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#sessionModal').trigger('click');
    })
</script>
<!-- end main content -->
<?= $this->endSection() ?>

