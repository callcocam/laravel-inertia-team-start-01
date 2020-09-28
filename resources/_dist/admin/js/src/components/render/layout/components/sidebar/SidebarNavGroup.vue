<template>
    <li class=" nav-item"><a href="javascript:void(0)">
        <i class="feather" :class="icon"></i>
        <span class="menu-title" :data-i18n="i18n">{{ label }}</span>
    </a>
        <ul class="menu-content" v-if="items.length">
            <li v-if="route().check(item.url)" v-for="(item, i) in items" :key="i">
                <call-link :href="route(item.url)">
                    <i class="feather icon-circle"></i>
                    <span class="menu-item" :data-i18n="item.i18n">{{ item.label }}</span>
                </call-link>
            </li>
        </ul>
    </li>
</template>

<script>
    import themeConfig from '@/themeConfig.js'
    export default {
        name: "SidebarNavGroup",
        props:['label','i18n','icon'],
        data(){
            return {
                items:[
                    {
                        label:'List',
                        i18n:'List',
                        url:'users.index',
                    },
                    {
                        label:'List',
                        i18n:'List',
                        url:'users.index',
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
