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
                    <img src="https://www.ab4rent.com/wp-content/uploads/2018/07/VespaSprint-125-Green-ab4rent-com-500x465.jpg" class="card-img" style="max-width:300px;" alt="...">
                    <h4 class="text-center"><?=$data['motor']['nama']?></h4>
                    <p class="text-center">Uploaded By <?=$data['client']['nama']?></p>
                    <p class="text-center">Price per day Rp <?=$data['motor']['harga']?></p>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <br>
                        <h4 class="text-center">Order Details</h4>
                        <br><br>
                        <form action="<?=BASEURL?>/order/payment/<?=$data['motor']['id_motor']?>" method="POST">
                                
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Order Date</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" id="example-date-input" name="order_date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Return Date</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" id="example-date-input" name="return_date">
                                    </div>
                                </div>
                                <div class="col-md-2 offset-md-4">
                                    <button type="submit" class="btn btn-warning" name="submit" style="width: 90px">Book</button>
                                </div>
                        </form>

                    <!-- modal payment -->
                    
                    <!-- end modal payment -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
