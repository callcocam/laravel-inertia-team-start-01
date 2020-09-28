<template>
    <li class="nav-item">
        <call-link :href="route(url)">
            <i class="feather" :class="icon"></i>
            <span class="menu-title" :data-i18n="i18n">{{ label }}</span>
        </call-link>
    </li>
</template>
<script>
    export default {
        name: "SidebarNavItem",
        props:['label','i18n','icon','url'],

    }
</script>

<style scoped>

</style>
