<?php 
    $kbaru = $data['id'][0]['max'];
    $kodeClient = $kbaru;
    $urutan = (int)substr($kodeClient,1,4);
    $urutan++;

    if($urutan <= 9 ){
        $id = "M00".$urutan;
    }else{
        $id = "M0".$urutan;
    }

?>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Upload your Motor details</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="<?=BASEURL;?>/motor/tambah" method="POST" >
                                 
                                <div class="form-group row">
                                    <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="id" value="<?= $id ?>" readonly>
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <!-- <label for="full_name" class="col-md-4 col-form-label text-md-right">User ID</label> -->
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="id_client" value="<?= $data['id_client'] ?>" readonly>
                                    </div>
                                </div>

        
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Title</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="title" placeholder="Enter your motor name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">Brand</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="exampleFormControlSelect1" name="brand">
                                            <?php foreach($data['brand'] as $row): ?> 
                                            <option value="<?= $row['id_brand']?>"> 
                                            <?= $row['nama_brand']; ?> 
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-md-4 col-form-label text-md-right">Type</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="exampleFormControlSelect1" name="tipe">
                                            <?php foreach($data['tipe'] as $row): ?> 
                                            <option value="<?= $row['id_tipe']?>"> 
                                            <?= $row['nama_tipe']; ?> 
                                            </option>
                                            <?php endforeach;?>
                                        </select>
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
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Price</label>
                                    <div class="col-md-6">
                                        <input type="number" id="full_name" class="form-control" name="harga" placeholder="Price per Day in Rp">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Motor Photo</label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto_motor">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">BPKB Photo</label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto_bpkb">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">STNK Photo</label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="foto_stnk">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea type="text" id="full_name" class="form-control" rows="3" name="desc" placeholder="Enter your motor description"></textarea>
                                    </div>
                                </div>
                                
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="submit">
                                        Submit
                                        </button>
                                        <br><br>
                                        <p>Or<a href="<?=BASEURL;?>/login/index"> Cancel</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>