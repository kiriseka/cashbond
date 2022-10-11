@extends('layouts.app')

    <!-- Page content -->
    @section('content')
        <div class="konten">
            <label>Report an issue :</label>
            <select name="report">
                <option value="bug">Adanya bug</option>
                <option value="lost">Data menghilang</option>
                <option value="mbuh1">Huehuehue</option>
                <option value="mbuh2">Huehuehuehuehue</option>
            </select>
            <br>
            <br>
            <textarea name="teks" rows="4" cols="50" placeholder="Ngeluhin apa"></textarea>
            <br>
            <input type="submit" name="kirim" value="Kirim" />
        </div>
        <script src="/js/script.js"></script> 
    @endsection