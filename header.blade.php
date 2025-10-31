<header>
    <h1 style="text-align: center">My Personal Website</h1>
<nav>
    <ul>
        <li class="{{ request()->route('beranda') ? 'active' : ''}}">
            <a href="{{ route('beranda') }}">Beranda</a>
        </li>
         <li class="{{ request()->route('datadiri') ? 'active' : ''}}">
            <a href="{{ route('datadiri') }}">Data Diri</a>
        </li>
        <li class="{{ request()->route('aktifitas') ? 'active' : ''}}">
            <a href="{{ route('aktifitas') }}">Aktifitas</a>
        </li>
        <li class="{{ request()->route('kontak') ? 'active' : ''}}">
            <a href="{{ route('kontak') }}">Kontak</a>
        </li>
    </ul>
</nav>

<style>
    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        gap: 20px;
    }
    nav ul li a {
        text-decoration: none;
        color:black;
    }
    nav ul li .active a {
        font-weight: bold;
        color: blue;
    }
</style>
            
