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
                    <a href="<?=BASEURL?>/login/logout"><button type="submit" class="btn btn-danger center col-md-12 mt-4" style="fix-position">Sign Out</button></a>
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
                            <form name="my-form" onsubmit="return validform()" action="<?=BASEURL;?>/register/tambah" method="POST">
                                 
                                <div class="form-group row">
                                    <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                    <div class="col-md-6">
                                        <input type="hidden" id="full_name" class="form-control" name="id" value="<?= $data['id_client'] ?>" readonly>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name" value="<?=$data['nama']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address" value="<?=$data['email']?>">
                                    </div>
                                </div>

                               

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone" value="<?=$data['phone']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="address" value="<?=$data['address']?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Location</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="address" value="<?=$data['nama_kota']?>">
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">KTP's Photo</label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto_ktp">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">NIK</label>
                                    <div class="col-md-6">
                                        <input type="number" id="permanent_address" class="form-control" name="nik" value="<?=$data['nik']?>">
                                    </div>
                                </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="form-group inline col-md-5 mx-auto">
                                        <button type="submit" class="btn btn-outline-primary center col-md-12">Update Profiles</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                               
                            <div class="tab-pane fade product-review" id="motorbike" role="tabpanel" aria-labelledby="review-tab">
                                <div class="row">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="#" class="btn btn-xs btn-success">Update</a>
                                                    <a href="#" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan
                                                    menghapus data ini?')">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade product-review" id="rentstatus" role="tabpanel" aria-labelledby="rent-tab">
                                <div class="row">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>
                                                    <a href="#" class="btn btn-xs btn-success">Update</a>
                                                    <a href="#" class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan
                                                    menghapus data ini?')">Delete</a>
                                                </td>
                                            </tr>
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