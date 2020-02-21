<h3 align="center">Data Tamu Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
      @php
        $ar_judul = ['No','Nama','Gender','Instansi',
                     'No Telp','Keperluan','Tanggal datang'];
        $no = 1;    
      @endphp     
      @foreach($ar_judul as $jdl)    
          <th>{{ $jdl }}</th>
      @endforeach
      </tr>
    </thead>
    <tbody>
    @foreach ($ar_tamu as $tamu)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $tamu->nama }}</td>
          <td>{{ $tamu->gender }}</td>
          <td>{{ $tamu->instansi }}</td>
          <td>{{ $tamu->no_telp }}</td>
          <td>{{ $tamu->keperluan }}</td>
          <td>{{ $tamu->tanggal_datang }}</td>
          
      </tr>
    @endforeach   
    </tbody>    
    
  </table>