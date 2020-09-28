<template>
    <Full
        title="Login"
        image="/_dist/admin/app-assets/images/pages/login.png"
        helper="Welcome back, please login to your account."
    >
        <form @submit.prevent="submit">
            <FormRendererText :column="column.email" :form="form" :errors="$page.errors.email" />
            <FormRendererText :column="column.password" :form="form" :errors="$page.errors.password" />
            <div class="form-group d-flex justify-content-between align-items-center">
                <div class="text-left">
                    <FormRendererCheckBox :column="column.remember" :form="form" :errors="$page.errors.remember" />
                </div>
                <div class="text-right">
                    <call-link v-if="route().check('password.request')" :href="route('password.request')" class="card-link">{{ __('Forgot Password?')}}</call-link>
                </div>
            </div>
            <call-link  v-if="route().check('register')" :href="route('register')" class="btn btn-outline-primary float-left btn-inline">{{ __('Register')}}</call-link>
            <button type="submit" class="btn btn-primary float-right btn-inline">{{ __('Login') }}</button>
        </form>
    </Full>
</template>
<script>
    import Full from "@/layouts/Full";
    export default {
        name: "Login",
        props:['form','column','errors'],
        components: {Full},
        data() {
            return {}
        },
        methods: {
            submit() {
                this.$call.post(this.$route('login'), this.form)
            },
            __(value){
                return value;
            },
        },
    }
</script>
<style>

</style>
