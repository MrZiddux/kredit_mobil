<div class="modal fade" id="modalmobil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <div class="modal-content">
         <div class="modal-header bg-white p-3 d-flex align-items-center">
            <h6 class="modal-title t-color-secondary t-semibold m-0">Mobil</h6>
            <div class="group-action">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
         </div>
         <div class="modal-body p-4">
            <div class="table-responsive">
               <table id="tableMobil" class="table align-middle">
                  <thead class="bg-color-deactive">
                     <tr>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Kode Mobil</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Merk</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Warna</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Harga</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($mobils as $mobil)
                     <tr>
                        <td class="ps-3 py-4 t-color-aliceblue">{{ $mobil->kode_mobil }}</td>
                        <td class="ps-3 py-4 t-color-aliceblue">{{ $mobil->merk }}</td>
                        <td class="ps-3 py-4 t-color-aliceblue"><input type="color" class="form-control form-control-sm form-control-color" value="{{ $mobil->warna }}" disabled></td>
                        <td class="ps-3 py-4 t-color-aliceblue">Rp. {{ number_format($mobil->harga_mobil, 0, ',', '.') }}</td>
                        <td class="d-none"><input type="hidden" value="{{ $mobil->gambar }}"></td>
                        <td class="ps-3 py-4"><button type="button" class="btn btn-sm bg-color-secondary rounded-0 text-white hover-btn-color-secondary pilih-mobil">Pilih</button></td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>