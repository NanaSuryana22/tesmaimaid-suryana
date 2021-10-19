<table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Date Of Brithday</th>
      <th scope="col">Join Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($datas as $no => $data)
        <tr>
          <td>{{ $data['fullname'] }}</td>
          <td>{{ $data['gender'] == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
          <td>{{ $data['email'] }}</td>
          <td>{{ $data['dob'] }}</td>
          <td>{{ $data['created_date'] }}</td>
          <td>
            <a class="btn btn-sm btn-primary"
              href="{{ route('halaman_utama.show',$data['id']) }}" title="Lihat Detail">
              <i class="fa fa-eye"></i>
            </a>
            <a class="btn btn-sm btn-warning"
              href="{{ route('halaman_utama.edit',$data['id']) }}" title="Ubah Data">
              <i class="fa fa-pencil"></i>
            </a>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>