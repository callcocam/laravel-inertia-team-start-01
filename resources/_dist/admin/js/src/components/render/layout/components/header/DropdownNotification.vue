<template>
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
            <i class="ficon feather icon-bell"></i>
            <span class="badge badge-pill badge-primary badge-up">{{ items.length }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
            <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">{{ title }}</h3>
                    <span class="notification-title">{{ subtitle }}</span>
                </div>
            </li>
            <template v-if="items.length">
                <li class="scrollable-container media-list" v-for="(item, i) in items">
                    <a class="d-flex justify-content-between" href="javascript:void(0)">
                        <div class="media d-flex align-items-start">
                            <div class="media-left">
                                <i class="feather font-medium-5 primary" :class="[item.icon, item.status]"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="primary media-heading">{{ item.name }}</h6>
                                <small class="notification-text"> {{ item.description }}</small>
                            </div>
                            <small>
                                <time class="media-meta" :datetime="item.datetime">{{ item.time }}</time>
                            </small>
                        </div>
                    </a>
                </li>
            </template>
            <li class="dropdown-menu-footer">
                <a class="dropdown-item p-1 text-center" href="javascript:void(0)">View all notifications</a>
            </li>
        </ul>
    </li>
</template>
<script>
    export default {
        name: "DropdownNotification",
        props:{
            title: {
                default:'5 New'
            },
            subtitle:{
                default:'App Notifications'
            },
            icon:{
                default:'icon-bell'
            },
        },
        data(){
            return {
                items:[
                    {
                        name:'You have new order!',
                        description:'Are your going to meet me tonight?',
                        slug:'/_dist/admin/app-assets/images/pages/eCommerce/4.png',
                        datetime:'2015-06-11T18:29:20+08:00',
                        time:'9 hours ago',
                        icon:'icon-plus-square',
                        status:'primary',
                    },
                    {
                        name:'You have new order!',
                        description:'Are your going to meet me tonight?',
                        slug:'/_dist/admin/app-assets/images/pages/eCommerce/4.png',
                        datetime:'2015-06-11T18:29:20+08:00',
                        time:'9 hours ago',
                        icon:'icon-download',
                        status:'success',
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
