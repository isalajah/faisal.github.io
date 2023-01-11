<form action="{{route('buku.store')}}"method="post">
{{csrf_field()}}
<table cellpadding="8">
<tr>
    
<tr>
		<td>
			<div class="form-group">
				<label for="judul_buku">judul_buku <td>:</td></label>
					<td>
						<input type="text" name="judul_buku" class="form-control" required>
						<p class="text-danger">{{$errors->first('judul_buku')}}</p>
					</td>
			</div>
		</td>
	</tr>

    <tr>
		<td>
			<div class="form-group">
				<label for="jenis_buku">jenis buku <td>:</td></label>
					<td>
						<input type="text" name="jenis_buku" class="form-control" required>
						<p class="text-danger">{{$errors->first('jenis_buku')}}</p>
					</td>
			</div>
		</td>
	</tr>

    <tr>
		<td>
			<div class="form-group">
				<label for="pengarang">pengarang <td>:</td></label>
					<td>
						<input type="text" name="pengarang" class="form-control" required>
						<p class="text-danger">{{$errors->first('pengarang')}}</p>
					</td>
			</div>
		</td>
	</tr>
    
    <tr>
		<td>
			<div class="form-group">
				<label for="penerbit"> penerbit <td>:</td></label>
					<td>
						<input type="text" name="penerbit" class="form-control" required>
						<p class="text-danger">{{$errors->first('penerbit')}}</p>
					</td>
			</div>
		</td>
	</tr>
    
    <tr>
		<td>
			<div class="form-group">
				<label for="tahun_terbit">tahun_terbit<td>:</td></label>
					<td>
						<input type="text" name="tahun_terbit" class="form-control" required>
						<p class="text-danger">{{$errors->first('tahun_terbit')}}</p>
					</td>
			</div>
		</td>
	</tr>
    
    <tr>
		<td>
			<div class="form-group">
				<label for="jumlah_buku"> jumlah buku<td>:</td></label>
					<td>
						<input type="number" name="jumlah_buku" class="form-control" required>
						<p class="text-danger">{{$errors->first('jumlah_buku')}}</p>
					</td>
			</div>
		</td>
	</tr>
    </table>
<div class="form-group">
<button class="btn btn-danger btn-sm">tambah</button>
<a href="{{ route('buku.index') }}" class="btn btn-primary btn-sm">batal</a>
</div>
</form>