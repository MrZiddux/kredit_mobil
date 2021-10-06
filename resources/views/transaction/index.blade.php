<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Transaksi</h2>
	</x-slot>
	<div class="card p-0 shadow-md border-0">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between">
			<h6 class="t-color-secondary t-semibold m-0">Pelanggan</h6>
		</div>
		<div class="card-body">
			<d-flex class="d-flex align-items-center justify-content-between mb-3">
				<div class="d-flex">
					<div class="form-check me-2  ">
						<input class="form-check-input" id="pelangganlama" type="radio" name="flexRadioDefault">
						<label class="form-check-label" for="flexRadioDefault2">
							Pelanggan Lama
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" id="pelangganbaru" type="radio" name="flexRadioDefault">
						<label class="form-check-label" for="flexRadioDefault1">
							Pelanggan Baru
						</label>
					</div>
				</div>
			<button type="button" class="btn bg-color-secondary hover-btn-color-secondary text-white transition d-flex align-items-center d-none" id="btnDataPelanggan" data-bs-toggle="modal" data-bs-target="#modalcreate">Data Pelanggan</button>
			@include('transaction./_modalpelangganlama')
			</d-flex>
			@include('transaction._formpelangganbaru')
			@include('transaction._formpelangganlama')
		</div>
	</div>

	<x-slot name="script">
		<script type="text/javascript">
			$(document).ready(function() {
				$('#table_id').DataTable();

				$('#pelangganbaru').on('click', function() {
					let pelangganBaru = document.getElementById("pelangganBaru");
					let pelangganLama = document.getElementById("pelangganLama");
					let btnDataPelanggan = document.getElementById("btnDataPelanggan");
					pelangganBaru.classList.remove("d-none");
					pelangganLama.classList.add("d-none");
					btnDataPelanggan.classList.add("d-none");
				});

				$('#pelangganlama').on('click', function() {
					let pelangganBaru = document.getElementById("pelangganBaru");
					let pelangganLama = document.getElementById("pelangganLama");
					let btnDataPelanggan = document.getElementById("btnDataPelanggan");
					pelangganBaru.classList.add("d-none");
					pelangganLama.classList.remove("d-none");
					btnDataPelanggan.classList.remove("d-none");
				});
			})
		</script>
	</x-slot>
</x-app-dashboard>