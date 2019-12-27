<div class="container mt-5">
        <nav>
            <ol class="breadcrumb bg-transparent pl-0">
                <li class="breadcrumb-item"><a href="<?=BASEURL;?>/motor">Motorbikes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Motor</li>
            </ol>
        </nav>
    </div>

    <!-- Single Product -->
    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <figure class="figure">
                        <img src="https://www.ab4rent.com/wp-content/uploads/2018/07/VespaSprint-125-Green-ab4rent-com-500x465.jpg" class="figure-img img-fluid">
                    </figure>
                </div>

                <div class="col-lg-4">
                    <h3><?=$data['motor']['nama']?></h3>
                    <p class="text-muted">Price : <?=$data['motor']['harga']?> /day</p>
                    <p class="card-text">
                        <small class="text-muted">Location : <?=$data['motor']['nama_kota']?></small>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Type : <?=$data['motor']['nama_tipe']?></small>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Brand : <?=$data['motor']['nama_brand']?></small>
                    </p>

                    <div class="btn-product">
                        <a href="" class="btn btn-warning text-white col-md-5 ">Book</a>
                    </div>
                    <hr />

                    <div class="designed-by">
                        <h5>Uploaded by <a href="<?=BASEURL?>/profile/clientprofile/<?=$data['client']['id_client']?>"><?=$data['client']['nama']?></a></h5>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Motor -->

    <!-- Product Description & Review -->
    <section class="product-description p-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Product Description</a>
                        </li>
                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        <div class="tab-pane fade show active product-review" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p><?=$data['motor']['description']?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Product Description & Review -->