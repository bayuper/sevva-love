<?php 
    $kbaru = $data['id'][0]['max'];
    $kodeClient = $kbaru;
    $urutan = (int)substr($kodeClient,1,4);
    $urutan++;

    if($urutan <= 9 ){
        $id = "O00".$urutan;
    }else{
        $id = "O0".$urutan;
    }

    $mPrice = $data['motor']['harga'];
    $orderDate = strtotime($_POST['order_date']);
    $returnDate = strtotime($_POST['return_date']);
    $days = $returnDate - $orderDate;

    $total = floor($days/(60*60*24))*$mPrice;
    $duration = floor($days/(60*60*24));

    if($duration > 1){
        $dur = $duration.' Days';
    }else{
        $dur = $duration.' Day';
    }

?>
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
                        <h4 class="text-center">Payment Details</h4>
                        
                        <form action="<?=BASEURL?>/order/tambah" method="POST">
                                <div class="form-group row">
                                    <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                    <div class="col-md-6">
                                        <input type="hidden" id="full_name" class="form-control" name="id" value="<?= $id ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- <label for="order-date" class="col-md-4 col-form-label text-md-right">Current Date</label> -->
                                    <div class="col-md-6">
                                        <input type="hidden" id="order_date" class="form-control" name="cdate" placeholder="" value="<?=date("Y/m/d")?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-date-input" name="name" value="<?=$data['nama']?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-date-input" name="address" value="<?=$data['address']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Order Date</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-date-input" name="order_date" value="<?=$_POST['order_date']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Return Date</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-date-input" name="return_date" value="<?=$_POST['return_date']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Duration</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-date-input" name="duration" value="<?=$dur?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right">Total Payment</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="example-date-input" name="total" value="<?=$total?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="bt" class="col-md-4 col-form-label text-md-right">Payment proof</label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="bukti_transfer">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" type="text" rows="3" id="example-date-input" name="name" readonly>Please transfer to BCA with account number : 782782739 on behalf of PT. SEVVA INDONESIA</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- <label for="example-date-input" class="col-md-4 col-form-label text-md-right">ID Motor</label> -->
                                    <div class="col-md-6">
                                        <input class="form-control" type="hidden" id="example-date-input" name="id_motor" value="<?=$data['motor']['id_motor']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- <label for="example-date-input" class="col-md-4 col-form-label text-md-right">ID Client</label> -->
                                    <div class="col-md-6">
                                        <input class="form-control" type="hidden" id="example-date-input" name="id_client" value="<?=$data['id_client']?>">
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-warning" name="submit" style="width: 90px">Confirm</button>
                                        <a href="<?=BASEURL?>/order/index/<?=$data['motor']['id_motor']?>"><button type="button" class="btn btn-primary" name="submit" style="width: 90px">Edit</button></a>
                                    </div>
                                </div>
  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
