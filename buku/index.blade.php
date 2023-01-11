<table cellpadding="8"> 
    <thead>
        <tr>
            <td colspan="8" align="center"><a href="{{ route('buku.create') }}">tambah buku</a></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>#</th>
            <th> judul buku </th>
            <th> jenis buku </th>
            <th> pengarang </th>
            <th> penerbit </th>
            <th> tahun terbit </th>
            <th> jumlah buku </th>
            <th>Created At</th>
            <th>Aksi</th>
</tr>
</tbody>
<tbody>
    @foreach ($buku as $i => $v)
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$v->judul_buku}}</td>
        <td>{{$v->jenis_buku}}</td>
        <td>{{$v->pengarang}}</td>
        <td>{{$v->penerbit}}</td>
        <td>{{$v->tahun_terbit}}</td>
        <td>{{$v->jumlah_buku}}</td>
        <td>{{$v->created_at}}</td>
        
        <td>
            <form action="{{ route('buku.destroy', $v->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{ route('buku.edit',$v->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                <button class="btn btn-danger btn-sm">HAPUS</button>
</form>
        </td>
</tr>
@endforeach
</tbody>
</table>