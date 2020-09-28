<template>
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
            <i class="ficon feather icon-shopping-cart"></i>
            <span class="badge badge-pill badge-primary badge-up cart-item-count">{{ items.length }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right">
            <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">
                        <span class="cart-item-count">{{ items.length }}</span>
                        <span class="mx-50">{{ title }}</span>
                    </h3>
                    <span class="notification-title">{{ subtitle }}</span>
                </div>
            </li>
            <template v-if="items.length">
                <li class="scrollable-container media-list" v-for="(item, i) in items" :key="i">
                    <a class="cart-item" :href="item.slug">
                        <div class="media">
                            <div class="media-left d-flex justify-content-center align-items-center">
                                <img :src="item.cover" width="75" alt="Cart Item">
                            </div>
                            <div class="media-body">
                                <span class="item-title text-truncate text-bold-500 d-block mb-50">{{ item.name }}</span>
                                <span class="item-desc font-small-2 text-truncate d-block">{{ item.description }} </span>
                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">{{ item.price }}</span>
                                    <i class="remove-cart-item feather icon-x danger font-medium-1"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </template>
            <li class="dropdown-menu-footer" v-if="items.length">
                <a class="dropdown-item p-1 text-center text-primary" href="app-ecommerce-checkout.html">
                    <i class="feather icon-shopping-cart align-middle"></i>
                    <span class="align-middle text-bold-600">Checkout</span>
                </a>
            </li>
            <li class="empty-cart d-none p-2" v-else>Your Cart Is Empty.</li>
        </ul>
    </li>
</template>
<script>
    export default {
        name: "DropdownCart",
        props:{
            title: {
                default:'Items'
            },
            subtitle:{
                default:'In Your Cart'
            },
            icon:{
                default:'icon-shopping-cart'
            },
        },
        data(){
            return {
                items:[
                    {
                        name:'Apple - Apple Watch Series 1 42mm Space Gray Aluminum Case Black Sport Band - Space Gray Aluminum',
                        description:'Durable, lightweight aluminum cases in silver, space gray,gold, and rose gold. Sport Band in a variety of colors. All the features of the original Apple Watch, plus a new dual-core processor for faster performance. All models run watchOS 3. Requires an iPhone 5 or later to run this device.',
                        cover:'/_dist/admin/app-assets/images/pages/eCommerce/4.png',
                        slug:'/_dist/admin/app-assets/images/pages/eCommerce/4.png',
                    },
                    {
                        name:'Apple - Apple Watch Series 1 42mm Space Gray Aluminum Case Black Sport Band - Space Gray Aluminum',
                        description:'Durable, lightweight aluminum cases in silver, space gray,gold, and rose gold. Sport Band in a variety of colors. All the features of the original Apple Watch, plus a new dual-core processor for faster performance. All models run watchOS 3. Requires an iPhone 5 or later to run this device.',
                        cover:'/_dist/admin/app-assets/images/pages/eCommerce/4.png',
                        slug:'/_dist/admin/app-assets/images/pages/eCommerce/4.png',
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
