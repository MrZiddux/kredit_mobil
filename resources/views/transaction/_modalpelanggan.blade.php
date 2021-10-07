<div class="modal fade" id="modalpelanggan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
               <table id="tablePelanggan" class="table align-middle">
                  <thead class="bg-color-deactive">
                     <tr>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">No. KTP</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Nama</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Telp</th>
                           <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($pembelis as $pembeli)
                     <tr>
                        <td class="ps-3 py-4 t-color-aliceblue">{{ $pembeli->ktp_pembeli }}</td>
                        <td class="ps-3 py-4 t-color-aliceblue">{{ $pembeli->nama_pembeli }}</td>
                        <td class="ps-3 py-4 t-color-aliceblue">{{ $pembeli->telp_pembeli }}</td>
                        <td class="ps-3 py-4"><button type="button" class="btn btn-sm bg-color-secondary rounded-0 text-white hover-btn-color-secondary pilih-pelanggan">Pilih</button></td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>