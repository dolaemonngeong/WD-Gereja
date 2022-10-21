@extends('layouts.header')

@section('title', 'Jadwal')

@section('isi')
<h1>Jadwal Misa Harian</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Senin - Kamis</th>
                <th scope="col">05.00</th>
            </tr>
            <tr>
                <th scope="col">Jumat</th>
                <th scope="col">18.00</th>
            </tr>
        </tbody>
    </table>
    <h1>Jadwal Misa Mingguan</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Sabtu</th>
                <th scope="col">17.00</th>
            </tr>
            <tr>
                <th scope="col">Minggu</th>
                <th scope="col">06.00</th>
            </tr>
            <tr>
                <th scope="col">Minggu</th>
                <th scope="col">08.30</th>
            </tr>
            <tr>
                <th scope="col">Minggu</th>
                <th scope="col">17.00</th>
            </tr>
        </tbody>
    </table>
    <h1>Jadwal Buka Kantor Sekretariat</h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Senin</th>
                <th scope="col">Libur</th>
            </tr>
            <tr>
                <th scope="col">Selasa - Sabtu</th>
                <th scope="col">08.00 - 15.00</th>
            </tr>
            <tr>
                <th scope="col">Minggu</th>
                <th scope="col">09.00 - 12.00</th>
            </tr>
        </tbody>
    </table>
    @endsection