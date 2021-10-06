<div class="modal fade" id="modalcreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <form action="" method="POST">
      @csrf
         <div class="modal-content">
            <div class="modal-header bg-white p-3 d-flex">
               <h6 class="modal-title t-color-secondary t-semibold m-0 float-start">Mobil</h6>
               <div class="group-action">
                  <!-- <button type="submit" class="btn btn-sm bg-color-secondary text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-end">Tambah Mobil</button> -->
                  <button type="button" class="btn btn-sm bg-color-lightgray text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-start" data-bs-dismiss="modal" aria-label="Close">Batal</button>
               </div>
            </div>
            <div class="modal-body">
               <div class="ps-lg-3">
                  <div class="table-responsive">
                     <table id="table_id" class="table align-middle">
                         <thead class="bg-color-deactive">
                             <tr>
                                 <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Column 1</th>
                                 <th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Column 2</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="ps-3 py-4 t-color-aliceblue">Row 1 Data 1</td>
                                 <td class="ps-3 py-4 t-color-aliceblue">Row 1 Data 2</td>
                             </tr>
                             <tr>
                                 <td class="ps-3 py-4 t-color-aliceblue">Row 2 Data 1</td>
                                 <td class="ps-3 py-4 t-color-aliceblue">Row 2 Data 2</td>
                             </tr>
                         </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>