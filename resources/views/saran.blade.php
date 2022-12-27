@extends('layouts.app')

    <!-- Page content -->
    @section('content')
        <div class="konten">
            <form action="/sugestion" method="post">
                @csrf
                <label>Permasalahan :</label>
                <select name="type" id="type">
                    <option value="bug">Laporan Bug</option>
                    <option value="suggestion">Saran</option>
                    <option value="question">Pertanyaan</option>
                </select>
                <br>
                <br>
                <textarea rows="4" cols="50" placeholder="Detail permasalahan" id="message" name="message"></textarea>
                <br>
                <input type="submit" name="kirim" value="Kirim" />
            </form>
        </div>
        <script src="/js/script.js"></script> 
    @endsection