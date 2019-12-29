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
                    <a href="<?=BASEURL?>/login/logout"><button type="submit" class="btn btn-danger center col-md-12 mt-4">Sign Out</button></a>
                    <button type="submit" class="btn btn-warning center col-md-12 mt-2 mb-5">Delete Account</button>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-header bg-light">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="description" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#motorbike" role="tab" aria-controls="review" aria-selected="false">Motorbike</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rentstatus" role="tab" aria-controls="rent" aria-selected="false">Rent Status</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content p-3" id="myTabContent">
                            <div class="tab-pane fade show active product-review" id="profile" role="tabpanel" aria-labelledby="description-tab">
                            <div class="card-body ml-0">
                            <form name="my-form" onsubmit="return validform()" action="" method="">
                                 
                                <div class="form-group row">
                                    <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                    <div class="col-md-6">
                                        <input type="hidden" id="full_name" class="form-control" name="id" value="<?= $data['id_client'] ?>" readonly>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name" value="<?=$data['nama']?>" readonly> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address" value="<?=$data['email']?>" readonly>
                                    </div>
                                </div>

                               

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone" value="<?=$data['phone']?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="address" value="<?=$data['address']?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Location</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="address" value="<?=$data['nama_kota']?>" readonly>
                                    </div>
                                </div>
                               

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">NIK</label>
                                    <div class="col-md-6">
                                        <input type="number" id="permanent_address" class="form-control" name="nik" value="<?=$data['nik']?>" readonly>
                                    </div>
                                </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="form-group inline col-md-5 mx-auto">
                                        <button type="button" class="btn btn-outline-primary center col-md-12" data-toggle="modal" data-target="#exampleModal">Update Profiles</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                              
                        <!-- update modal -->
                    
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <!-- modal body -->
                                <div class="modal-body">
                                <form action="<?=BASEURL?>/client/update" method="POST">
                                    <div class="form-group row">
                                        <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                        <div class="col-md-6">
                                            <input type="hidden" class="form-control" name="id" value="<?= $data['id_client'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-3 col-form-label text-md-right">Full Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="name" value="<?=$data['nama']?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-3 col-form-label text-md-right">E-Mail Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="email-address" value="<?=$data['email']?>">
                                        </div>
                                    </div>

                                
                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-3 col-form-label text-md-right">Phone Number</label>
                                        <div class="col-md-6">
                                            <input type="text" id="phone_number" class="form-control" name="phone" value="<?=$data['phone']?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-3 col-form-label text-md-right">Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="user_name" class="form-control" name="address" value="<?=$data['address']?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="location" class="col-md-3 col-form-label text-md-right">Location</label>
                                        <div class="col-md-6">
                                        <select class="form-control" id="location" placeholder="Location" name="city">
                                                    <?php foreach($data['locate'] as $row): ?> 
                                                        <option value="<?= $row['id_kota']?>"> 
                                                        <?= $row['nama_kota']; ?> 
                                                        </option>
                                                        <?php endforeach;?>
                                                    </select>
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-3 col-form-label text-md-right">NIK</label>
                                        <div class="col-md-6">
                                            <input type="number" id="permanent_address" class="form-control" name="nik" value="<?=$data['nik']?>">
                                        </div>
                                    </div>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        <!-- end update modal -->

                            <div class="tab-pane fade product-review" id="motorbike" role="tabpanel" aria-labelledby="review-tab">
                                <div class="row">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Motor</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data['motor'] as $mtr => $value):?> 
                                            <tr>
                                                <th scope="row"><?=++$mtr?></th>
                                                <td><?=$value['nama']?></td>
                                                <td>
                                                    <a href="#" class="btn btn-xs btn-success">Update</a>
                                                    <a href="#" class="btn btn-xs btn-danger">Delete</a>
                                                </td> 
                                            </tr>
                                        <?php endforeach;?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade product-review" id="rentstatus" role="tabpanel" aria-labelledby="rent-tab">
                                <div class="row">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Motor</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Return Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                        <?php foreach($data['rent'] as $mtr => $value):?> 
                                            <tr>
                                                <th scope="row"><?=++$mtr?></th>
                                                <td><?=$value['nama']?></td>
                                                <td><?=$value['status']?></td>
                                                <td><?=$value['tgl_kembali']?></td>
                                                <td>
                                                    <form action="<?=BASEURL?>/profile/updateRentStatus/<?=$value['id_motor']?>" method="POST">
                                                        <input type="hidden" name="id_motor" value="<?=$value['id_motor']?>">
                                                        <a href="#"><button class="btn btn-xs btn-success" type="submit">Return</button></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
