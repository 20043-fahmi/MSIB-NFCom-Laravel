<h1 align="center" style="padding-top: 2rem;">Daftar Nilai Mahasiswa/I </h1>

@php
    $table = ['NO', 'NAMA', 'NILAI', 'KETERANGAN'];
@endphp

<table align="center" cellpadding="10" style="width: 50%;">
    <thead>
        <tr bgcolor="black" style="color: white">
            @foreach ($table as $t)
                <th>{{ $t }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp

        @foreach ($data as $d)
            @php
                $ket = $d['nilai'] > 60 ? 'Lulus' : 'Gagal';
                $bcolor = $no % 2 == 0 ? 'white' : 'gray';
                $fcolor = $no % 2 == 0 ? 'black' : 'white';
            @endphp

            <tr bgcolor="{{ $bcolor }}" style="color:{{$fcolor}}">
                <td align="center">{{ $no++ }}</td>
                <td>{{ $d['nama'] }}</td>
                <td align="center">{{ $d['nilai'] }}</td>
                <td>{{ $ket }}</td>
            </tr>
        @endforeach
    </tbody>
</table>