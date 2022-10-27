@extends('layouts.header')

@section('title', 'Jadwal')

@section('isi')
    <br>
    <div class="">
    <div class="tiapTable">
        <h1 class="text-center">Jadwal Misa Harian</h1>
        <div class="jadwalTable">
            <table class="table table-borderless">
                <thead class="bgTable">
                    <tr>
                        <td scope="col" class="" style="color:white; padding-left: 30px; width:50%;">Hari</td>
                        <td scope="col" class="jam" style="">Jam</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding-left: 30px;">Senin - Kamis</th>
                        <th>05.00</th>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px;">Jumat</th>
                        <th>18.00</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tiapTable">
        <h1 class="text-center">Jadwal Misa Mingguan</h1>
        <div class="jadwalTable">
            <table class="table table-borderless">
                <thead class="bgTable">
                    <tr>
                        <td scope="col" class="cColumn" style="color:white; padding-left: 30px; width:50%;">Hari</td>
                        <td scope="col" class="jam">Jam</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding-left: 30px;">Sabtu</th>
                        <th>17.00</th>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px;">Minggu</th>
                        <th>06.00</th>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px;">Minggu</th>
                        <th>08.30</th>
                    </tr>
                    <tr>
                        <td style="padding-left: 30px;">Minggu</th>
                        <th>17.00</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tiapTable tabelBawah">
        <h1 class="jadwalKantor text-center" style="">Jadwal Buka Kantor Sekretariat</h1>
        <div class="jadwalTable kantorTable">
            <table class="table table-borderless">
                <thead class="bgTable">
                    <tr>
                        <td scope="col" class="cColumn" style="color:white; padding-left: 30px; width:50%;">Hari</td>
                        <td scope="col" class="jam">Jam</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col" style="padding-left: 30px;">Senin</th>
                        <th scope="col">Libur</th>
                    </tr>
                    <tr>
                        <td scope="col" style="padding-left: 30px;">Selasa - Sabtu</th>
                        <th scope="col">08.00 - 15.00</th>
                    </tr>
                    <tr>
                        <td scope="col" style="padding-left: 30px;">Minggu</th>
                        <th scope="col">09.00 - 12.00</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
