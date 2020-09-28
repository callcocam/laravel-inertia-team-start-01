<template>
    <Full
        title="Create Account"
        image="/_dist/admin/app-assets/images/pages/register.jpg"
        helper="Fill the below form to create a new account."
    >
        <form @submit.prevent="submit">
            <FormRendererText :column="column.name" :form="form" :errors="$page.errors.name" />
            <FormRendererText :column="column.email" :form="form" :errors="$page.errors.email" />
            <FormRendererText :column="column.password" :form="form" :errors="$page.errors.password" />
            <FormRendererText :column="column.password_confirmation" :form="form" :errors="$page.errors.password_confirmation" />
            <div class="form-group d-flex justify-content-between align-items-center">
                <div class="text-left">
                    <FormRendererCheckBox :column="column.terms" :form="form" :errors="$page.errors.terms" />
                </div>
            </div>
            <call-link  v-if="route().check('login')" :href="route('login')" class="btn btn-outline-primary float-left btn-inline">{{ __('Back to login?')}}</call-link>
            <button type="submit" class="btn btn-primary float-right btn-inline">{{ __('Register') }}</button>
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
                this.$call.post(this.$route('register'), this.form)
            },
            __(value){
                return value;
            },
        },
    }
</script>
<style>

</style>
