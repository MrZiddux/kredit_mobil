<form action="{{ route('pelangganbaru') }}" method="POST" id="pelangganBaru" class="d-none">
   @csrf
   <div class="row row-cols-1 row-cols-md-2">
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom focus-border-secondary @error('nama_pembeli') is-invalid @enderror" id="nama" name="nama_pembeli" placeholder="Your Name">
            <label class="transition" for="nama">Nama Pembeli</label>
            @error('nama_pembeli')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom focus-border-secondary @error('ktp_pembeli') is-invalid @enderror" id="ktp_pembeli" name="ktp_pembeli" placeholder="Your KTP Id">
            <label class="transition" for="ktp_pembeli">KTP Pembeli</label>
            @error('ktp_pembeli')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0 border-bottom focus-border-secondary @error('telp_pembeli') is-invalid @enderror" id="telp_pembeli" name="telp_pembeli" placeholder="Your Phone Number">
            <label class="transition" for="telp_pembeli">Telepon Pembeli</label>
            @error('telp_pembeli')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
            @enderror
         </div>
      </div>
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
   <div class="d-flex justify-content-end">
      <button type="reset" class="btn text-muted">Reset</button>
      <button type="submit" class="btn bg-color-secondary text-white hover-btn-color-secondary transition">Daftarkan</button>
   </div>
</form>