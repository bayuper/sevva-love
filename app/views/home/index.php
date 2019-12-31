
<div class="card text-white">
        <img src="<?=BASEURL;?>/img/imgHome.jpeg" style="opacity: 80%; background-color: grey;" class="card-img" alt="... ">
        <div class="card-img-overlay ">
            <div class="container">
                <h1 class="card-title text-center p-md-5 text-dark">FIND THE BEST MOTORBIKES</h1>
                <br><br>
                <form action="<?=BASEURL;?>/motor/caridata" method="POST">
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
                        
                            <button type="submit" class="btn btn-primary center col-md-12">Search</button>
                       
                        <!-- <label for="price" class="mx-auto">Price</label>
                            <select class="form-control" id="price">
                                                  <option>Select Price</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                </select> -->
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h2 class="text-center mt-5">Our Motors</h2>
        <br><br>
        <div class="container">
            
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
                    <a href="<?=BASEURL;?>/login" class="btn btn-primary">Sign in to continue</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
</div>
</div>