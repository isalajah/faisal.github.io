<form action="{{route('transaksi.update', $transaksi->id)}}"method="post">
{{csrf_field()}}
<table cellpadding="8">
<input type="hidden" name="_method" value="PUT"/>
<tr>
		<td>
			<div class="form-group">
				<label class="buku_id">judul buku <td>:</td></label>
				<td>
				<select style="width: 100%" class="form-control" name="buku_id">
					<option value="">pilih buku</option>
					@foreach ($buku As $k)
					<option value="{{$k->id}}" @if ($transaksi->buku_id==$k->id) selected @endif>{{$k->judul_buku}}</option>
					@endforeach
				</select>
				<p class="text-danger">{{$errors->first('buku_id')}}</p>
				</td>
			</div>
		</td>
	</tr>

    <tr>
		<td>
			<div class="form-group">
				<label for="kode_transaksi">kode transaksi <td>:</td></label>
					<td>
						<input type="text" name="kode_transaksi" class="form-control" value="{{$transaksi->kode_transaksi}}" required>
						<p class="text-danger">{{$errors->first('kode_transaksi')}}</p>
					</td>
			</div>
		</td>
	</tr>

    <tr>
		<td>
			<div class="form-group">
				<label for="tgl_pinjam">tanggal pinjam<td>:</td></label>
					<td>
						<input type="date" name="tgl_pinjam" class="form-control"  value="{{$transaksi->tgl_pinjam}}" required>
						<p class="text-danger">{{$errors->first('tgl_pinjam')}}</p>
					</td>
			</div>
		</td>
	</tr>

    <tr>
		<td>
			<div class="form-group">
				<label for="tgl_kembali">tanggal kembali<td>:</td></label>
					<td>
						<input type="date" name="tgl_kembali" class="form-control" value="{{$transaksi->tgl_kembali}}" required>
						<p class="text-danger">{{$errors->first('tgl_kembali')}}</p>
					</td>
			</div>
		</td>
	</tr>

    <tr>
	    <td>
             <div class="form-group">
	              <label for="status">status<td>:</td></label>
	                 <td><input type="radio" name="status" value="dipinjam"{{$transaksi->status=='dipinjam'?'checked':''}}
	                      class="form-control"required>dipinjam
	                 <input type="radio"name="status" value="kembali"{{$transaksi->status=='kembali'?'checked':''}}
	                class="form-control"required>kembali</td>
	              <p class="text-danger">{{$errors->first('status')}}</p>
             </div>
       </td>
    </tr>

    </div>
</table>
<div class="form-group">
<button class="btn btn-danger btn-sm">ubah</button>
<a href="{{ route('transaksi.index') }}" class="btn btn-primary btn-sm">batal</a>
</div>
</form>