<div class="container mt-5">
        <nav>
            <ol class="breadcrumb bg-transparent pl-0">
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="card mt-5 mb-5 mx-auto" style="max-width: 900px;">
            <div class="row no-gutters">
                <div class="col-md-4 mt-5">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTkVwgO2BQyt8C5fk2VcxWRKyiLS31NaXwK_gtjHJbdy-Nsr687" class="card-img" style="max-width:300px;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-header bg-light">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="description" aria-selected="true">Profile</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content p-3" id="myTabContent">
                            <div class="tab-pane fade show active product-review" id="profile" role="tabpanel" aria-labelledby="description-tab">
                                <p class="card-text">
                                    <small class="">Name : <?=$data['client']['nama']?></small>
                                </p>
                                <p class="card-text">
                                    <small class="">Address : <?=$data['client']['address']?></small>
                                </p>
                                <p class="card-text">
                                    <small class="">City : <?=$data['client']['nama_kota']?></small>
                                </p>
                                <hr />
                                <p>Call :</p>
                                <a href="http://wa.me/<?=$data['client']['phone']?>" class="fa fa-phone" aria-hidden="true"> <?=$data['client']['phone']?></a>
                                <br></br>
                                <p>E-Mail :</p>
                                <a href="" class="fa fa-envelope" aria-hidden="true"> <?=$data['client']['email']?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-center"><?=$data['client']['nama']."'s"?> Motors</h2>
        <br><br>
        <div class="card-columns ml-5">
        <?php foreach($data['motor'] as $mtr): ?>
                <div class="card" style="width: 18rem;">
                    <!-- <img ="" class="card-img-top imgmotor" alt="..."> -->
                    <div class="card-body shadow">
                    <h5 class="card-title"><?= $mtr['nama']?></h5>
                    <hr />
                    <p class="card-text"><?= "Price  : Rp ".$mtr['harga']." / Day"?></p>
                    <p class="card-text"><?= "City   : ".$mtr['nama_kota']?></p>
                    <p class="card-text"><?= "Type   : ".$mtr['nama_tipe']?></p>
                    <p class="card-text"><?= "Brand  : ".$mtr['nama_brand']?></p>
                    <hr />
                    <a href="<?=BASEURL?>/motor/detail/<?=$mtr['id_motor']?>" class="btn btn-primary" style="width: 100px;">Details</a>
                    <a href="#" class="btn btn-warning" style="width: 100px;">Book</a>
                </div>
            </div>
       
        
        <?php endforeach; ?>
</div>
        </div>