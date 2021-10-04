<form action="" method="POST" id="pelangganLama" class="d-none">
   <div class="row row-cols-1 row-cols-md-2">
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="nama" name="nama" placeholder="Your Name" readonly>
            <label class="transition" for="nama">Nama Pembeli</label>
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="ktp_pembeli" name="ktp_pembeli" placeholder="Your KTP Id" readonly>
            <label class="transition" for="ktp_pembeli">KTP Pembeli</label>
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="telp_pembeli" name="telp_pembeli" placeholder="Your Phone Number" readonly>
            <label class="transition" for="telp_pembeli">Telepon Pembeli</label>
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <textarea class="form-control border-0 border-bottom focus-border-secondary" placeholder="Leave a Address here" id="alamat" name="alamat" rows="3" readonly></textarea>
            <label for="alamat" class="transition">Alamat Pembeli</label>
         </div>
      </div>
   </div>
   <div class="accordion accordion-flush" id="accordionExample">
      <div class="accordion-item">
         <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Kredit
            </button>
         </h2>
         <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <div class="row row-cols-1 row-cols-md-2">
               <div class="col">
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="alamat" name="alamat" placeholder="Your Address">
                     <label class="transition" for="alamat">Alamat Pembeli</label>
                  </div>
               </div>
               <div class="col">
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="alamat" name="alamat" placeholder="Your Address">
                     <label class="transition" for="alamat">Alamat Pembeli</label>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class="accordion-item">
         <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Cash
            </button>
         </h2>
         <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <div class="row row-cols-2">
               <div class="col">
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="alamat" name="alamat" placeholder="Your Address">
                     <label class="transition" for="alamat">Alamat Pembeli</label>
                  </div>
               </div>
               <div class="col">
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary" id="alamat" name="alamat" placeholder="Your Address">
                     <label class="transition" for="alamat">Alamat Pembeli</label>
                  </div>
               </div>
            </div>
            </div>
         </div>
      </div>
   </div>
</form>