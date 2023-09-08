<x-admin.layout title="Menus">
    <h2>Header Menus</h2>
    <x-tables.simple
        :labels="['Name']"
        :fields="['name']"
        :models="$headerMenus" title="Header Menus"
        off="1"/>
    <h2>Footer Menus</h2>
    <x-tables.simple
        :labels="['Name']"
        :fields="['name']"
        :models="$footerMenus" title="Footer Menus"
        off="1"/>

    <x-buttons.add-link
        link="{{ route('menus.create') }}"
    >Add Menu</x-buttons.add-link>
</x-admin.layout>
