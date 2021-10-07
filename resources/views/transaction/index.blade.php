<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Transaksi</h2>
	</x-slot>
	<div class="card p-0 shadow-md border-0 mb-4">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between align-items-center">
			<h6 class="t-color-secondary t-semibold m-0">Pelanggan</h6>
			<div class="d-flex">
				<button type="button" class="btn btn-sm bg-color-secondary text-white hover-shadow hover-translateY-1px transition rounded-0 rounded-start" id="btnDataPelanggan" data-bs-toggle="modal" data-bs-target="#modalpelanggan">Pilih Pelanggan</button>
				<button type="button" class="btn btn-sm bg-color-blue text-white hover-shadow hover-translateY-1px transition rounded-0 rounded-end" id="btnDataPelanggan" data-bs-toggle="modal" data-bs-target="#modalcreatepelanggan">Tambah Pelanggan</button>
			</div>
		</div>
		<div class="card-body">
			
			@include('transaction._modalpelanggan')
			@include('transaction._modalcreatepelanggan')
			@include('transaction._formpelanggan')
		</div>
	</div>

	<div class="card p-0 shadow-md border-0">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between align-items-center">
			<h6 class="t-color-secondary t-semibold m-0">Pelanggan</h6>
			<div class="d-flex">
				<button type="button" class="btn btn-sm bg-color-secondary text-white hover-shadow hover-translateY-1px transition rounded-0 rounded-start" id="btnDataPelanggan" data-bs-toggle="modal" data-bs-target="#modalmobil">Pilih Mobil</button>
			</div>
		</div>
		<div class="card-body">
			@include('transaction._modalmobil')
			@include('transaction._showmobil')
		</div>
	</div>

	<x-slot name="script">
		<script type="text/javascript">
			$(document).ready(function() {
				$('#tablePelanggan').DataTable();
				$('#tableMobil').DataTable();

				$('#tablePelanggan').on('click', '.pilih-pelanggan', function() {
					let row = $(this).closest('tr');
					let ktp = row.find('td:eq(0)').text();
					let nama = row.find('td:eq(1)').text();
					let telp = row.find('td:eq(2)').text();
					$('#v_nama').val(nama);
					$('#v_ktp_pembeli').val(ktp);
					$('#v_telp_pembeli').val(telp);
					$('#modalpelanggan').modal('hide');
				});

				$('#tableMobil').on('click', '.pilih-mobil', function() {
					let row = $(this).closest('tr');
					let kode = row.find('td:eq(0)').text();
					let merk = row.find('td:eq(1)').text();
					let warna = row.find('td:eq(2)').value();
					let harga = row.find('td:eq(3)').text();
					let gambar = row.find('td:eq(4)').value();
					$('#s-merk').text(merk);
					$('#s-warna').val(warna);
					$('#s-harga').text(harga);
					$('#modalmobil').modal('hide');
				});
				// $('#pelangganbaru').on('click', function() {
				// 	let pelangganBaru = document.getElementById("pelangganBaru");
				// 	let pelangganLama = document.getElementById("pelangganLama");
				// 	let btnDataPelanggan = document.getElementById("btnDataPelanggan");
				// 	pelangganBaru.classList.remove("d-none");
				// 	pelangganLama.classList.add("d-none");
				// 	btnDataPelanggan.classList.add("d-none");
				// });

				// $('#pelangganlama').on('click', function() {
				// 	let pelangganBaru = document.getElementById("pelangganBaru");
				// 	let pelangganLama = document.getElementById("pelangganLama");
				// 	let btnDataPelanggan = document.getElementById("btnDataPelanggan");
				// 	pelangganBaru.classList.add("d-none");
				// 	pelangganLama.classList.remove("d-none");
				// 	btnDataPelanggan.classList.remove("d-none");
				// });
			})
		</script>
	</x-slot>
</x-app-dashboard>