<h3 align="center">Data Kiriman Paket Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
      @php
        $ar_judul = ['No','Nama Pengirim','Instansi',
                     'Tipe Barang','Nama Penerima'];
        $no = 1;    
      @endphp     
      @foreach($ar_judul as $jdl)    
          <th>{{ $jdl }}</th>
      @endforeach
      </tr>
    </thead>
    <tbody>
    @foreach ($ar_paket as $paket)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $paket->nama_pengirim }}</td>     
          <td>{{ $paket->instansi }}</td> 
          <td>{{ $paket->tipe_barang }}</td>
          <td>{{ $paket->nama_penerima }}</td>
          
      </tr>
    @endforeach   
    </tbody>    
    
  </table>