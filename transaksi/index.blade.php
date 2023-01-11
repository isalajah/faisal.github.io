<table cellpadding="8"> 
    <thead>
        <tr>
            <td colspan="8" align="center"><a href="{{ route('transaksi.create') }}">tambah transaksi</a></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>#</th>
            <th> judul buku </th>
            <th> kode transaksi </th>
            <th> pinjam </th>
            <th> kembali </th>
            <th> status </th>
            <th>Created At</th>
            <th>Aksi</th>
</tr>
</tbody>
<tbody>
    @foreach ($transaksi as $i => $v)
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$v->buku->judul_buku}}</td>
        <td>{{$v->kode_transaksi}}</td>
        <td>{{$v->tgl_pinjam}}</td>
        <td>{{$v->tgl_kembali}}</td>
        <td>{{$v->status}}</td>
        <td>{{$v->created_at}}</td>
        
        <td>
            <form action="{{ route('transaksi.destroy', $v->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{ route('transaksi.edit',$v->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                <button class="btn btn-danger btn-sm">HAPUS</button>
</form>
        </td>
</tr>
@endforeach
</tbody>
</table>