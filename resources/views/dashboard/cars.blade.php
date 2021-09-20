<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Mobil</h2>
		<a href="/dashboard/cars/create" class="btn btn-sm shadow-md hover-translateY-2px text-white bg-color-secondary t-semibold t-size-sm transition hover-shadow btn-icon"><i class="material-icons text-white">add_circle</i></a>
	</x-slot>

	<div class="card p-0 shadow-md border-0">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between">
			<h6 class="t-color-secondary t-semibold m-0">Daftar Mobil</h6>
			<h6 class="t-color-secondary t-semibold m-0 t-size-sm">25 Entries</h6>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table class="table align-middle">
					<thead class="bg-color-deactive">
						<tr>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Kode Mobil</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Merk</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Warna</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Harga</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Stok</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Terjual</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="ps-3 py-4 t-color-aliceblue">FER20213</td>
							<td class="ps-3 py-4 t-color-aliceblue">Ferrari FXX K Evo</td>
							<td class="ps-3 py-4 t-color-aliceblue">
								<input type="color" class="form-control form-control-color" disabled value="#6f05fa">
							</td>
							<td class="ps-3 py-4 t-color-aliceblue">Rp. 3.450.000.000</td>
							<td class="ps-3 py-4 t-color-aliceblue">6</td>
							<td class="ps-3 py-4 t-color-aliceblue">3</td>
							<td class="ps-3 py-4 d-flex">
								<a href="#" class="btn btn-sm bg-color-green text-white rounded-start rounded-0 hover-shadow hover-translateY-2px transition btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="material-icons text-white">visibility</i></a>
								<a href="/dashboard/cars/update" class="btn btn-sm bg-color-blue text-white rounded-end rounded-0 hover-shadow hover-translateY-2px transition btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="material-icons text-white">edit</i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-app-dashboard>