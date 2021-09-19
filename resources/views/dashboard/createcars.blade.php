<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Tambah Mobil</h2>
	</x-slot>

	<div class="card p-0 shadow-md border-0">
		<div class="card-header bg-transparent p-3">
			<h6 class="t-color-secondary t-semibold m-0">Mobil</h6>
		</div>
		<div class="card-body">
			<form action="" method="">
				<div class="ps-lg-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="merk" class="form-label">Merk Mobil</label>
								<input type="text" class="form-control" id="merk" name="merk" placeholder="e.g Tesla">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="type" class="form-label">Tipe Mobil</label>
								<input type="text" class="form-control" id="type" name="type" placeholder="e.g Sport">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="harga_mobil" class="form-label">Harga Mobil</label>
								<input type="text" class="form-control" id="harga_mobil" name="harga_mobil" placeholder="e.g 2.000.000.000">
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="gambar" class="form-label">Gambar Mobil</label>
								<input type="file" class="form-control" id="gambar" name="gambar">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="warna" class="form-label">Warna Mobil</label>
								<input type="color" class="form-control form-control-color" id="warna" name="warna">
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-lg-3">
							<a href="/dashboard/cars" class="btn bg-color-lightgray text-white hover-shadow hover-translateY-1px transition">Batal</a>
							<button type="button" class="btn bg-color-secondary text-white hover-shadow hover-translateY-1px transition">Tambah Mobil</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</x-app-dashboard>