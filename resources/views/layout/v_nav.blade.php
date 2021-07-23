<li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Kuliah
</div>

<!-- Nav Item - Charts -->
<li class="nav-item {{ request()->is('kuliah') ? 'active' : '' }}">
    <a class="nav-link" href="/kuliah">
        <i class="fas fa-fw fa-table"></i>
        <span>Kuliah</span></a>
</li>
<!-- Nav Item - Charts -->
<li class="nav-item {{ request()->is('grafik') ? 'active' : '' }}">
    <a class="nav-link" href="/grafik">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Grafik</span></a>
</li>
