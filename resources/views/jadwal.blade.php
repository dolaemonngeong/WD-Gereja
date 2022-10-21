@extends('layouts.header')

@section('title', 'Jadwal')

@section('isi')
<div class="">
    {{-- <div> --}}
    <h1 class="text-center">Jadwal Misa Harian</h1>
    <div class="jadwalTable">
        <table class="table ">
            <thead class="bgTable">
                <tr>
                    <th scope="col" class="cColumn" style="padding-left: 30px; width:50%;">Hari</th>
                    <th scope="col" class="cColumn">Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Senin - Kamis</th>
                    <th scope="col">05.00</th>
                </tr>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Jumat</th>
                    <th scope="col">18.00</th>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- </div> --}}
    <h1 class="text-center">Jadwal Misa Mingguan</h1>
    <div class="jadwalTable">
        <table class="table">
            <thead class="bgTable">
                <tr>
                    <th scope="col" class="cColumn" style="padding-left: 30px; width:50%;">Hari</th>
                    <th scope="col" class="cColumn">Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Sabtu</th>
                    <th scope="col">17.00</th>
                </tr>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Minggu</th>
                    <th scope="col">06.00</th>
                </tr>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Minggu</th>
                    <th scope="col">08.30</th>
                </tr>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Minggu</th>
                    <th scope="col">17.00</th>
                </tr>
            </tbody>
        </table>
    </div>
    <h1 class="text-center">Jadwal Buka Kantor Sekretariat</h1>
    <div class="jadwalTable">
        <table class="table">
            <thead class="bgTable">
                <tr>
                    <th scope="col" class="cColumn" style="padding-left: 30px; width:50%;">Hari</th>
                    <th scope="col" class="cColumn">Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Senin</th>
                    <th scope="col">Libur</th>
                </tr>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Selasa - Sabtu</th>
                    <th scope="col">08.00 - 15.00</th>
                </tr>
                <tr>
                    <th scope="col" style="padding-left: 30px;">Minggu</th>
                    <th scope="col">09.00 - 12.00</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
