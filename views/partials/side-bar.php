<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="/create" class="<?= urlIs('/create') ? 'active' : '' ?> list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-circle-plus fa-fw me-3"></i><span>Add Branches</span>
            </a>

            <a href="/" class="<?= urlIs('/') ? 'active' : '' ?> list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-list fa-fw me-3"></i><span>Branches List</span>
            </a>
            <a href="/filter" class="<?= urlIs('/filter') ? 'active' : '' ?> list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-list fa-fw me-3"></i><span>USSD Logs</span>
            </a>
        </div>
    </div>
</nav>
<!-- Sidebar -->