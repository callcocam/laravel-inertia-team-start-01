<template>
    <li class="dropdown dropdown-user nav-item">
        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
        <div class="user-nav d-sm-flex d-none">
            <span class="user-name text-bold-600">John Doe</span>
            <span class="user-status">Available</span>
        </div>
            <span>
                <img class="round" src="/_dist/admin/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
            </span>
    </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="feather icon-user"></i> Edit Profile
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="feather icon-mail"></i> My Inbox
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="feather icon-check-square"></i> Task
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="feather icon-message-square"></i> Chats
            </a>
            <div class="dropdown-divider"></div>
            <call-link class="dropdown-item" :href="route('logout')" method="post">
                <i class="feather icon-power"></i> Logout
            </call-link>
        </div>
    </li>
</template>

<script>
    export default {
        name: "DropdownUser",
    }
</script>

<style scoped>

</style>
