<?php 
    $kbaru = $data['id'][0]['max'];
    $kodeClient = $kbaru;
    $urutan = (int)substr($kodeClient,1,4);
    $urutan++;

    if($urutan <= 9 ){
        $id = "C00".$urutan;
    }else{
        $id = "C0".$urutan;
    }
?>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="<?=BASEURL;?>/register/tambah" method="POST">
                                 
                                <div class="form-group row">
                                    <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                    <div class="col-md-6">
                                        <input type="hidden" id="full_name" class="form-control" name="id" value="<?= $id ?>" readonly>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="email_address" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" class="form-control" name="phone">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="exampleFormControlSelect1" name="city">
                                            <?php foreach($data['locate'] as $row): ?> 
                                            <option value="<?= $row['id_kota']?>"> 
                                            <?= $row['nama_kota']; ?> 
                                            </option>
                                            <?php endforeach;?>
                                        </select>
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
                                        <input type="number" id="permanent_address" class="form-control" name="nik">
                                    </div>
                                </div>

                                

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                        <br><br>
                                        <p>Already Have an Account?<a href="<?=BASEURL;?>/login/index"> Login</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>