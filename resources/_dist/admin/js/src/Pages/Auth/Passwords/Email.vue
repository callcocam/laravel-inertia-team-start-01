<template>
    <Full
        title="Recover your password"
        image="/_dist/admin/app-assets/images/pages/forgot-password.png"
        helper="Please enter your email address and we'll send you instructions on how to reset your password."
    >
        <form @submit.prevent="submit">
            <FormRendererText :column="column.email" :form="form" :errors="$page.errors.email" />
            <call-link  v-if="route().check('login')" :href="route('login')" class="btn btn-outline-primary float-left btn-inline">{{ __('Back to Login')}}</call-link>
            <button type="submit" class="btn btn-primary float-right btn-inline">{{ __('Recover Password') }}</button>
        </form>
    </Full>
</template>
<script>
    import Full from "@/layouts/Full";
    export default {
        name: "Email",
        props:['form','column'],
        components: {Full},
        data() {
            return {}
        },
        methods: {
            submit() {
                this.$call.post(this.$route('password.email'), this.form)
            },
            __(value){
                return value;
            },
        },
    }
</script>
<style>

</style>
