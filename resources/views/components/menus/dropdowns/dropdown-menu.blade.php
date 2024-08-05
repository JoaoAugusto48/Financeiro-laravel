<ul class="dropdown-menu dropdown-menu-dark">
    <x-menus.items.view :href="$view"/>
    <x-menus.items.create :href="$create"/>
    {{ $slot }}
</ul>