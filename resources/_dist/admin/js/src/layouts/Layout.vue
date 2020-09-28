<template>
    <div>
       <HeaderComponent />
       <SearchListComponent />
        <ul class="main-search-list-defaultlist-other-list d-none">
            <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
        </ul>
        <MainMenuComponent />
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <slot></slot>
            </div>
        </div>
    </div>
</template>
<script>
    import themeConfig from '@/themeConfig.js'
    export default {
        props: {
            title: String,
        },
        watch: {
            title: {
                immediate: true,
                handler(title) {
                    document.title = title
                },
            },
        },
        methods:{
            toggleClassInBody(className){
                let body = document.body;
                if (className === 'dark') {
                    if (body.className.match('theme-semi-dark')){
                        body.classList.remove('theme-semi-dark')
                    }
                    body.classList.add('theme-dark')
                } else if (className === 'semi-dark') {
                    if (body.className.match('theme-dark')) {
                        body.classList.remove('theme-dark')
                    }
                    body.classList.add('theme-semi-dark')
                } else {
                    if (body.className.match('theme-dark')){
                        body.classList.remove('theme-dark')
                    }
                    if (body.className.match('theme-semi-dark')) {
                        body.classList.remove('theme-semi-dark')
                    }
                }
            },
            __(value){
                return value;
            }
        },
        mounted() {
            this.toggleClassInBody(themeConfig.theme)
        }
    }
</script>
