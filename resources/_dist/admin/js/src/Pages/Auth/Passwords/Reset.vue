<template>
    <Full
        title="Reset Password"
        image="/_dist/admin/app-assets/images/pages/reset-password.png"
        helper="Please enter your new password."
    >
        <form @submit.prevent="submit">
            <FormRendererText :column="column.email" :form="form" :errors="$page.errors.email" />
            <FormRendererText :column="column.password" :form="form" :errors="$page.errors.password" />
            <FormRendererText :column="column.password_confirmation" :form="form" :errors="$page.errors.password_confirmation" />
            <call-link  v-if="route().check('login')" :href="route('login')" class="btn btn-outline-primary float-left btn-inline">{{ __('Back to login?')}}</call-link>
            <button type="submit" class="btn btn-primary float-right btn-inline">{{ __('Reset') }}</button>
        </form>
    </Full>
</template>
<script>
    import Full from "@/layouts/Full";
    export default {
        name: "Email",
        props:['form','column','errors'],
        components: {Full},
        data() {
            return {}
        },
        methods: {
            submit() {
                this.$call.post(this.$route('password.update'), this.form)
            },
            __(value){
                return value;
            },
        },
    }
</script>
<style>

</style>
