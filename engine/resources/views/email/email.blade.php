<div>
    Hi, {{$name->nama_lengkap}}
    Formulir pendaftaran APL-01 atas nama {{$name->nama_lengkap}} telah selesai di periksa oleh admin. <br>
    Anda dapat melanjutkan pengisian formulir APL-02 disini  :  {{$link}} <br>
    Uji Kompetensi akan dilakukan pada : <br>
    <table>
        <tr>
            <td>Hari / Tanggal</td>
            <td style="width: 30px; text-align: center">:</td>
            @if(($bulan_mulai == $bulan_selesai) && ($tahun_mulai == $tahun_selesai))
            <td>{{$hari_mulai}} - {{$hari_selesai}}, {{$tanggal_mulai}} - {{$tanggal_selesai}} {{$bulan_selesai}} {{$tahun_selesai}}</td>
            @else
            <td>{{$hari_mulai}} - {{$hari_selesai}}, {{$tanggal_mulai}} {{$bulan_mulai}} {{$tahun_mulai}} - {{$tanggal_selesai}} {{$bulan_selesai}} {{$tahun_selesai}}</td>
            @endif
        </tr>
        <tr>
            <td>Pukul</td>
            <td style="width: 30px; text-align: center">:</td>
            <td>07:30 - Selesai</td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td style="width: 30px; text-align: center">:</td>
            <td>TUK LSP P1 {{$tempat_asesi}}</td>
        </tr>
    </table>
    <br>
    Terima Kasih, <br>
    LSP SMK Negeri 26 Jakarta
</div>