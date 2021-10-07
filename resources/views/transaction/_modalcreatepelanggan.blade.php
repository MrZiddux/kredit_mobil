<div class="modal fade" id="modalcreatepelanggan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <form action="{{ route('createpelanggan') }}" method="post">
            @csrf
            <div class="modal-header bg-white p-3 d-flex">
               <h6 class="modal-title t-color-secondary t-semibold m-0 float-start">Mobil</h6>
               <div class="group-action">
                  <button type="submit" class="btn btn-sm bg-color-secondary text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-end">Tambah Mobil</button>
                  <button type="button" class="btn btn-sm bg-color-lightgray text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-start" data-bs-dismiss="modal" aria-label="Close">Batal</button>
               </div>
            </div>
            <div class="modal-body">
               <div class="ps-lg-3">
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary @error('nama_pembeli') is-invalid @enderror" id="nama" name="nama_pembeli" placeholder="Your Name">
                     <label class="transition" for="nama">Nama Pembeli</label>
                     @error('nama_pembeli')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary @error('ktp_pembeli') is-invalid @enderror" id="ktp_pembeli" name="ktp_pembeli" placeholder="Your KTP Id">
                     <label class="transition" for="ktp_pembeli">KTP Pembeli</label>
                     @error('ktp_pembeli')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control border-0 border-bottom focus-border-secondary @error('telp_pembeli') is-invalid @enderror" id="telp_pembeli" name="telp_pembeli" placeholder="Your Phone Number">
                     <label class="transition" for="telp_pembeli">Telepon Pembeli</label>
                     @error('telp_pembeli')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
                  <div class="form-floating mb-3">
                     <textarea class="form-control border-0 border-bottom focus-border-secondary @error('alamat_pembeli') is-invalid @enderror" placeholder="Leave a Address here" id="alamat" name="alamat_pembeli" style="height: 7.5rem;"></textarea>
                     <label for="alamat" class="transition">Alamat Pembeli</label>
                     @error('alamat_pembeli')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>