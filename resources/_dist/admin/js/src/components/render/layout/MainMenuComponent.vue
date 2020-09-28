<template>
    <!-- BEGIN: Main Menu-->
    <div @mouseenter="mouseEnter" @mouseleave="mouseLeave"
          class="main-menu menu-fixed menu-light menu-accordion menu-shadow" :class="[layoutTypeClass]"
         data-scroll-to-active="true">
        <div class="navbar-header" :class="[layoutTypeClass]">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <call-link class="navbar-brand" :href="route('admin')">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </call-link>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse" @click="openCloseMobile()">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            :class="[{'icon-circle' : collapseSidebar},{'icon-disc':!collapseSidebar}]"
                           data-ticon="icon-circle"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <SidebarNavItem icon="icon-home" i18n="Dashboard" label="Dashboard" url="admin" />
                <li class=" navigation-header"><span>Apps</span></li>
                <SidebarNavGroup label="Users" i18n="Users" icon="icon-user" />
                <li class=" navigation-header"><span>Others</span></li>
                <SidebarNavGroup />
                <SidebarNavGroup label="Menu Levels" i18n="MenuLevels" icon="icon-menu" />
                <li class=" nav-item">
                    <a href="#">
                        <i class="feather icon-menu"></i>
                        <span class="menu-title" data-i18n="Menu Levels">Menu Levels</span>
                    </a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" navigation-header"><span>Support</span>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
</template>

<script>
    import themeConfig from "@/themeConfig";
    export default {
        name: "MainMenuComponent",
        data(){
            return {
                layoutTypeClass     :'',
                collapseSidebar     :themeConfig.sidebarCollapsed,
                isMouseEnter        :false,
            }
        },
        methods:{
            toggleClassInBody (className) {
                if(!document.body.classList.contains('menu-expanded')){
                    if (className){
                        this.layoutTypeClass = 'expanded'
                    } else {
                        this.layoutTypeClass = ''
                    }
                }
            },
            openCloseMobile(){
                document.body.classList.toggle('menu-expanded')
                document.body.classList.toggle("shepherd-active")
                document.body.classList.toggle("menu-collapsed")
                this.collapseSidebar = !this.collapseSidebar
            },
            mouseEnter () {
                this.isMouseEnter = true
                this.toggleClassInBody(true)
                console.log('mouseEnter')
            },
            mouseLeave () {
                console.log('mouseLeave')
                this.isMouseEnter = false
                this.toggleClassInBody(false)
            }
        }

    }
</script>

<style scoped>

</style>
