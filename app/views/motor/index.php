<div class="container">
    <br><br>
    <form action="<?=BASEURL;?>/motor/caridata" method="POST">
    <div class="card text-center shadow">
      <div class="card-body">
        <h1 class="card-title">CHOOSE THE MOTOR</h1>
        <p class="card-text">Gak Honda, Gak Cinta.</p>
                    <div class="row">
                        <div class="form-group inline col-md-3">
                            <select class="form-control" id="location" placeholder="Location" name="location">
                                          <option>Select Location</option>
                                          <?php foreach($data['locate'] as $row): ?> 
                                            <option value="<?= $row['id_kota']?>"> 
                                            <?= $row['nama_kota']; ?> 
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                        </div>
                        <div class=" form-group inline col-md-3 ">
                            <select class="form-control" id="types" name="tipe">
                                            <option>Select Types</option>
                                            <?php foreach($data['tipe'] as $row): ?> 
                                            <option value="<?= $row['id_tipe']?>"> 
                                            <?= $row['nama_tipe']; ?> 
                                            </option>
                                            <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group inline col-md-3 ">
                            <!-- <label for="brands">Any Brands</label> -->
                            <select class="form-control" id="brands" name="brand">
                                              <option>Select Brands</option>
                                              <?php foreach($data['brand'] as $row): ?> 
                                              <option value="<?= $row['id_brand']?>"> 
                                              <?= $row['nama_brand']; ?> 
                                              </option>
                                              <?php endforeach;?>
                                            </select>
                        </div>
                        <div class="form-group inline col-md-3"> 
                            <button type="submit" class="btn btn-primary center col-md-6">Search</button>
                        </div>   
                    </div>
                </div>
            </div>
                </form>
                <br><br>
        <h2 class="text-center">Motors List</h2>
        <br><br>
        <div class="card-columns ml-5">
        <?php foreach($data['motor'] as $mtr): ?>
                <div class="card" style="width: 18rem;">
                    <img src="https://www.ab4rent.com/wp-content/uploads/2018/07/VespaSprint-125-Green-ab4rent-com-500x465.jpg" class="card-img-top imgmotor" alt="...">
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